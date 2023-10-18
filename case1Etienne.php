<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Energy bill calculator</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./styles/main.css" type="text/css" />
    </head>
    <body>
        <main>
        <form method="post">
            <label for="energie">Hoeveel energie heb je verbruikt in kW/h?</label>
            <input type="number" id="energie" name="verbruik" min="0" value="0"><br>
            <button type="submit">Bereken</button>
        </form>
        <p>
        <?php
            if (isset($_POST["verbruik"]) && !empty($_POST["verbruik"])) {
                $input = $_POST["verbruik"];
                // echo bill($input);
                // $test = bill($input);
                // echo "€" . number_format($test, 2);
            }
            function bill($input){
                if ($input <= 50){
                    $bill = $input * 3.5;
                }	elseif ($input <= 150){
                    $bill = 175 + ($input - 50)*4;
                }	elseif ($input <= 250){
                    $bill = 575 + ($input - 150)*5.2;
                }	elseif ($input > 250){
                    $bill = 1095 + ($input - 250)*6.5;
                }
                return $bill;
                // echo "€" . number_format($bill, 2);
            }
        ?>
        </p>
        </main>
    </body>
</html>