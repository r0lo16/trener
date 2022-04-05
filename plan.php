<?php 

//plan.php

$connect = new PDO("mysql:host=localhost;dbname=trener1", "root", "");

$message = '';

session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
if(isset($_POST["add_trening"]))
{
 if(isset($_COOKIE["plan"]))
 {
  $cookie_data = stripslashes($_COOKIE['plan']);

  $cart_data = json_decode($cookie_data, true);
 }
 else
 {
  $cart_data = array();
 }

 $item_id_list = array_column($cart_data, 'item_id');

 if(in_array($_POST["hidden_id"], $item_id_list))
 {
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]["item_id"] == $_POST["hidden_id"])
   {
    $cart_data[$keys]["item_quantity"]["item_quantity1"] = $cart_data[$keys]["item_quantity"]["item_quantity1"] + $_POST["quantity"]+$_POST[["quantity1"]];
   }
  }
 }
 else
 {
  $item_array = array(
   'item_id'   => $_POST["hidden_id"],
   'item_name'   => $_POST["hidden_name"],
   'item_price'  => $_POST["hidden_price"],
   'item_quantity'  => $_POST["quantity"],
   'item_quantity1'  => $_POST["quantity1"]
  );
  $cart_data[] = $item_array;
 }

 
 $item_data = json_encode($cart_data);
 setcookie('plan', $item_data, time() + (86400 * 30));
 header("location:plan.php?success=1");
}

if(isset($_GET["action"]))
{
 if($_GET["action"] == "delete")
 {
  $cookie_data = stripslashes($_COOKIE['plan']);
  $cart_data = json_decode($cookie_data, true);
  foreach($cart_data as $keys => $values)
  {
   if($cart_data[$keys]['item_id'] == $_GET["nazwa"])
   {
    unset($cart_data[$keys]);
    $item_data = json_encode($cart_data);
    setcookie("plan", $item_data, time() + (86400 * 30));
    header("location:plan.php?remove=1");
   }
  }
 }
 if($_GET["action"] == "clear")
 {
  setcookie("plan", "", time() - 3600);
  header("location:plan.php?clearall=1");
 }
}

if(isset($_GET["success"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Dodano do planu
 </div>
 ';
}

if(isset($_GET["remove"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Usunięo Ćwiczenie
 </div>
 ';
}
if(isset($_GET["clearall"]))
{
 $message = '
 <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  Wyczyszczono plan
 </div>
 ';
}


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Plan</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--- darmowe css-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/opinie_style1.css">
  <script>
        function op(obj) {
        x=document.getElementById(obj);
        if(x.style.display == "none") x.style.display = "block";
        else x.style.display = "none"
        }
    </script>
 </head>
 <body background="white">
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


    
  <br />
  <div class="container">
   <br/><h3><div class="deletworkout"><a class="deletworkout1" href="/" onClick="op('poka3'); return false;"><h2>Utwórz plan ćwiczeń</h2></a></h3>
   <div id="poka3"><p class="text-center"><div class="deletworkout2">
    <br/>
   <br /><br />
   <?php
   $query = " SELECT * FROM `image` ORDER BY `miejsce` ASC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
   ?>
   <div class="col-md-3">
    <form method="post" action="plan.php?action=add&nazwa=<?php echo $row["nazwa"]; ?>">
     <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
     <?php
     echo"<img src='".$row['image']."' class='my-3' style='width:120px;height:60px; border-radius=3px;'>";
    ?>
      <h4 class="text-info"><?php echo $row["text"]; ?></h4>

      <h4 class="text-danger"> <?php echo $row["nazwa"]; ?></h4>
        <h5>Powtórzenia
      <input type="text" name="quantity" value="1" class="form-control" /><br>
        <h5>Serie
      <input type="text" name="quantity1" value="1" class="form-control" /> 
      <input type="hidden" name="hidden_name" value="<?php echo $row["nazwa"]; ?>" />
      
      <input type="hidden" name="hidden_id" value="<?php echo $row["text"]; ?>" />
      <input type="submit" name="add_trening" style="margin-top:5px;" class="btn btn-success" value="Dodaj" />
     </div>
    </form>
   </div>
   <?php
   }
   ?>
   </div>
</div>
   <div style="clear:both"></div>
   <br />
   <h2>Plan</h2>
   
   <div class="table-responsive">
   <?php echo $message; ?>
   <div align="right">
    <a href="plan.php?action=clear"><b>Wyczyść</b></a>
   </div> 
   <div class="table_plan">
   <table class="table table-bordered">
    <tr>
     <th width="60%">Nazwa</th>
     
     <th width="20%">Powtórzenia</th>
     <th width="20%">Serie</th>
     
     
     
    </tr>
   <?php
   if(isset($_COOKIE["plan"]))
   {
    $total = 0;
    $total2 = 0;
    $cookie_data = stripslashes($_COOKIE['plan']);
    $cart_data = json_decode($cookie_data, true);
    foreach($cart_data as $keys => $values)
    {
   ?>
  
    <tr>
     <td><?php echo $values["item_name"]; ?></td>
     <td><?php echo $values["item_quantity"]; ?></td>
     <td><?php echo $values["item_quantity1"]; ?></td>
    
     
     
    </tr>
   <?php 
     $total = $total + ($values["item_quantity"]);
     $total2 = $total2 + ($values["item_quantity1"]);
    }
   ?>
    
   <?php
   }
   else
   {
    echo '
    <tr>
     <td colspan="5" align="center">Brak przydzielonego ćwiczenia.</td>
    </tr>
    ';
   }
   ?>
   </table>
   </div>
  </div>
  <button onclick="window.print();" > Drukuj Plan</button>
</div>  
</br>


</body>
</html>



