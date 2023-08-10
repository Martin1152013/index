<?php

$today = date('2023');
	if(isset($_GET['birthday'])){
		$date = $_GET['birthday'];
		if ($date>2023) {
			echo "Not Valid";
		}else{
		$today -=$date;
		echo "Ти си на $today";
	}
	system("utf-8");
		
	}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Martin's site</title>
</head>
<body>
	<input_type_date >
	<form method="get">
		<input type="date" name="birthday">
		<input type="submit" value="submit">
	</form>



</body>

<html>


