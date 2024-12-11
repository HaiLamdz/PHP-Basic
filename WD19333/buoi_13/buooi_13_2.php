<?php
    session_start();

    if(isset($_SESSION["ten_dang_nhap"]) && isset($_SESSION["mat_khau"])){
        echo $_SESSION["ten_dang_nhap"] ;
        echo "<br>";
        echo $_SESSION["mat_khau"];
    }
    echo "<br>";
    if(isset($_COOKIE["name"]) && $_COOKIE["class"]){
        echo $_COOKIE["name"];
        echo "<br>";
        echo $_COOKIE["class"];
    }



?>