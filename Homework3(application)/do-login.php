<?php
if (!isset($_SESSION)) {
	session_start();
}

if ( isset($_POST['kullanici']) || isset($_POST['parola']) ) {

	if ( !isset($_POST['kullanici']) ) {
		header("Location: login.php?durum=0");
	}

	if ( !isset($_POST['parola']) ) {
		header("Location: login.php?durum=0");
	}

	$kullanici = $_POST['kullanici'];
	$parola = $_POST['parola'];

	$_SESSION['kullanici'] = $kullanici;

	if ( $kullanici == 'bootcamp' && $parola == 'bootcamp' ) {
		$_SESSION['giris'] = '1';
		header("Location: posts.php");
	}
	else {
		header("Location: login.php?durum=0");
	}

}
else {
	header("Location: login.php?durum=0");
}
?>
