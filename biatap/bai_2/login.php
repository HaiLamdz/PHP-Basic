<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_POST["login"])) {
        $name = $_POST["taikhoan"];
        $password = $_POST["password"];
        $error = [];
        if (empty($name)) {
            $error["taikhoan"] = "bạn cần nhập email";
        } 
        else if ($name !== "abc@gmail.com") {
            $error["taikhoan"] = "bạn nhập sai tài khoản";
        }

         if(empty($password)){
            $error["password"] = "bạn cần nhập mật khẩu";
        }
        else if($password !== "123@123ab"){
            $error["password"] = "bạn nhập sai mặt khẩu";
        }
        if(empty($error)){
            $_SESSION["taikhoan"] = $name;

            header("location: index.php");
        }
    }

    ?>
    <div>
        <form action="" method="POST">
            <label for="">Tài khoản</label>
            <input type="email" name="taikhoan">
            <span style="color: red;"><?= !empty($error["taikhoan"]) ? $error["taikhoan"] : '' ?></span>
            <br>
            <label for="">Mật Khẩu</label>
            <input type="text" name="password">
            <span style="color: red;"></span>
            <span style="color: red;"><?= !empty($error["password"]) ? $error["password"] : '' ?></span>
            <br>
            <button name="login">Login</button>
        </form>
    </div>

</body>

</html>