<?php
session_start();
require_once("menu.php");
require_once("connect.php");

/*$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
*/
$_id = $_SESSION['id'];
/*$sql_query = "SELECT * FROM `users` WHERE `users`.`id` = '$_id'";
$query = $polaczenie -> query($sql_query);

$wynik = $query->fetch_assoc();

global $wynik;*/
$polaczenie = new query();
$wynik = $polaczenie -> select("*", "`users`", "`id` = $_id");
$_SESSION['nick'] = $wynik['nick'];
$_SESSION['points'] = $wynik['points'];
?>
<html>
<head>
	<title>Strona Główna! - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="style_table.css" />
</head>
<body>
	<?php $menu = new menu() ?>
	<h1 class=title>Witaj <?php echo $_SESSION['nick'];?>!</h1>
	<h4>...masz <?php echo $_SESSION['points'];?> punktów.</h4>
	<h6 class=new_border>Twoje ID to: <?php echo $_SESSION['id']; ?></h6>
	
	<center>
	<table>
	<!--<tr><th>Uwaga! 3.12.2022r. o godz. 13:40 dostęp do starego systemu znajomych zostanie odcięty, a stare wiadomości usunięte!-->
	<tr><th>Punkty zamieniają się w monety!!!
	</table><br />
	<a class=button href="maps.php">Graj!</a>
	</center>
</body>
<footer>

</footer>
</html>