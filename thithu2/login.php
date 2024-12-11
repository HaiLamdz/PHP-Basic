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
    <div>
        <form action="" method="POST">
        <div>
            <label for="">Tài Khoản</label>
            <input type="text" name="taikhoan">
        </div>
        <div>
            <label for="">mật khẩu</label>
            <input type="text" name="matkhau">
        </div>
        <div>
            <button type="submit" name="login">login</button>
        </div>
        </form>
    </div> 
    <?php 
        if(isset($_POST["login"])){
            $taikhoan = $_POST["taikhoan"];
            $matkhau = $_POST["matkhau"];
            if($taikhoan == "hailam123" && $matkhau == "123456"){
                // session_start();
                $_SESSION["taikhoan"] = $taikhoan;
                header("location: index.php");
            }
            else{
                echo "<script> alert('bạn đã nhập sai mật khẩu or tài khoản') </script>";
            }
        }
    ?>
</body>
</html>