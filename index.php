<?php
    require_once 'config/params.php';

    $outputAboutYear = 'Enter year, please';
    $outputAboutMonth = 'Enter month, please';
    $is = '';
    $result = 'Enter word, please';
    $countVowel = 0;
    $countVowelResult = 'Enter line, please';


    if(isset($_GET['submit'])){
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

    if(isset($_GET['submit-palindrome'])){
        $reverse = mb_strtolower(strrev($_GET['palindrome']));

        if(mb_strtolower($_GET['palindrome']) === $reverse){
            $result = 'This word is palindrome';
        } else {
            $result = 'This word isn`t palindrome';
        }
    }

    if(isset($_GET['submit-vowels'])){
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
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        <?php echo file_get_contents("css/style.css"); ?>
    </style>
</head>
<body>
	<section class="task1">
		<div class="container">
            <div class="form-value-year">
                <h2>Task 1</h2>
                <form action="/" method="get" class="form-task1">
                    <div>
                        <input type="number" name="year">
                        <select name="month">
                            <?php foreach(ARRAY_MONTH as $key => $value): ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input class="input-button" type="submit" value="submit" name="submit">
                </form>
                <div class="output"><?= $outputAboutYear ?></div>
                <div class="output"><?= $outputAboutMonth ?></div>
            </div>
		</div>
	</section>
    <section class="task2">
        <div class="container">
            <div class="form-palindrome">
                <h2>Task 2</h2>
                <form action="/" method="get" class="form-task2">
                    <input type="text" name="palindrome">
                    <input type="submit" value="submit" name="submit-palindrome" class="input-button">
                </form>
                <div class="output">
                    <?= $result ?>
                </div>
            </div>
        </div>
    </section>
    <section class="task2">
        <div class="container">
            <div class="form-vowels">
                <h2>Task 3</h2>
                <form action="/" method="get" class="form-task3">
                    <input type="text" name="check-vowels">
                    <input type="submit" value="submit" name="submit-vowels" class="input-button">
                </form>
                <div class="output">
					<?=  $countVowelResult ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>