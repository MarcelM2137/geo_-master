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
    <h2>Zmień Znajomych:</h2>
    <p>(Wypisz ich po przecinku)</p>
    <?php
    require_once("connect.php");
    $__id = $_SESSION['id'];

    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $sql_query = "SELECT `friend` FROM `users` WHERE `id` = $__id";
    $query = $polaczenie -> query($sql_query);
    $wynik = $query -> fetch_assoc();
    $old_value = substr($wynik['friend'], 1, -1);
    ?>
    <form method="POST" action="change pt2.php">
        <input type="text" name="input" value="<?php echo $old_value; ?>" />
        <input type="submit" value="Gotowe >" />
    </form>
</body>
<footer>

</footer>
</html>