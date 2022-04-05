<?php
$conn =mysqli_connect("localhost","root","","trener1");

if(isset($_POST['upload'])){

    $file = $_FILES['image']['name'];
    $text = $_POST['text'];
    $query = "INSERT INTO image (`id`, `image`, `text`) VALUES ('', '$file', '$text')";

    $res = mysqli_query($conn,$query);
    if($res){
        move_uploaded_file($_FILES['image']['tmp_name'],"$file");
    
        echo "Dodane ćwiczenie ";
    } 
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="coll-md-12">
            <div class="row">
            <div class="col-md-6">
                <h3 class="text-center">UPLOAD IAMGE</h3>

                <form class="my-5" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" class="form-control">
                    <textarea name="text"></textarea>
                    <input type="submit" name="upload" value="UPLOAD" class="btn btn-success my3">

                </form>
            </div>
            <div class="col-md-6">
                <h3 class="text-center">DISPLAY Image</h3>
                <?php
               
               $db = mysqli_connect("localhost","root","","trener1");
               $sql = "SELECT * FROM image";
               $result = mysqli_query($db,$sql);
               while($row = mysqli_fetch_array($result)){
                   echo"<div id='img_div'>";
                       echo"<img src='".$row['image']."' class='my-3' style='width:400px;height:400px;'>";
                       echo "<p>".$row['text']."</p>";
                       echo "<div>";
               }

                ?>
            </div>
            </div>
        </div>
    </div>
</body>
</html>