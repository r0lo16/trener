<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Trener</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--- darmowe css-->
<link rel="stylesheet" href="css/cwiczenia.css">
            <script>
        function op(obj) {
        x=document.getElementById(obj);
        if(x.style.display == "none") x.style.display = "block";
        else x.style.display = "none"
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
			<div>
			
			<div class="container">
				<div class="options">
    <div class="deletworkout"><a class="deletworkout1" href="/" onClick="op('poka3'); return false;">Wielostawowe</a>
							<div id="poka3"><p class="text-center"><div class="deletworkout2">
								<div class="deletworkout2">??wiczenia wielostawowe s?? najlepsza metod?? budowania og??lnej si??y i sprawno??ci orgiazmu. Ich nazwa wzi????a si?? st??d, ??e podczas ruchu anga??uj?? wi??cej ni?? jeden staw.
							<table border=1 cellpadding=1 cellspacing=1>
							<tr>
							<th>Zdjecie</th>
							<th>Opis</th>
														
							</tr>
							<?php
								
								$db = mysqli_connect("localhost","root","","trener1");
								$sql = "SELECT * FROM `image` WHERE `grupa`='nogi' AND `podzial`='Wielostowawe'";
								$result = mysqli_query($db,$sql);
								while($row = mysqli_fetch_array($result)){
									echo"<div id='img_div'>";
									echo"<tr>";
										echo"<td><img src='".$row['image']."' class='my-3' style='width:640px;height:480px;'></td>";
										echo "<td>".$row['text']."</td>";
										
								}
								?>
								

							    </table>
                        
                                    </div>
                                </div>
                            </div>
                        

                    </div>
                    <div class="deletworkout"><a class="deletworkout1" href="/" onClick="op('poka4'); return false;">Izolacyjne</a>
							<div id="poka4"><p class="text-center"><div class="deletworkout2">
								<div class="deletworkout2">Celem ??wicze?? izolowanych jest zm??czenie jednego mi????nia ze znikomym (lub zerowym) udzia??em innych partii. S?? one przeciwie??stwem ??wicze?? z??o??onych, kt??rych zadaniem jest zaanga??owanie dw??ch lub wi??kszej ilo??ci staw??w, zmuszaj??c je do wsp????pracy.
							<table border=1 cellpadding=1 cellspacing=1>
							<tr>
							<th>Zdjecie</th>
							<th>Opis</th>
														
							</tr>
							<?php
								
								$db = mysqli_connect("localhost","root","","trener1");
								$sql = "SELECT * FROM `image` WHERE `grupa`='nogi' AND `podzial`='Izolacyjne'";
								$result = mysqli_query($db,$sql);
								while($row = mysqli_fetch_array($result)){
									echo"<div id='img_div'>";
									echo"<tr>";
										echo"<td><img src='".$row['image']."' class='my-3' style='width:640;height:480px;'></td>";
										echo "<td>".$row['text']."</td>";
										
								}
								?>
								

							</table>
                        
                        </div>
                    </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>