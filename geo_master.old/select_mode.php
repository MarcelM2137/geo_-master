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
	<h1>Znajomi:</h1>
	<?php
	require_once("connect.php");
	
	$f1 = $_SESSION['friend1'];
	$f2 = $_SESSION['friend2'];
	
	if($f1 == "brak") {
		$znaj1 = $f1;
	} else {
	$sql = "SELECT `nick` FROM `users` WHERE `id` = '$f1'";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$query = $polaczenie->query($sql);
	$wynik = $query->fetch_assoc();
	$polaczenie->close();
	$znaj1 = $wynik['nick'];
	}
	if($f2 == "brak") {
		$znaj2 = $f2;
	} else {
	$sql = "SELECT `nick` FROM `users` WHERE `id` = '$f2'";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$query = $polaczenie->query($sql);
	$wynik = $query->fetch_assoc();
	$polaczenie->close();
	$znaj2 = $wynik['nick'];
	}
	$hash = '"';
	echo
	"
	<center>
	<style> td, tr, th { border: 3px solid red; } </style>
	<table>
		<thead>
		<tr> <th> ID <th>Znajomy <th> Zmień <th> Graj Razem
		<tbody>
		<tr> <th>1 <td> $znaj1 <td> <a class=button href=$hash edit1.php$hash>Zmień</a> <td> <a class=button href=$hash $hash>Graj Razem</a>
		<tr> <th>2 <td> $znaj2 <td> <a class=button href=$hash edit2.php$hash>Zmień</a> <td> <a class=button href=$hash $hash>Graj Razem</a>
	</title>
	</center>
	";
	?>
	<!--
<style> td, th { border: 1px solid black; } </style>
<!-- ustawienie czarnego obramowania tabeli w CSS

<table>
   <thead>
      <tr> <th> Przedmiot <th>Nazwisko <th> Ocena
   <tbody>
      <tr> <th> Historia <td> Nowak <td> 4+
      <tr> <th> Historia <td> Mazur <td> 3-
      <tr> <th> Fizyka   <td> Nowak <td> 2
      <tr> <th> Fizyka   <td> Mazur <td> 4
</table>
-->
</body>
<footer>

</footer>
</html>