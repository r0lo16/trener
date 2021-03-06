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
                    <li><a href="pdf/Rozgrzewka_og??lnorozwojowa_-_skrypt_2018.pdf">ROZGRZEWKA</a></li>
                    <li><a href="pdf/plan.pdf">PODZIA?? TRENINGOWY</a></li>
                    <li><a href="rozwoj.php">ROZW??J</a></li>
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
                echo "<a href='logout.php'>Wyloguj si?? !</a>";
        ?></a></li>
    </ul>
</div>


    <div class="block2">    
        <br><div class="text_head2">Zdrowie<br>
            <div class="text_title2">Dlaczego w??a??ciwie warto trenowa?? si??owo? <br>
            <div class="text_main2">Wbrew pozorom trening si??owy wp??ywa pozytywnie nie tyko na si???? i wytrzyma??o???? naszych mi????ni. Regularnie wykonywane ??wiczenia z obci????eniem poprawia tak??e wytrzyma??o???? ko??ci, staw??w oraz wi??zade??. Stopniowe zwi??kszanie obci????enia sprawiaj??, ??e wi??zad??a wzmacniaj?? si??, jednocze??nie staj??c si?? bardziej elastyczne. W efekcie lepiej zaczyna funkcjonowa?? ca??y aparat ruchowy.<br><br>Trening si??owy to rewelacyjne rozwi??zanie tak??e i dla tych os??b, kt??re chcia??yby straci?? zb??dne kilogramy. Dlaczego warto postawi?? na trening si??owy, nawet je??li wydatek energetyczny z pojedynczego treningu nie jest zbyt wysoki? Trening z obci????eniem prowadzi do wzrostu tkanki mi????niowej, kt??ra potrzebuje do???? du??o energii, aby m??c w??a??ciwie funkcjonowa??. W efekcie zwi??ksza si?? metabolizm. Regularne treningi si??owe w odchudzaniu prze??o???? si?? na wyra??n?? utrat?? centymetr??w w obwodach, masa cia??a mo??e natomiast zmieni?? si?? niezbyt znacznie.<br><br>Treningi si??owe wzmacniaj?? serce i normalizuj?? ci??nienie krwi. Treningi z obci????eniem poprawiaj?? kondycj?? mi????nia sercowego. W praktyce oznacza to, ??e osoby ??wicz??ce z obci????eniem s?? mniej nara??one na zawa?? serca, chorob?? niedokrwienn?? serca, mia??d??yc?? itd.</div>
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