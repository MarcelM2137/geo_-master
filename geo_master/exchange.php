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
    <style> td, tr, th { border: 3px solid red; } </style>
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
    <h1>Kantor:</h1>
    <table>
        <tr> <th> Waluta 1 <th> Waluta 2 <th> Kurs <th> Wymień
        <tr> <td>Dollar (USD, $)<td>Polski Nowy Złoty (PLN, zł)<td> 1zł = 4.44 $ <td> <a class=button href=wymien.php?type=pln-usd>Wymień</a>
    </table>
    </center>
</body>
<footer>

</footer>
</html>