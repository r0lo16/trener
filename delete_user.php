<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trener1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* ustaw tryb błędu PDO na wyjątek */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*sql, aby usunąć rekord*/
    $sql = "DELETE FROM klienci WHERE id_klient='" . $_GET["id_klient"] . "'";

    /*użyj exec(), ponieważ żadne wyniki nie są zwracane*/
    $conn->exec($sql);
    echo "Użytkownik został usunięty";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }
    header("refresh:2; url=dashboard.php" );

$conn = null;
?>