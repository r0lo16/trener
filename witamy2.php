<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja1']))
	{
		header('Location: login_trener.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja1']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_imie'])) unset($_SESSION['fr_imie']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['fr_imie'])) unset($_SESSION['fr_imie']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);

	
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Login Aplikacji do wspomagania ternera personalnego</title>
	<link rel="stylesheet" href="css/style_login1.css">
</head>

<body class="hero" background="loginnn_back.png">

	<div class="srodek">
	<div>
		<button type="submit" class="submit-btn1" onClick="location.href='login_trener.php'" value='click here'>Przejdz do logowania</button>
	<br><b>Witamy trenera!</b>
</div>
</div>
	

</body>
</html>

		
	
