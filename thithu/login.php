<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Tài khoản</label>
        <input type="text" name="taikhoan">
        <br>
        <label for="">mặt khẩu</label>
        <input type="text" name="matkhau">
        <br>
        <button type="submit" name="login">login</button>
    </form>
    <?php
        if(isset($_POST["login"])){
            $taikhoan = $_POST["taikhoan"];
            $matkhau = $_POST["matkhau"];

            if($taikhoan == "hailam2112" && $matkhau == "1234567"){
                $_SESSION["taikhoan"] = $taikhoan;

                header("location: danhsach.php");
            }
            else{
                echo "<script> alert('sai tài khoản hoặc mật khẩu') </script>";

            }
        }
    ?>
</body>
</html>