<?php

$reverse = mb_strtolower(strrev($_POST['palindrome']));

if(mb_strtolower($_POST['palindrome']) === $reverse){
    $result = 'This word is palindrome';
} else {
    $result = 'This word isn`t palindrome';
}
