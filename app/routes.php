<?php

if(isset($_POST['submit']))
{
    require_once CONTROLLERS_PATH . 'LeapController.php';
}

if(isset($_POST['submit-palindrome']))
{
    require_once CONTROLLERS_PATH . 'PalindromeController.php';
}

if(isset($_POST['submit-vowels']))
{
    require_once CONTROLLERS_PATH . 'VovelController.php';
}
