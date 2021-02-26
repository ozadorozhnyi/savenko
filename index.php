<?php

// ініціалізацію і налаштування веб-додатка виносимо окремо
require_once __DIR__ . '/bootstrap.php';

/**
 * наступні 3 умовні оператори
 * та код який знаходиться в них, дуже нагадують бізнес логігу
 * поки що залишажмо їх тут, на майбутнє теж винесемо окремо
 */
if(isset($_GET['submit']))
{
    $parseYear = (int)$_GET['year'];
    $parseMonth = (int)$_GET['month'];
    $monthOfYear = ARRAY_MONTH[$parseMonth];

    $isLeapYear = ($parseYear % 4) || (($parseYear % 100 === 0) && ($parseYear % 400)) ? 0 : 1;
    $daysInMonth = ($parseMonth === 2) ? (28 + $isLeapYear) : 31 - ($parseMonth - 1) % 7 % 2;

    if($isLeapYear){
        $is = 'is';
    } else {
        $is = 'isn`t';
    }

    $outputAboutYear = "Year $parseYear $is leap";
    $outputAboutMonth = "In $monthOfYear $daysInMonth days";

}

if(isset($_GET['submit-palindrome']))
{
    $reverse = mb_strtolower(strrev($_GET['palindrome']));

    if(mb_strtolower($_GET['palindrome']) === $reverse){
        $result = 'This word is palindrome';
    } else {
        $result = 'This word isn`t palindrome';
    }
}

if(isset($_GET['submit-vowels']))
{
    for($i = 0; $i < strlen($_GET['check-vowels']); $i++){
        for($j = 0; $j < count(ARRAY_VOWELS); $j++){
            if(mb_strtolower($_GET['check-vowels'][$i]) === ARRAY_VOWELS[$j] ){
                $countVowel++;
                break;
            }
        }
    }
    $countVowelResult = "This line has $countVowel vowels";
}

/**
 * мухи і котлети: бізнес логіка і відображення 
 * НЕ МОЖУТЬ І НЕ ПОВИННІ виносимо в окремий файл 
 */
require_once VIEWS_PATH . 'master.view.php';
