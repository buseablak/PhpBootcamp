<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['giris']) && $_SESSION['giris'] == '1') {
	header("Location: posts.php");
} else {
	header("Location: login.php");
}
?>
