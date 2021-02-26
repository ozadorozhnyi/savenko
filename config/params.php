<?php

/**
 * все що може змінюватися в майбутьому чи при перенесенні веб-додатка
 * на інші сервери - КОНФІГУРУЄМО
 * і задаємо через константи
 */
define('VIEWS_PATH', __DIR__.'/../views/');

// а от з цим рядком ми ще розберемося, хоча синтаксично він реалізований вірно
define('ARRAY_MONTH', ['1' => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);

// тут все ок
define('ARRAY_VOWELS', ['a', 'e', 'i', 'o', 'u']);