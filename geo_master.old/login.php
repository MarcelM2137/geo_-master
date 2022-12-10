<?php
session_start();
?>
<html>
<head>
	<title>Zaloguj Się! - Geo Master</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br /><br /><br />
	<h1>Zaloguj Się!</h1>
	<form method="POST" action="check.php">
	Login: <input type="text" class=szara name="login" /><br />
	Hasło: <input type="password" class=szara name="pass"/><br />
	<input type="submit" class=szara value="Zaloguj Się >" /><br />
	<?php
	if(isset($_SESSION['fail'])) {
		echo '<span style="color:red">Błędny login lub hasło!</span>';
		unset($_SESSION['fail']);
	}
	?>
</body>
<footer>

</footer>
</html>