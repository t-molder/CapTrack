<?php declare(strict_types = 1);  ?>
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

		<div class="maincontainer">	
	<div class="header1"><h3>&nbsp; &nbsp; &nbsp; Vul hier uw verbruik in&nbsp; &nbsp; &nbsp; </h3>
	</div>

	<div class="header2"><h3>&nbsp; &nbsp; &nbsp; Hieronder staat uw kosten overzicht &nbsp; &nbsp; &nbsp; </h3>
	</div>
	</div  >
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

						
		function calc(){
			
			
			
			$month = "";
			$energyCost = "";
			$energyTax = 0;
			if (isset($_POST['month'])) { $month = getMonth($_POST['month']); }
			if (isset($_POST['period'])) { $energyCost = energyUsageCalc($_POST['period']);}
			if (isset($_POST['period'])) { $energyTax = tax($_POST['period']); }

			echo " Uw verbruik is " . "in" . " "  . $month . "is" ." " . $energyCost . "<br>";
			echo " de betaalde belasting is" . " " . $energyTax;

		}

		function tax($value){
			$energyTax = $value * 0.1125;
			return $energyTax;
			// echo " de betaalde belasting is" . " " . $energyTax;
		}

		function getMonth($value) {
			// Get the right month name

			for ($month = 1; $month <= 12; $month++) {
				$monthName = date("F", mktime(0, null, null, $month, 1));
				switch($value){
					case 1;
					$maand = "januari";
					break;
					case 2;
					$maand = "februari";
					break;
					case 2;
					$maand = "maart";
					break;
					case 4;
					$maand = "april";
					break;
					case 5;
					$maand = "mei";
					break;
					case 6;
					$maand = "juni";
					break;
					case 7;
					$maand = "juli";
					break;
					case 8;
					$maand = "augustus";
					break;
					case 9;
					$maand = "september";
					break;
					case 10;
					$maand = "oktober";
					break;
					case 11;
					$maand = "november";
					break;
					case 12;
					$maand = "december";
					break;
				}
				}
				
				return $maand;
				
			}		
			
		function energyUsageCalc($value) {
			$energyUsage = $value;
			if($energyUsage <= 50){
				$energyCost = $energyUsage * 3.5;
			}elseif($energyUsage <= 150){
				$energyCost = 175 + ($energyUsage - 50)* 4;

			}elseif($energyUsage <= 250){
				$energyCost = 575 + ($energyUsage -150) * 5.2;
			}elseif($energyUsage > 250){
				$energyCost = 575 + ($energyUsage -250) * 6.5;
			}
			
			return $energyCost;						
		}	

		if (isset($_POST)) {
			calc();
			
		}

		
		
		?>
	</div>
			<!-- <form method="post">
				<label for="energie">Hoeveel energie heb je verbruikt in kW/h?
				<input type="number" id="energie" name="verbruik" min="0" value="0">
				</label>
				<button type="submit">Bereken</button>
			</form> -->


	
		
		
		</main>
	</body>
</html>
