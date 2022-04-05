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
    
    
    <link rel="stylesheet" href="css/style_bmr.css">
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


<script src="bmr.js"></script>

<div class="block1">    
    <div class="container4">
        <div class="col-md-6">
            <div class="left-data">
            <h1>Kalkulator Dziennego Zapotrzebowania</h1>
            <h5>Waga (kg)</h5>
            <input type="text" id="we">
            <h5>Wzrost (cm)</h5>
            <input type="text"  id="hi">
            <h5>Wiek</h5>
            <input type="text" name="" id="age">
            <p id="resultcal"></p>
            <p id="resultcalp"></p>
            <p id="resultcalc"></p>
            <p id="resultcalf"></p>
            <button class="button_calculator" onclick="Calo()">WYLICZ</button></br>
            <button class="button_clear" onclick="Clear()">WYCZYŚĆ</button></br>
            <p>Prosze podać wszystkie niezbędne dane do wyliczenia zapotrzebowania.</p>
  
          </div>
        </div>
    </div>
    <div class="container1">
        <h1>BMR</h1>
        <br><p class="text_bmi">
            Dzienna porcja kalorii to najważniejszy czynnik wpływający na osiąganie przez nas celów sylwetkowych. Tak naprawdę marginalne znaczenie ma to, czy zjadamy 3, 4, czy 5 posiłków dziennie. Stosunkowo niewielki wpływ na skuteczność odchudzania ma też rozkład makroskładników (białka, tłuszczu, węglowodanów w diecie). Odchudzanie, utrzymanie masy ciała i jej zwiększanie to niemal zwykła matematyka (zakładając, że mowa tu o zdrowych osobach) – liczy się liczba kalorii dostarczonych organizmowi oraz ich wydatkowanie. A więc jak policzyć, ile kalorii potrzebuje organizm danego człowieka?
        <br>
        </br>
            Jeśli masz dylemat, użyj kalkulator dostępnego na stronie.
        <br></br>
        Jest to tylko wynnik podglądowy, ponieważ ten zależy od wielu kwestii. Dlatego większość z ogólnodostępnych sposobów mierzenia zapotrzebowania na energię służy do oszacowania tej wartości i ma na celu wskazać uśredniony, poglądowy wynik.
    </p> <figure class="img_zdjecie">
        <img  src="zdjecia_bmi/bmr.jpg" alt="">
        <figcaption></figcaption>
    </figure>
    
</div>
<div class="container2">
    <figure class="img_zdjecie3">
        <img  src="zdjecia_bmi/bmr2.jpg" alt="">
        <figcaption></figcaption>

</div>
</div>


</body>
</html>