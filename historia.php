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

    <div class="block1">    
        <br><div class="text_head">Historia<br>
            <div class="text_title">KULT CIA??A W SZTUCE STARO??YTNEJ GRECJI. AUT. RAFA?? WOLSKI<br>
            <div class="text_main">Jednym z ulubionych temat??w dla artyst??w: pisarzy, rze??biarze, byli - zwyci??zcy sportowej rywalizacji. Pisarze i poeci tworzyli utwory s??awi??ce ich dokonania, rze??biarze utrwalali ich umi????nione cia??a.

                Na ten temat du??o mo??emy przeczyta?? z zachowanych publikacji o mitologii greckiej. W niej szczeg??lne znaczenie ma istniej??cy mit o Heraklesie. Bogowie i herosi byli z za??o??enia doskonali, a wi??c najcz????ciej byli przedstawiani, jako ludzie o pi??knie zbudowanych cia??ach, harmonijnych, symetrycznie umi????nionych, bez najdrobniejszej skazy. Stanowili oni model cz??owieka doskona??ego. Herakles dodatkowo odznacza?? si?? niezwyk???? si????. Ci naj??adniej zbudowani i silni fizycznie przedstawiani byli cz??sto, jako wielcy sportowcy. W??a??nie tacy o wygl??dzie atlet??w i jednocze??nie zwyci??zcy zawod??w cieszyli si?? wielkim szacunkiem.
                
                Greckie idea??y pi??kna odnale???? mo??na szczeg??lnie w rze??bie, kt??rej rozw??j trwa?? r??wnocze??nie z kultur?? fizyczn??. Charakterystyczn?? cech?? klasycznej rze??by greckiej jest harmonia i umiar. Przedstawiani sportowcy charakteryzowali si?? pi??knym, umi????nionym cia??em. Proporcje sylwetki by??y nie nachalne i postaci wydawa??y si?? naturalnie pi??kne. Patrz??c na rze??by sportowc??w, nikt nie mia?? w??tpliwo??ci, ??e widzi cz??owieka doskona??ego, idea??, do kt??rego ma d????y??. </div>
    </div></div>
    
    <figure class="pictuers_history">
        <img  src="zdjecia_historia\2.jpg" alt="Laoco??n and His Sons">
        <figcaption>Laoco??n and His Sons</figcaption>
    </figure>
    <figure class="pictuers_history">
        <img  src="zdjecia_historia\1.jpg" alt="Pomnik Achillesa w pa??acu Achillion niedaleko Gastouri.">
        <figcaption>Pomnik Achillesa w pa??acu Achillion niedaleko Gastouri.</figcaption>
    </figure>

</div>
</body>
</html>