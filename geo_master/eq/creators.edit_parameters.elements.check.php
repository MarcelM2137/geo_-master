<?php
$json_text = $_POST['json_get'];
$typ = $_POST['as_what'];
//echo $json_text. " i ".$typ;

session_start();
require_once("connect.php");

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

$sql_query = "UPDATE `elements` SET `kod_json` = '$json_text' WHERE `elements`.`name` = '$typ'";
$query = $polaczenie -> query($sql_query);
$polaczenie -> close();
?>