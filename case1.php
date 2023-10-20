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
			<form method="post">
				<label for="energie">Hoeveel energie heb je verbruikt in kW/h?
				<input type="number" id="energie" name="verbruik" min="0" value="0">
				</label>
				<button type="submit">Bereken</button>
			</form>
	<?php
		if (isset($_POST["verbruik"]) && !empty($_POST["verbruik"])) {
			$input = $_POST["verbruik"];
			$bill = bill($input); 
			$tax = tax($input);
			$results = array($bill, $tax);
			foreach ($results as $result) {
				echo "<p>€" . number_format($result, 2) . "</p>";
			}
			// echo "€" .$results[0]  ."€" .$results[1];

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
		}
	
		function tax($input){
			$energytax = $input * 0.1125;
			return $energytax;
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
		</main>
	</body>
</html>
