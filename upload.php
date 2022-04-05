<?php
$conn =mysqli_connect("localhost","root","","trener1");

if(isset($_POST['upload'])){

    if(isset($_POST['podzial']) && isset($_POST['grupa']) && isset($_POST['miejsce']) && isset($_FILES['image']['name']) && isset($_POST['text'])&& isset($_POST['nazwa'])){
        $selected = $_POST['podzial'];
        $selected1 = $_POST['grupa'];
        $selected2 = $_POST['miejsce'];
        $file = $_FILES['image']['name'];
        $text = $_POST['text'];
        $nazwa = $_POST['nazwa'];
        echo "DANE WYBRANE POPRAWNIE!!</br>";
    }
    else{
        die("UZUPEŁNIJ DANE!!!!!". mysqli_connect_error());
        
    }


    $query = "INSERT INTO `image` (`id`, `image`, `nazwa`, `text`, `podzial`, `grupa`, `miejsce`) VALUES (NULL, '$file','$nazwa', '$text', '$selected', '$selected1', '$selected2');";
    

    $res = mysqli_query($conn,$query);
    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
    
        echo "Dodane ćwiczenie ";
    } 
    
    header("refresh:2; url=dashboard.php" );
}


?>