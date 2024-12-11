<?php 
    session_start();
    if(isset($SESSION["username"])){
        // xóa thông tin đăng nhập của nười dùng trên sesstiom
        unset($SESSION["username"]);

        // sau khi đăng xuất sẽ quay về trang login
        header("location: login.php");
    }

?>