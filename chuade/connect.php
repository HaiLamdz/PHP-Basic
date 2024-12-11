<?php
    $host = "localhost";
    $username = "root";
    $dbname = "";
    $passwork = "";


    try{
        //tạo kết nối tới csdl
        $pdo = new PDO("mysql:host=$host; dbname=$dbname",  $username, $passwork);
        // thiết lập lỗi 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "kết nối thành công";

    }catch(PDOException $e){
        echo "lỗi kết nỗi csdl: " . $e->getMessage();
    }
?>