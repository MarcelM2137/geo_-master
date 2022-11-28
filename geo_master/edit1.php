<?php
session_start();

if(!isset($_POST['podane-id'])) {
} else {
	if($_SESSION['pobrane-id'] == "null") {
		$_SESSION['friend1'] = "brak";
		unset($_POST['podane-id']);
		header("Location: friends.php");
	} else {
	require_once("connect.php");
	
	$id = $_SESSION['id'];
	$podane_id = $_POST['podane-id'];
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$sql = "SELECT * FROM `users` WHERE `id` = '$podane_id'";
	$sql2 = "UPDATE `users` SET `friend1` = '$podane_id' WHERE `users`.`id` = '$id'";
	$query = $polaczenie -> query($sql);
	$wynik = $query -> fetch_assoc();

	$_SESSION['friend1'] = $podane_id;
	$query = $polaczenie -> query($sql2);
	$polaczenie -> close();
	unset($_POST['podane-id']);
	header("Location: select_mode.php");
	}
}
?>
<html>
<head>
	<title>Strona Główna! - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="menu">
	<a href="main.php">Strona Główna</a>
	<a href="maps.php">Mapy</a>
	<a href="stats.php">Statystyki</a>
	<a href="state.php">Stan Konta</a>
	<a href="friends.php">Znajomi</a>
	<a href="settings.php">Ustawienia</a>
	</div>
	<br /><br /><br /><br /><br />
	<form method="POST">
	<input type="text" name="podane-id" />
	<input type="submit" value="Dodaj >" />
</body>
<footer>

</footer>
</html>