<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Energy bill calculator</title>
</head>
<body>
<form method="post">
	<label for="input">Hoeveel energie heb je verbruikt in kW/h?</label>
	<input type="number" id="energie" name="jaarverbruik"><br>
	<button type="submit">Bereken jaarverbruik</button>
	<input type="number" id="januari" name="verbruikjanuari"><br>
	<button type="submit">Bereken verbruik januari/button>
	<input type="number" id="januari" name="verbruikfebruari"><br>
	<button type="submit">Bereken verbruik februari</button>	
	<input type="number" id="januari" name="verbruikmaart"><br>
	<button type="submit">Bereken verbruik januari</button>
	<input type="number" id="januari" name="verbruikapril"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruikmei"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruikjuni"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruikjuli"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruikaugustus"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruikseptember"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruikoktober"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruiknovember"><br>
	<button type="submit">Bereken</button>
	<input type="number" id="januari" name="verbruikdecember"><br>
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
?>
</body>
</html>