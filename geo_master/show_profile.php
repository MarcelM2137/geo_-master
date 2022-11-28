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
    <?php
    /*$_who = $_GET['who'];
    echo "<h1>".$_who."</h1>";*/
    ?>
    <!--<p><img src="http://localhost/geo_master/empty_user.png" alt="ok" width="300" height="300" /></p>-->
    <?php
    require_once("connect.php");

    $_who_id = $_GET['who'];
    
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

    $sql_query = "SELECT * FROM `users` WHERE `id` = $_who_id";
    $query = $polaczenie -> query($sql_query);
    $wynik = $query ->fetch_assoc();
    $i_nick = $wynik['nick'];
    $i_points = $wynik['points'];
    $json_i_friends = $wynik['friend'];
    $polaczenie -> close();

    echo "<h1>$i_nick</h1>";
    echo "Ranga: Coming Soon...";
    echo '<p><img src="http://localhost/geo_master/empty_user.png" alt="ok" width="300" height="300" /></p>';
    echo "Punkty: $i_points";
    echo "<br /><br /><h4> Znajomi: ";
    
    //Wczytanie nicków znajomych
    //echo "
    //<table>
    //<thead>
        //<tr> <th> Lp. <th>Znajomy <th>"./* Zmień <th>*/" Graj Razem <th> Zobacz Profil
    //<tbody>";*/
    $_json_new = json_decode($json_i_friends);
    $json_i_friends = $_json_new;

    for ($i = 0; $i <= count($json_i_friends) -1; $i++) {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        $_id = $json_i_friends[$i];
        $sql_query = "SELECT * FROM `users` WHERE `id` = $_id";
        $query = $polaczenie -> query($sql_query);
        $wynik = $query -> fetch_assoc();
        $nick = $wynik['nick'];
        $polaczenie -> close();
        $__id = $i +1;
        
        echo '<a class=friends_ht href="show_profile.php?who='.$_id.'">'.$nick."</a>, ";
        //echo "<tr> <th> $__id<td>".$nick./*." <td> <a class=button href=&amp; edit1.php&amp;>Zmień</a> <td> <a class=button href= &amp; &amp; >Graj Razem</a>"*/"<th> <a class=button href= &qout; &qout; >Graj Razem</a> <th> <a class=button href=show_profile.php?who=$_id>Zobacz Profil</a>";
        //echo "<br /><a class=button href=&quot;>";
    }
    echo "</h4>";
    ?>

</body>
<footer>

</footer>
</html>