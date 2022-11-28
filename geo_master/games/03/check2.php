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
	$_SESSION['wc_razem'] = $_SESSION['wc'] + 100;
	$_SESSION['wc2'] = $_SESSION['wc_razem'] - $_SESSION['wc'];
	echo "<h1>Odgadnięto!</h1><br /><h2>+".$_SESSION['wc2']." punktów (razem: +".$_SESSION['wc_razem']." punktów)</h2>";
} else {
	$_SESSION['wc_razem'] = $_SESSION['wc'] + 0;
	$_SESSION['wc2'] = $_SESSION['wc_razem'] - $_SESSION['wc'];
	echo "<h1>Niepoprawne Miasto</h1><h2>+".$_SESSION['wc2']." punktów (razem: +".$_SESSION['wc_razem']." punktów)</h2>";
}
?>
<center><a class=button href="wynik.php">Zakończ ></a></center>
</body>
<footer>

</footer>
</html>