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
    <link rel="stylesheet" href="css/opinie_style.css">
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

<div class="block6"> 
    <div class="container6">
            <div class="trener">Adam</div>
            <div class="trener-wiek">Wiek: 28 lat Trening na si??ownia</div>
                <div class="zdjecie"> <img src="trenerzy/adam.jpg" alt="adam"></div>
                <div class="opis-img"><i>Wszystko, czego potrzebujesz w ??yciu, to ignorancja i pewno???? siebie - wtedy masz zapewniony sukces. - Mark Twain</i></div>    
                <div class="opis"> <p><b>Praca trenera osobistego</b> rozpoczyna si?? od szczeg????owego wywiadu dzi??ki kt??remu poznaje on charakter, stan zdrowia, kondycj?? oraz nawyki swojego klienta. Na jego podstawie opracowywany jest szczeg????owy program ??wicze?? i odpowiednia dieta. Jest to te?? wa??ne ??r??d??o wiedzy dla trenera w jaki spos??b skutecznie motywowa?? klienta do ??wicze?? i utrzymywania diety, tak aby utrwali?? w nim nawyki zwi??zane z diet?? i odpowiednim od??ywianiem si??. Istotn?? cech?? charakteru w tym zawodzie jest komunikatywno????, a ??atwo???? w nawi??zywaniu kontakt??w pomaga zdoby?? zaufanie podopiecznych. Przy tym jednak nale??y zachowa?? profesjonalizm, kt??ry jest niezb??dny do uzyskania w??a??ciwych efekt??w.</p></div>
       
            </div>   
    </div>


</body>
</html>


