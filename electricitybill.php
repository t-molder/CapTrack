<?php declare(strict_types=1); //strict requirement ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Energy bill calculator</title>
<link rel="stylesheet" href="./electricitybill.css">
</head>
<body>
<div class="energyForm" >	
<h3>Vul hier uw verbruik in</h3>
<h3>Hieronder staat uw kosten overzicht</h3>
	
			<form class="energyInput" method="post">
					<div class="period">       
						<select required id="month" name="month">
						<option value = "">Select month</option>
						<?php
							
						
							for ($month = 1; $month <= 12; $month++) {
								$monthName = date("F", mktime(0, 0, 0, $month, 1));
								echo "<option value='$month'>$monthName</option>";	
							}
							
						
    					?>
						</select>
					</div>
					<div class="energyUsage">
						<input type="number" name="input">
						
					</div>
					<div class="submit">
						<button type="submit">Bereken</button>
					</div>	
				
				
			</form><br>	
		
<div class="energycost">
	
	<?php

	


	function calc(){

	foreach($_POST as $key => $value){

		if(is_array($value)){
			$value = implode(',', $value);
		}
		
			$energyUsage = $value;
			if($energyUsage <= 50){
					$energyCost = $energyUsage* 3.5;
				}	elseif ($energyUsage <= 150){
					$energyCost = $energyUsage*4;
				}	elseif ($energyUsage <= 250){
					$energyCost  = $energyUsage*5.2;
				}	elseif ($energyUsage > 250){
					$energyCost  = $energyUsage*6.5;
				}
				for ($month = 1; $month <= 12; $month++) {
					$monthName = date("F", mktime(0, 0, 0, $month, 1));
					echo "<option value='selected'>$monthName </option>";	
				}	
		// echo $key  . "€ " .$energyCost  . "<br>";
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