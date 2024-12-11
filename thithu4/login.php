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
            <label for="">Tài khoản</label>
            <input type="text" name="taikhoan">
            <br>
            <label for="">mật khẩu </label>
            <input type="text" name="matkhau">
            <button type="submit" name="login">login</button>
        </form>
    </div>
    <?php
        if(isset($_POST["login"])){
            $taikhoan = $_POST["taikhoan"];
            $matkhau = $_POST["matkhau"];
            if($taikhoan == "hailam" && $matkhau == "123456"){
                $_SESSION["taikhoan"] =$taikhoan;
                header("location: index.php");
            }else{
                echo "<script> alert(' bạn đẫ nhập sai tài khoaanr hoặc mật khẩu') </script>";
            }
        }
    ?>
</body>
</html>