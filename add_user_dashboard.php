<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "trener1";
try {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO klienci (user,haslo,email,imie,nazwisko)
    VALUES ('$user','', '$email','$imie','$nazwisko')";
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>