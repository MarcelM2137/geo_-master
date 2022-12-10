<?php
session_start();
require_once("connect.php");

$new_json = "[".$_POST['input']."]";
$_id = $_SESSION['id'];

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$sql_query = "UPDATE `users` SET `friend` = '$new_json' WHERE `users`.`id` = $_id";
//UPDATE `users` SET `friend` = '[1, 3, 4, 0]' WHERE `users`.`id` = 2
$query = $polaczenie -> query($sql_query);
header("Location: friends2.php");