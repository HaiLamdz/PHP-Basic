<?php
    $host = "localhost";
    $dbname = "web108_wd19333";
    $username = "root";
    $passwork = "";
    


    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $passwork);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "ket noi thanh cong";
    }catch(PDOException $e){
        echo "loi ket noi" . $e->getMessage();

    }
?>