<?php
session_start();
?>
<html>
<head>
	<title>Strona Główna! - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <style> td, tr, th { border: 3px solid red; } </style>
	<div class="menu">
	<a href="main.php">Strona Główna</a>
	<a href="maps.php">Mapy</a>
	<a href="stats.php">Statystyki</a>
	<a href="state.php">Stan Konta</a>
	<a href="friends.php">Znajomi</a>
	<a href="settings.php">Ustawienia</a>
	</div>
	<br /><br />
	<h1>Znajomi:</h1>
    <center>
    <?php
    require_once("connect.php");

    $id = $_SESSION['id'];
    
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $sql_query = "SELECT `friend` FROM `users` WHERE `id` = '$id'";
    $query = $polaczenie -> query($sql_query);
    $wynik = $query -> fetch_assoc();
    $json = $wynik['friend'];

    $json_new = json_decode($json);
    $json = $json_new;
    $polaczenie -> close();

    
    echo "
    <table>
    <thead>
        <tr> <th> Lp. <th>Znajomy <th>"./* Zmień <th>*/" Graj Razem <th> Zobacz Profil
    <tbody>";
    for ($i = 0; $i <= count($json) -1; $i++) {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        $_id = $json[$i];
        $sql_query = "SELECT * FROM `users` WHERE `id` = $_id";
        $query = $polaczenie -> query($sql_query);
        $wynik = $query -> fetch_assoc();
        $nick = $wynik['nick'];
        $polaczenie -> close();
        $__id = $i +1;

        echo "<tr> <th> $__id<td>".$nick./*." <td> <a class=button href=&amp; edit1.php&amp;>Zmień</a> <td> <a class=button href= &amp; &amp; >Graj Razem</a>"*/"<th> <a class=button href= &qout; &qout; >Graj Razem</a> <th> <a class=button href=show_profile.php?who=$_id>Zobacz Profil</a>";
        //echo "<br /><a class=button href=&quot;>";
    }
    ?>
    </table><br /><a class=button_long href="change_friends.php">Zmień Listę Znajomych</a>
</body>
<footer>

</footer>
</html>