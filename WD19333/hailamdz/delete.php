<?php
    require_once("connect.php"); // kết nối với csdl

    if(isset($_GET["id_user"])){
        $id = $_GET["id_user"];
        echo $id;
    }
    // viết câu truy vấn
    $spl_delete = "DELETE FROM user2 WHERE id = '$id' ";
    // chuẩn bị câu truy vấn
    $stmt_delete = $pdo->prepare($spl_delete);
    // chạy câu truy vấn
    $stmt_delete->execute();
    // trang delete không cần hiển thị ra dữ liệu
    // quay lại trang index
    header("Location: index.php");

?>