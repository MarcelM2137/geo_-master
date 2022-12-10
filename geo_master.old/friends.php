<?php
session_start();
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
	<br /><br /><br /><br />
    <h3>Wybierz tryb listy znajomych:</h3>
    <center><a class=button href="select_mode.php">Zwykły</a><a class=button href="friends2.php">Nowy (beta)</a></center>
	<?php
	header("Location: friends2.php");
	?>

</body>
<footer>

</footer>
</html>