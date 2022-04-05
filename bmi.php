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
    <link rel="stylesheet" href="css/style_kalkualtor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--- darmowe css-->
    <script type="text/javascript">
    window.onload = () => {
	let button = document.querySelector("#btn");

	// Funkcja obliczania BMI
	button.addEventListener("click", calculateBMI);
};

function calculateBMI() {

	/*Pobieranie danych wejściowych od użytkownika do zmiennej wysokości.
    Wejście to ciąg znaków, więc konieczne jest rzutowanie typów.*/
	let height = parseInt(document
			.querySelector("#height").value);

	// Sprawdzenie, czy użytkownik podał poprawną
    // wartość czy nie
	let weight = parseInt(document
			.querySelector("#weight").value);

	let result = document.querySelector("#result");

	// SPRAWDZ WARTOSCI
	// PRAWDA CZY NIE
	if (height === "" || isNaN(height))
		result.innerHTML = "Provide a valid Height!";

	else if (weight === "" || isNaN(weight))
		result.innerHTML = "Provide a valid Weight!";

	// // Jeśli oba dane wejściowe są prawidłowe, oblicz bmi
	else {

		//Naprawa do 2 miejsc po przecinku
		let bmi = (weight / ((height * height)
							/ 10000)).toFixed(2);

		// Dzielenie zgodnie z warunkami bmi
		if (bmi < 18.6) result.innerHTML =
			`NIEDOWAGA!!! : <span>${bmi}</span>`;

		else if (bmi >= 18.6 && bmi < 24.9)
			result.innerHTML =
				`NORMA: <span>${bmi}</span>`;

		else result.innerHTML =
			`NADWAGA : <span>${bmi}</span>`;
	}
}

    </script>
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
        <div class="container">
            <h1>BMI KALKULATOR</h1>
      
            <!-- Możliwość podania wysokości
                i wagę do użytkownika-->
            <div class="input-group"><div class="input">
                <p>Wzrost (w cm)</p>
      
            <input type="text" id="height">
      
            <p>Waga (w kg)</p>
      
            <input type="text" id="weight">
            </div>
            <button id="btn" class="btn">OBLICZ</button>
      
            <div id="result" class="result1"></div></div>
        </div>
        <div class="container1">
            <h1>Historia wskaźnika BMI</h1>
            <br><p class="text_bmi">
            Antropometryczny współczynnik masy ciała został opracowany w 1832 r. przez belgijskiego matematyka Adolfa Queteleta.

            Adolphe Quatelet w czasie swojej wieloletniej pracy prowadził badania, które miały na celu unifikację przyczyn zgonów w poszczególnych krajach. Prowadził także cały szereg badań związanych z medycyną, których zadaniem było określenie kształtu ówczesnego przeciętnego człowieka.

            W badaniach Quateleta brały udział setki ochotników. Uczony dostrzegł pewną zależność, związaną z masą ciała i wzrostem człowieka. Okazało się, że waga ludzka rośnie w sposób proporcjonalny do kwadratu wzrostu człowieka. I tak właśnie powstał współczynnik Quateleta, który jest obecnie wykorzystywany powszechnie jako wskaźnik BMI.
            <br>
            BMI jest standardowym wskaźnikiem oceny masy ciała wykorzystywanym do oceny porównawczej grup społecznych, populacji, gdyż dobrze koreluje z zawartością tkanki tłuszczowej w organizmie i jest raczej niezależny od wzrostu.
            <br>
            W praktyce klinicznej nie stosuje się wskaźnika BMI do oznaczania prawidłowej masy ciała u dzieci. Dla dzieci do ok. 14 roku życia, służą do tego tabele centylowe, które powinny być dostosowane dla danej populacji i odpowiednia interpretacja danych dot. masy ciała i wzrostu – głównie bierze się pod uwagę jaka jest różnica w tzw. kanałach centylowych wzrostu i masy ciała dla danego dziecka.
        </p> <figure class="img_zdjecie">
            <img  src="zdjecia_bmi/1.jpg" alt="">
            <figcaption></figcaption>
        </figure>
        
    </div>
    <div class="container2">
        <figure class="img_zdjecie2">
            <img  src="zdjecia_bmi/2.png" alt="">
            <figcaption></figcaption>

    </div>
</div>



</body>
</html>