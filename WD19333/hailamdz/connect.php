<?php 
    // kết nối PDO là 1 phương pháp trong php dùng để kết nối
    // và tương tác với csdl
    // ưu điểm : PDO cho phếp kết nối nhiều laoij csdl với nhau như:
    // mySQL, PostgreSQL, SQLite, SQL server, ..
    
    $host = "localhost";
    $dbname = "web108_wd19333";
    $username = "root";
    $passwork = "";

    try {
        // tạo kết nối đến csdl bằng PDO
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $passwork);
        // thiết lập chế đọ lỗi(kiểm tra thằng bên trên có lỗi hay không)
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "kết nối thành công";
    }catch(PDOException $e){
        echo "looic kết nối csdl: " . $e -> getMessage();
    }

?>
