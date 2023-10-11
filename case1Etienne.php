<?php declare(strict_types = 1); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Energy bill calculator</title>
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
                bill($input); 
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
                echo "€" . $bill;
            }
        ?>
        </p>
        </main>
    </body>
</html>