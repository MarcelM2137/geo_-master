<?php
session_start();
require_once("connect.php");
$category = $_GET['category'];
$select = $_GET['select'];
$cost = $_GET['cost'];
//echo $category." i ".$select;
$cash = $_SESSION['points'];
if($cash < $cost) {
    header("Location: list.php?type=$category");
} else {
    $_id = $_SESSION['id'];
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    $select2 = (int) $select;
    $list = [0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0];
    $list[$category-1] = $select2 -1;
    $json = json_encode($list);
    $sql_query = "UPDATE `users` SET `computer` = '$json' WHERE `users`.`id` = $_id";
    /**/echo $json;
    $query = $polaczenie -> query($sql_query);
    $polaczenie -> close();
    //usunięcie pieniędzy --------------------------------------------------------------------------------------------------------------------
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    
    $actual_points = $cash - $cost;
    $sql_query = "UPDATE `users` SET `points` = '$actual_points' WHERE `users`.`id` = $_id";
    $query = $polaczenie -> query($sql_query);
    $polaczenie -> close();

    $_SESSION['points'] = $actual_points;

    header("Location: eq.php");

    
}