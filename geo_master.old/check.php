<?php
session_start();
require_once("connect.php");

$nick = $_POST['login'];
$password = $_POST['pass'];

$connect = @new mysqli($host, $db_user, $db_password, $db_name);
$query = "SELECT * FROM `users` WHERE `nick`='$nick' AND `password`='$password' AND `state`='1'";
$kwerenda = $connect->query($query);

if($kwerenda->num_rows > 0) {
	unset($_SESSION['fail']);
	
	$wynik = $kwerenda->fetch_assoc();
	$_SESSION['id'] = $wynik['id'];
	$_SESSION['nick'] = $wynik['nick'];
	$_SESSION['state'] = $wynik['state'];
	$_SESSION['points'] = $wynik['points'];
	$_SESSION['friend1'] = $wynik['friend1'];
	$_SESSION['friend2'] = $wynik['friend2'];
	
	header('Location: main.php');
} else {
	header('Location: login.php');
	$_SESSION['fail'] = true;
}
?>