<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: home.php');
		exit();
	}

?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Login Aplikacji do wspomagania ternera personalnego</title>
    <link rel="stylesheet" href="css/style_login1.css">
    
    </head>
    
    <body class="hero"  background="loginnn_back.png">

    <div>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" value="index.php"  onClick="location.href='index.php'"
 value='click here'  >Login</button>
                <button type="button" class="toggle-btn" value="rejestracja.php" value="index.php"  onClick="location.href='rejestracja.php'"
 value='click here'  >Register</button>
            </div><div class="social-icons">
            <img src="isnta.png">
            <img src="facebook.png">
            <img src="google.png">
            </div>
          
            <form id="login" action="login.php" method="post" class="input-group">
            <input type="text" name="login" class="input-field" placeholder="Nazwa" >
            <input type="password" name="haslo" class="input-field" placeholder="Hasło" >
            <input type="checkbox" class="chech-box"><span>Zapamietaj</span>
            <button type="submit" class="submit-btn">Loguj</button>
          
        </form>
	
        <?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>      
</body>
</html>