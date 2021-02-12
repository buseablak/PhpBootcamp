<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
$sex = "male"; 
$weight = 55;
$height = 170; 
$age = 25; 
$calorie;
if ($sex=="female") {
	$calorie=10*$weight+6.25*$height-5*$age+5;
	echo "$calorie";
}
elseif ($sex=="male") {
	$calorie=10*$weight+6.25*$height-5*$age-161;
	echo "$calorie";
}

?>
</body>
</html>