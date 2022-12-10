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
	<br /><br />
    <center>
    <h1>Witaj w... Studiu GM!</h1>
    <form action="http://localhost/geo_master/eq/creators.edit_parameters.elements.check.php" method="POST">
        <textarea name="json_get" cols="55" rows="55">//JSON
[
["", 0]
]</textarea><br />
        <select name="as_what">
            <option>Procesor</option>
            <option>Karta Graficzna</option>
            <option>Płyta Główna</option>
            <option>Pamięć RAM</option>
            <option>Pamięć Masowa</option>
            <option>Zasilacz</option>
            <option>Chłodzenie Systemu</option>
            <option>System Operacyjny</option>
            <option>Klawiatura</option>
            <option>Myszka</option>
            <option>Monitory</option>
        </select>
        <br /><input type="submit" value="Prześlij Plik" />
    </form>
    </center>
</body>
<footer>

</footer>
</html>