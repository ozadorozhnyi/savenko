<?php

// тут живуть оголошення глобальних змінних
// глобальні змінні це не дуже добре, і будемо боротися з цим в майбутньому
$is = '';
$countVowel = 0;

/**
 * 
 * хочеться відзначити дуже толкове іменування змінних
 * 
 * стандарти, вони є і їх потрібно дотримуватися
 * PSR-1: Basic Coding Standard - https://www.php-fig.org/psr/psr-1/
 * PSR-2: Coding Style Guide - https://www.php-fig.org/psr/psr-2/
 */
$result = 'Enter word, please';
$outputAboutYear = 'Enter year, please';
$outputAboutMonth = 'Enter month, please';
$countVowelResult = 'Enter line, please';

// список із назвами місяців, для різних локалізацій (мов)
// щоб в майбутньому була змога локалізувати наш веб-додаток
$months = [
    'en' => [
        '1' => 'January', 'February',
        'March', 'April', 'May',
        'June', 'July', 'August',
        'September', 'October', 'November',
        'December'
    ],
    'ua' => [
        '1' => 'Січень', 
    ],
];

// а ось тут я захардкодив значення по замовчуванню
$monthArray = $months['en'];

// не забуваємо залишати один "пустий" рядок в кінці кожного php-файла
