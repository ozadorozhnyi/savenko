<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            <!-- в цілому так не робиться, лишня операція читання, але сама задумка цікава -->
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
                                <!-- приклад роботи з циклом для масивів -->
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