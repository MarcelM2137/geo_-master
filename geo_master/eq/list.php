<?php
session_start();
?>
<html>
<head>
	<title>Strona Główna! - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
    <style> td, tr, th { border: 3px solid red; } </style>

</head>
<body>
	<div class="menu">
	<a href="http://localhost/geo_master/main.php">Strona Główna</a>
	<a href="http://localhost/geo_master/maps.php">Mapy</a>
	<a href="http://localhost/geo_master/stats.php">Statystyki</a>
	<a href="http://localhost/geo_master/state.php">Stan Konta</a>
	<a href="http://localhost/geo_master/friends.php">Znajomi</a>
	<a href="http://localhost/geo_master/settings.php">Ustawienia</a>
	</div>
	<br /><br /><br /><br />
	
    <center>
<?php
echo "<h1> Lista Dostępnych Produktów:</h1>";

require_once("connect.php");

$id = $_GET['type'];
//echo $id;
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

$sql_query = "SELECT * FROM `elements` WHERE id = '$id'";
$query = $polaczenie -> query($sql_query);
$wynik = $query->fetch_assoc();

//echo $wynik['kod_json'];
$wynik2 = json_decode($wynik['kod_json']);
$wynik= $wynik2;
$count = count($wynik);



for($i = 1; $i <= $count; $i++) {
    $cost = $wynik[$i-1][1];
    echo "<div class=produkt>
    <h2>".$wynik[$i-1][0]."</h2>".
    "<h4>".$wynik[$i-1][1]." zł</h4>".
    "<a class=button href=buy.php?category=$id&select=".
    $i."&cost=$cost".
    '> Kup ></a>'.
    "</div><br />";
}
?>
    </center>
</body>
<footer>
</footer>
</html>