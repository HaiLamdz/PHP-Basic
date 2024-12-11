<?php 
    session_start();

    // if(isset($_SESSION["taikhoan"])){
        // unset($SESSION["taikhoan"]);
        session_unset();
        session_destroy();
        header("location: login.php");
    
?>
