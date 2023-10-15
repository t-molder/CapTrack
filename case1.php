<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Energy bill calculator</title>
</head>
<body>
<form method="post">
	<label for="input">Hoeveel energie heb je verbruikt in kW/h?</label>
	<input type="number" id="energie" name="verbruik"><br>
	<button type="submit">Bereken</button>
</form><br>
<?php
$input = $_POST["verbruik"];
if (isset($input)) {
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
	echo "€" .$bill;
}

// $maandVerbruik array(
// 	'januari' => 'verbruik',
// 	'februari' => 'verbruik',
// 	'maart' => 'verbruik',
// 	'april' => 'verbruik',
// 	'mei' => 'verbruik',
// 	'juni' => 'verbruik',
// 	'juli' => 'verbruik',
// 	'augustus' => 'verbruik',
// 	'september' => 'verbruik',
// 	'oktober' => 'verbruik',
// 	'november' => 'verbruik',
// 	'december' => 'verbruik',
// 	'jaar' => 'verbruik'

// )
?>
</body>
</html>