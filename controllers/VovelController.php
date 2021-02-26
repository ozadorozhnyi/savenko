<?php

// реалізовуємо прохід по кожному символу цього слова
for($i = 0; $i < mb_strlen($_POST['check-vowels']); $i++){
    // реалізовуємо прохід по кожному голосному символу
    for($j = 0; $j < count(ARRAY_VOWELS); $j++){
        if(mb_strtolower($_POST['check-vowels'][$i]) === ARRAY_VOWELS[$j] ){
            $countVowel++;
            break;
        }
    }
}

$countVowelResult = "This line `{$_POST['check-vowels']}` has $countVowel vowels";
