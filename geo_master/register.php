<?php
session_start();

unset($_SESSION['e_nick']);

if(!isset($_POST['new_login'])) {
    unset($_POST['new_login']);
} else {
    $login = $_POST['new_login'];
    $haslo = $_POST['new_haslo'];
    $p_haslo = $_POST['rp_haslo'];
    
    //login
    if($login <= 2 or $login >= 17) {
        $_SESSION['e_nick'] = "Login musi mieć długość od 3 do 16 znaków";
    }
}

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

    <h2>Zarejestruj Się</h2>
    <form method="POST">
        Login/Nick: <input type="text" name="new_login" value="" /><br />
        <?php
        if(isset($_SESSION['e_nick'])) {
            echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
            unset($_SESSION['e_nick']);
        }
        ?>
        Hasło: <input type="password" name="new_haslo" value="" /><br />       
        Powtórz Hasło: <input type="password" name="rp_haslo" value="" /><br />
        <input type="checkbox" name="check" /> Akceptuję Regulamin!<br />
        <input type="submit" value="Zarejestruj Się!" />
    </form>

</body>
<footer>

</footer>
</html>
