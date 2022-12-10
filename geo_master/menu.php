<?php
//require_once("connect.php");
class menu {
    function __construct()
    {
        echo '	<div class="menu">
        <a href="main.php">Strona Główna</a>
        <a href="maps.php">Mapy</a>
        <a href="stats.php">Statystyki</a>
        <a href="state.php">Stan Konta</a>
        <a href="friends.php">Znajomi</a>
        <a href="settings.php">Ustawienia</a>
        </div>
        <br /><br />';
    }
}

class query {
    public $sql_query;
    public $wynik;
    function __construct($_show = False)
    {
        if($_show == True) {
            echo "Created: True; !!!";
        }
    }
    function select($_what = "*", $_from, $_where) {
        $sql_query = "SELECT $_what FROM $_from WHERE $_where";
        
        $polaczenie = new mysqli("localhost", "root", "", "geo_master");
        $query = $polaczenie -> query($sql_query);
        $wynik = $query -> fetch_assoc();
        return $wynik;
    }
}