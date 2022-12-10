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
    <table>
        <tr> <th> ID <th> Przedmiot <th> Aktualny Stan <th> Cena <th> Kup nowy
    <?php
    /*
    Procesor (centralna jednostka obliczeniowa – CPU)
    karta graficzna (GPU),
    Płyta główna
    Pamięć RAM
    Pamięć masowa
    Zasilacz (Power Supply Unit – PSU)
    Chłodzenie systemu
    Urządzenia peryferyjne do gier
    System operacyjny
    */
    //Łączenie z elementami:
/*

    echo "<tr> <th> Procesor";
    echo "<tr> <th> Karta Graficzna";
    echo "<tr> <th> Płyta Główna";
    echo "<tr> <th> Pamięć RAM";
    echo "<tr> <th> Pamięć Masowa";
    echo "<tr> <th> Zasilacz";
    echo "<tr> <th> Chłodzenie Systemu";
    echo "<tr> <th> System Operacyjny";
    echo "<tr> <th> Klawiatura";
    echo "<tr> <th> Myszka";
    echo "<tr> <th> Monitory";*/

    require_once("connect.php");

    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    
    $_id = $_SESSION['id'];
    $sql = "SELECT * FROM `users` WHERE `id` = '$_id'";
    $query = $polaczenie -> query($sql);
    $wynik = $query->fetch_assoc();
    $polaczenie -> close();
    $_wynik = json_decode($wynik['computer']);

    
    for($i = 1; $i <= 11; $i++) {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        
        $sql = "SELECT * FROM `elements` WHERE `id` = '$i'";
        $query = $polaczenie -> query($sql);
        $wynik2 = $query->fetch_assoc();
        
        $item_name = $wynik2['name'];

        $json = $wynik2['kod_json'];
        $json_new = json_decode($json);
        $json = $json_new;
        $aktualny = $_wynik[$i-1];
        $polaczenie -> close();
        $aktualny_item = $json[$aktualny][0];
        $cena = $json[$aktualny][1];

        echo "<tr> <th> $i <th> $item_name <td> $aktualny_item <td> $cena <td> <a class=button href=list.php?type=$i>Ulepsz ></a>";

        //$polaczenie -> close();

        
    }
    ?>
    </center>
</body>
<footer>

</footer>
</html>