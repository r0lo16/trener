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

    <div class="block1">    
        <br><div class="text_head">Historia<br>
            <div class="text_title">KULT CIAŁA W SZTUCE STAROŻYTNEJ GRECJI. AUT. RAFAŁ WOLSKI<br>
            <div class="text_main">Jednym z ulubionych tematów dla artystów: pisarzy, rzeźbiarze, byli - zwycięzcy sportowej rywalizacji. Pisarze i poeci tworzyli utwory sławiące ich dokonania, rzeźbiarze utrwalali ich umięśnione ciała.

                Na ten temat dużo możemy przeczytać z zachowanych publikacji o mitologii greckiej. W niej szczególne znaczenie ma istniejący mit o Heraklesie. Bogowie i herosi byli z założenia doskonali, a więc najczęściej byli przedstawiani, jako ludzie o pięknie zbudowanych ciałach, harmonijnych, symetrycznie umięśnionych, bez najdrobniejszej skazy. Stanowili oni model człowieka doskonałego. Herakles dodatkowo odznaczał się niezwykłą siłą. Ci najładniej zbudowani i silni fizycznie przedstawiani byli często, jako wielcy sportowcy. Właśnie tacy o wyglądzie atletów i jednocześnie zwycięzcy zawodów cieszyli się wielkim szacunkiem.
                
                Greckie ideały piękna odnaleźć można szczególnie w rzeźbie, której rozwój trwał równocześnie z kulturą fizyczną. Charakterystyczną cechą klasycznej rzeźby greckiej jest harmonia i umiar. Przedstawiani sportowcy charakteryzowali się pięknym, umięśnionym ciałem. Proporcje sylwetki były nie nachalne i postaci wydawały się naturalnie piękne. Patrząc na rzeźby sportowców, nikt nie miał wątpliwości, że widzi człowieka doskonałego, ideał, do którego ma dążyć. </div>
    </div></div>
    
    <figure class="pictuers_history">
        <img  src="zdjecia_historia\2.jpg" alt="Laocoön and His Sons">
        <figcaption>Laocoön and His Sons</figcaption>
    </figure>
    <figure class="pictuers_history">
        <img  src="zdjecia_historia\1.jpg" alt="Pomnik Achillesa w pałacu Achillion niedaleko Gastouri.">
        <figcaption>Pomnik Achillesa w pałacu Achillion niedaleko Gastouri.</figcaption>
    </figure>

</div>
</body>
</html>