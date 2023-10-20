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
<h3>&nbsp; &nbsp; &nbsp; Vul hier uw verbruik in&nbsp; &nbsp; &nbsp; </h3>
<h3>&nbsp; &nbsp; &nbsp; Hieronder staat uw kosten overzicht &nbsp; &nbsp; &nbsp; </h3>
	
			<form class="energyInput" method="post">
					<div class="period">       
						<select required id="month" name="month">
						<option value = "">Select month</option>
						<?php
							
							for ($month = 1; $month <= 12; $month++) {
								$monthName = date("F", mktime(0, null, null, $month, 1));
								echo '<option value='.$month.'>'.$monthName.'</option>';
								
							}
							
						
    					?>
						</select>
					</div>
					<div class="energyUsage">
						<input required type="number" name="period">
						
					</div>
					<div class="submit">
						<button type="submit">Bereken</button>
					</div>	
				
				
			</form><br>	
		
<div class="energycost">
	
	<?php

	
// if(is_array($value)){
// 	$value = implode(',', $value);
// }

	function calc(){
		$month = "";
		$energyCost = "";
		// foreach($_POST as $key => $value){
		// 	if ($key == "month") { $month = getMonth($value); }
		// 	if ($key == "input") { $energyCost = energyUsageCalc($value); }
		// }

		if (isset($_POST['month'])) { $month = getMonth($_POST['month']); }
		if (isset($_POST['period'])) { $energyCost = energyUsageCalc($_POST['period']); }

		echo " € " .$energyCost  . "<br>";
	}

	function getMonth($value) {
		// Get the right month name
		for ($month = 1; $month <= 12; $month++) {
			$monthName = date("F", mktime(0, null, null, $month, 1));
			$maand = 0;
			switch($value){
				 case 1;
				 $maand = "januari";
				 break;
				 case 2;
				 $maand = "februari";
				 break;
				 case 2;
				 $maand = "march";
				 break;
				 case 4;
				 $maand = "april";
				 break;
				 case 5;
				 $maand = "may";
				 break;
				 case 6;
				 $maand = "june";
				 break;
				 case 7;
				 $maand = "july";
				 break;
				 case 8;
				 $maand = "august";
				 break;
				 case 9;
				 $maand = "september";
				 break;
				 case 10;
				 $maand = "october";
				 break;
				 case 11;
				 $maand = "november";
				 break;
				 case 12;
				 $maand = "december";
				 break;
			}

			}
			echo " Uw verbruik in ". $maand . " " . " is ";
			return $value;
		}
		
	

	function energyUsageCalc($value) {
		$energyUsage = $value;
		if($energyUsage <= 50){
			$energyCost = $energyUsage * 3.5;
		}elseif($energyUsage > 50 && $energyUsage <= 150){
			$energyCost = 175 + ($energyUsage - 50)* 4;

		}elseif($energyUsage > 150 && $energyUsage <= 250){
			$energyCost = 575 + ($energyUsage -150) * 5.2;
		}elseif($energyUsage > 250){
			$energyCost = 575 + ($energyUsage -250) * 6.5;
		}

		return $energyCost;
							
	}	
	

	if (isset($_POST)) {
		calc();
	}

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