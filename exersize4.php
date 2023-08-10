
<?php

	if(isset($_GET['tempreture'])){
		$input = strtolower($_GET['tempreture']);
        $input2 = strrev($input);

if($input == $input2){
	echo "Palindrom";
	
}else{
	echo "Not Palindrom";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Martin's site</title>
</head>
<body>
	<form method="get">
		<input type="text" name="tempreture">
		<input type="submit" value="submit">
	</form>



</body>
<html>