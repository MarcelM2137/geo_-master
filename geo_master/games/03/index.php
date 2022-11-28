<html>
<head>
	<title>Mapa - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<?php
	session_start();
	require_once("maps.php");
	
	$id2 = rand(0,count($maps));
	$_SESSION['id2'] = $id2;
	
	/*$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$query = "SELECT * FROM `03-maps`";
	$kwerenda = $polaczenie->query($query);
	$wynik = $kwerenda->fetch_assoc();*/
	
	$map = $maps[$id2][3];
	echo $map;
	
	?>
	<form method="POST" action="check.php">
	<h1>Gdzie Jesteś?</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d175147.44594321208!2d18.32609711098089!3d53.31935824148384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47032700b1899043%3A0x58fdcaee3795ff5d!2zUG93aWF0IGNoZcWCbWnFhHNraQ!5e0!3m2!1spl!2spl!4v1669555852354!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br />
	<input type="search" name="town" />
	</form>
</body>
<footer>

</footer>
</html>