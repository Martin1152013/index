<html>
<head>
	<meta charset="utf-8">

	<title>Martin's site</title>
</head>
<body>
	<form method="get">
		<input type="number" name="tempreture">
		<input type="submit" value="submit">
	</form>



</body>




<?php

	if(isset($_GET['tempreture'])){
		$tempreture = $_GET['tempreture'];
		if ($tempreture <= 5) {
			echo "You must to be with hat, jacket and scarf.";
		}else if ($tempreture > 5 && $tempreture <= 20) {
			echo "You must to be with sweatshirt,pants and t-shirt.";
		}else if ($tempreture > 20 && $tempreture < 30) {
			echo "You must to be with cap, t-shirt and shorts.";
		}elseif ($tempreture >= 30) {
			echo "Don't get out";
		}{

			
		}
		
	}