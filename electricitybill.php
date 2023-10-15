<?php declare(strict_types=1); //strict requirement ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Energy bill calculator</title>
<link rel="stylesheet" href="electricitybill.css">
</head>
<body>
<div class="energyForm" >	
<h3>Vul hier uw verbruik in</h3>
<h3>Hieronder staat uw kosten overzicht</h3>
	<div class="energyInput">
		<div class="form">
			<form method="post">
				<div class="periode"><label for="input">Jaar verbruikt in kW/h?</label></div>
					<div class ="verbruik"><input  type="number" name="jaar"><br><br></div>
				<div class="periode"><label for="input">januari in kW/h?</label></div>
				<div class ="verbruik"><input  type="number" name="januari"><br></div>
				<div class="periode"><label for="input">februari in kW/h?</label></div>
				<div class ="verbruik"><input  type="number" name='februari'><br></div>
				<div class="periode"><label for="input">maart in kW/h?</label></div>
				<div class ="verbruik"><input  type="number" name='maart'><br></div>
				<div class="periode"><label for="input">april in kW/h?</label></div>
				<div class ="verbruik"><input  type="number" name='april'><br></div>
				<div class="periode"><label for="input">mei in kW/h?</label></div>
				<div class ="verbruik"><input  type="number" name='mei'><br></div>
				<div class="periode"><label for="input">juni in kW/h?</label></div>
				<div class ="verbruik"><input type="number" name='juni'><br></div>
				<div class="periode"><label for="input">juli in kW/h?</label></div>
				<div class ="verbruik"><input type="number" name='juli'><br></div>
				<div class="periode"><label for="input">augustus in kW/h?</label></div>
				<div class ="verbruik"><input type="number" name='augustus'><br></div>
				<div class="periode"><label for="input">september in kW/h?</label></div>
				<div class ="verbruik"><input type="number" name='september'><br></div>
				<div class="periode"><label for="input">oktober in kW/h?</label></div>
				<div class ="verbruik"><input type="number" name='oktober'><br></div>
				<div class="periode"><label for="input">November in kW/h?</label></div>
				<div class="verbruik"><input type="number" name='november'><br></div>
				<div class="periode"><label for="input">December in kW/h?</label></div>
				<div class ="verbruik"><input type="number" name='december'><br></div>
				<div><button type="submit">Bereken</button>	
			</form><br>	
		</div>
	</div>	
<div class="energycost">
	
	<?php
	function calc(){
	foreach($_POST as $key => $value){
		if(is_array($value)){
			$value = implode(',', $value);
		}
		
			$energyUsage = $value;
			if ($energyUsage <= 50){
					$energyCost = $energyUsage * 3.5;
				}	elseif ($energyUsage <= 150){
					$energyCost  = 175 + ($energyUsage - 50)*4;
				}	elseif ($energyUsage <= 250){
					$energyCost  = 575 + ($energyUsage - 150)*5.2;
				}	elseif ($energyUsage > 250){
					$energyCost  = 1095 + ($energyUsage - 250)*6.5;
				}
		echo $key . "€ " .$energyCost  . "<br>";
	}
	}

	calc();

	// var_dump($maanden);
	// $input = $_POST["verbruik"];
	// if (isseTt($input)) {
	// 	bill($input); 
	// }if (isset($input)) {
	// 	calc();
	// }	
	?>
</div>
</div>
</body>
</html>