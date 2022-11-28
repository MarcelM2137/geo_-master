<html>
<head>
	<title>Wynik - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<br /><br />
<?php
session_start();
require_once("maps.php");

$town = $_POST['town'];
if($town == $maps[$_SESSION['id2']][2]) {
	echo "<h1>Odgadnięto!</h1><br /><h2>+100 punktów</h2>";
	$_SESSION['wc'] = 100;
} else {
	echo "<h1>Niepoprawne Miasto</h1><h2>+0 punktów</h2>";
	$_SESSION['wc'] = 0;
}
?>
<center><a class=button href="index2.php">Dalej ></a></center>
</body>
<footer>

</footer>
</html>