<?php 
    session_start();
    if(isset($_SESSION["taikhoan"])){
        session_unset();
        session_destroy();
        header("location: login.php");
    }

?>