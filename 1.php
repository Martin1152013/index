<html>
<head>
	<meta charset="utf-8">

	<title>Martin's site</title>
</head>
<body>
	<form method="get">
		<input type="number" name="number">
		<input type="submit" value="submit">
	</form>



</body>




<?php

	if(isset($_GET['number'])){
		$number = $_GET['number'];
		echo fuctoriel($number);
		
	}

	function fuctoriel($a){
			$result =1;
			for ($i=1; $i <= $a; $i++) { 
				// code...
				$result*=$i;
				
			}
			return $result;
		}
	






