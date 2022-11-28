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
	<br /><br />
	<h1 class=title>Witaj <?php echo $_SESSION['nick'];?>!</h1>
	<h4>...masz <?php echo $_SESSION['points'];?> punktów.</h4>
	<!--<h6>...as test... you have id: <?php //echo $_SESSION['id']; ?></h6>-->
	<center><a class=button href="maps.php">Graj!</a></center>
</body>
<footer>

</footer>
</html>