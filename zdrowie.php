<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikacji do wspomagania ternera personalnego</title>
    <link rel="stylesheet" href="css/home_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--- darmowe css-->
    
</head>
<body>
<div class="menu-bar">
    <ul>
        <li class="active"><a href="home.php"><i class="fas fa-home"></i>  Home</a</i></li>
          
        
        <li><a href="#"><i class="fas fa-user"></i>WIEDZA</a> 
           <div class="sub-menu-1">
               <ul>
                   <li><a href="historia.php">HISTORIA</a></li>
                   <li><a href="zdrowie.php">ZDROWIE</a></li>
                   </ul>
           </div>
       </li>
        <li><a href="plan.php"><i class="fas fa-clone"></i>ATLAS</a> <div class="sub-menu-1">
            <ul>
                <li><a href="klatka.php">KLATKA PIERSIOWA</a></li>
                <li><a href="barki.php">BARKI</a></li>
                <li><a href="ramiona.php">RAMIONA</a></li>
                <li><a href="brzuch.php">BRZUCH</a></li>
                <li><a href="plecy.php">PLECY</a></li>
                <li><a href="nogi.php">NOGI</a></li>
            </ul>
        </div></li>
           
       
        <li><a href="#"><i class="fas fa-users"></i>TRENERZY</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="marek.php">Marek</a></li>
                    <li><a href="adam.php">Adam</a></li>
                    <li><a href="bartosz.php">Bartosz</a></li>
                </ul>
            </div></li>
            
        <li><a href="#"><i class="fas fa-inr"></i>KALKULATOR</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="bmi.php">BMI</a></li>
                    <li><a href="bmr.php">BMR</a></li>
                    
                </ul>
            </div></li>
            
        
        <li><a href="#"><i class="fas fa-edit"></i> O TRENINGU</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="pdf/Rozgrzewka_ogólnorozwojowa_-_skrypt_2018.pdf">ROZGRZEWKA</a></li>
                    <li><a href="pdf/plan.pdf">PODZIAŁ TRENINGOWY</a></li>
                    <li><a href="rozwoj.php">ROZWÓJ</a></li>
                </ul>
            </div></li>
           <li><a href="opinie.php"><i class="fas fa-thumbs-up"></i> Opinie</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="dodaj_opinie1.php">Dodaj opinie</a></li>
                    <li><a href="wyswietl_opinie.php">Wyswietl Opinie</a></li>
                    
                    
                </ul>
            </div></li>  
        

            
        <li><a href="kontakt.php"><i class="fas fa-phone"></i>KONTAKT</a></li>
        <li><i class="fas fa-user"></i> 
                <?php
            
            echo "<p>Witaj "."<b>".$_SESSION['user']."</b>"."</br>";
            
            ?></a></li>  
        <li><a href="kontakt.php"><i class="fas fa-logout"></i> <?php
                echo "<a href='logout.php'>Wyloguj się !</a>";
        ?></a></li>
    </ul>
</div>


    <div class="block2">    
        <br><div class="text_head2">Zdrowie<br>
            <div class="text_title2">Dlaczego właściwie warto trenować siłowo? <br>
            <div class="text_main2">Wbrew pozorom trening siłowy wpływa pozytywnie nie tyko na siłę i wytrzymałość naszych mięśni. Regularnie wykonywane ćwiczenia z obciążeniem poprawia także wytrzymałość kości, stawów oraz więzadeł. Stopniowe zwiększanie obciążenia sprawiają, że więzadła wzmacniają się, jednocześnie stając się bardziej elastyczne. W efekcie lepiej zaczyna funkcjonować cały aparat ruchowy.<br><br>Trening siłowy to rewelacyjne rozwiązanie także i dla tych osób, które chciałyby stracić zbędne kilogramy. Dlaczego warto postawić na trening siłowy, nawet jeśli wydatek energetyczny z pojedynczego treningu nie jest zbyt wysoki? Trening z obciążeniem prowadzi do wzrostu tkanki mięśniowej, która potrzebuje dość dużo energii, aby móc właściwie funkcjonować. W efekcie zwiększa się metabolizm. Regularne treningi siłowe w odchudzaniu przełożą się na wyraźną utratę centymetrów w obwodach, masa ciała może natomiast zmienić się niezbyt znacznie.<br><br>Treningi siłowe wzmacniają serce i normalizują ciśnienie krwi. Treningi z obciążeniem poprawiają kondycję mięśnia sercowego. W praktyce oznacza to, że osoby ćwiczące z obciążeniem są mniej narażone na zawał serca, chorobę niedokrwienną serca, miażdżycę itd.</div>
    </div></div>
    
    <figure class="pictuers_health">
        <img  src="zdjecia_zdrowie/1.jpg" alt="">
        <figcaption></figcaption>
    </figure>
    <figure class="pictuers_health">
        <img  src="zdjecia_zdrowie/2.jpg" alt="">
        <figcaption></figcaption>
    </figure>
</div>
</div>
</body>
</html>