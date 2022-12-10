<html>
<head>
	<title>Mapa - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php
	session_start();
	echo "<h1>Koniec Gry!</h1>";
	echo "<h2>Zdobyto:</h2>";
	echo "Runda Pierwsza: +".$_SESSION['wc']."<br />";
	echo "Runda Druga: +".$_SESSION['wc2']."<br />";
	echo "Razem: +".$_SESSION['wc_razem']."<br />";
	unset($_SESSION['wc']); unset($_SESSION['wc2']);
	
	$razem = $_SESSION['wc_razem'] + $_SESSION['points'];
	
	require_once("connect.php");
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$id = $_SESSION['id'];
	$query = "UPDATE `users` SET `points` = '$razem' WHERE `users`.`id` = ".$id;
	$kwerenda = $polaczenie->query($query);
	$polaczenie->close();
	$_SESSION['points'] = $_SESSION['points'] + $_SESSION['wc_razem'];
	unset($_SESSION['wc_razem']);
	?>
	<center><a class=button href="http://localhost/geo_master/main.php">Gotowe ></a></center>
</body>
<footer>

</footer>
</html>