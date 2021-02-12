<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<?php
$age=25;

if (0<=$age<=14) {
	echo "Çocuk";
}
elseif ($age>=15 && $age<=24) {
	echo "Genç";
}
elseif ($age>=25 && $age<=64) {
	echo "Yetişkin";
}
else
{
	echo "Yaşlı";
}


?>


</body>
</html>