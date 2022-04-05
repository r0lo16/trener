<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność nickname'a
		$nick = $_POST['nick'];
		
		//Sprawdzenie długości nicka
		if ((strlen($nick)<3) || (strlen($nick)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		//Sprawdź poprawność hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		 
        
        //Sprawdź poprawność imienia
		$imie = $_POST['imie'];
		
		//Sprawdzenie długości imienia
		if ((strlen($imie)<3) || (strlen($imie)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_imie']="Imie musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($imie)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_imie']="Imie może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		//Sprawdź poprawność imienia
		$nazwisko = $_POST['nazwisko'];
		
		//Sprawdzenie długości imienia
		if ((strlen($nazwisko)<3) || (strlen($nazwisko)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko']="Nazwisko musi posiadać od 3 do 20 znaków!";
		}
		
		if (ctype_alnum($nazwisko)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nazwisko']="Nazwisko może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		//Czy zaakceptowano regulamin?
		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}
        
     //Zapamiętaj wprowadzone dane
		$_SESSION['fr_nick'] = $nick;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
        $_SESSION['fr_imie'] = $imie;
		$_SESSION['fr_nazwisko'] = $nazwisko;
		if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0){
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id_trenera FROM trener WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id_trenera FROM trener WHERE user='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO `trener` (`id_trenera`, `user`, `haslo`, `email`, `imie`, `nazwisko`) VALUES (NULL, '$nick', '$haslo_hash', '$email', '$imie', '$nazwisko');"))
					{
						$_SESSION['udanarejestracja1']=true;
						header('Location: witamy2.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
	
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Login Aplikacji do wspomagania ternera personalnego</title>
    <link rel="stylesheet" href="css/style_login1.css">
	
	
</head>

<body  background="loginnn_back.png">

    <div>
        <div class="form-box1">
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
            
        <form id="register"  method="post" >
            <input type="text" class="input-field" placeholder="Nick"  value="<?php
			if (isset($_SESSION['fr_nick']))
			{
				echo $_SESSION['fr_nick'];
				unset($_SESSION['fr_nick']);
			}
		?>"name="nick"> 
		<?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
		?>
            <input type="email" class="input-field" placeholder="Email" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email">
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
            <input type="password" class="input-field" placeholder="Hasło" value="<?php
			if (isset($_SESSION['fr_haslo1']))
			{
				echo $_SESSION['fr_haslo1'];
				unset($_SESSION['fr_haslo1']);
			}
		?>" name="haslo1">
		<?php
		if (isset($_SESSION['e_haslo']))
		{
			echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
			unset($_SESSION['e_haslo']);
		}
		?>	

			<input type="password" class="input-field" placeholder="Powtórz Hasło" value="<?php
			if (isset($_SESSION['fr_haslo2']))
			{
				echo $_SESSION['fr_haslo2'];
				unset($_SESSION['fr_haslo2']);
			}
		?>" name="haslo2">
			<input type="text" class="input-field" placeholder="Imie" value="<?php
			if (isset($_SESSION['fr_imie']))
			{
				echo $_SESSION['fr_imie'];
				unset($_SESSION['fr_imie']);
			}
		?>" name="imie">
			<input type="text" class="input-field" placeholder="Nazwisko" value="<?php
			if (isset($_SESSION['fr_nazwisko']))
			{
				echo $_SESSION['fr_nazwisko'];
				unset($_SESSION['fr_nazwisko']);
			}
		?>" name="nazwisko">
         <label>
			<input type="checkbox" class="chech-box" name="regulamin" <?php
			if (isset($_SESSION['fr_regulamin']))
			{
				echo "checked";
				unset($_SESSION['fr_regulamin']);
			}
				?>/> <b>Akceptuję regulamin</b>
		</label>
		
		<?php
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		?>	
            <input type="submit"  class="submit-btn" value="Zarejestruj się" />
        </form>
        </div>
        
        
    </div>

</body>
</html>