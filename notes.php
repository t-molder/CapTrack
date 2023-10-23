// if(is_array($value)){
	// 	$value = implode(',', $value);
	// }

    // foreach($_POST as $key => $value){
			// 	if ($key == "month") { $month = getMonth($value); }
			// 	if ($key == "input") { $energyCost = energyUsageCalc($value); }
			// }

            // var_dump($maanden);
		// $input = $_POST["verbruik"];
		// if (isseTt($input)) {
		// 	bill($input); 
		// }if (isset($input)) {
		// 	calc();
		// }	

		// if (isset($_POST["verbruik"]) && !empty($_POST["verbruik"])) {
		// 	$input = $_POST["verbruik"];
		// 	$bill = bill($input); 
		// 	$tax = tax($input);
		// 	$results = array($bill, $tax);
		// 	foreach ($results as $result) {
		// 		echo "<p>€" . number_format($result, 2) . "</p>";
		// 	}
		// 	echo "€" .$results[0]  ."€" .$results[1];

		// }

		// function bill($input){
		// 	if ($input <= 50){
		// 		$bill = $input * 3.5;
		// 	}	elseif ($input <= 150){
		// 		$bill = 175 + ($input - 50)*4;
		// 	}	elseif ($input <= 250){
		// 		$bill = 575 + ($input - 150)*5.2;
		// 	}	elseif ($input > 250){
		// 		$bill = 1095 + ($input - 250)*6.5;
		// 	}
		// 	return $bill;
		// }
	
		// function tax($input){
		// 	$energytax = $input * 0.1125;
		// 	return $energytax;
		// }

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