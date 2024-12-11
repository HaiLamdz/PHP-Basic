<?php 
    $host = "localhost";
    $username = "root";
    $dbname = "list_cutommer";
    $passwork = '';

    try{
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $passwork);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'kết nối thành công';
    }catch(PDOException $e){
        echo "lỗi kết nối dữ liệu";
    }
?>