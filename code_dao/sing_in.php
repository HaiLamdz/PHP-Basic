<?php
    require_once("connect.php");

    // kiểm tra xem người dùng có submit hay k
    if(isset($_POST["login"])){
        // lấy toàn bộ dữ liệu ở form
        $taikhoan = $_POST["taikhoan"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        // tạo mảng chứa lỗi
        $error = [];
        if(empty($email)){
            $error["taikhoan"] = "bạn cần điền tên đằng nhập";

            // $error["hoTen"] = "bạn cần điền họ Tên";
        }
        if(empty($email)){
            $error["email"] = "bạn cần điền email";

            // $error["hoTen"] = "bạn cần điền họ Tên";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            // filter_var() sử dụng những validate có sẵn của php nếu đúng định dạng nó sẽ trả về true nối sai nó sẽ trả về false 

            $error["email"] = "email sai định dạng";
        }
        if(empty($password)){
            $error["password"] = "bạn cần điền mật khẩu";
            // $error["hoTen"] = "bạn cần điền họ Tên";
        }
        else if(strlen($password) < 8 || strlen($password)> 20){
            // preg_match sử dụng validate bằng regax
            $error["password"] = "password sai định dạng";
        }
        if(empty($error)){
            $spl_create = "INSERT INTO sing_up VALUES (null, '$taikhoan', '$email', '$password')";
            $stmt_create = $pdo->prepare($sql_create);
            $stmt_create->execute();
            header("location: index.php");
            
        }

        // viết câu truy vẫn để đưa dữ liệu để thêm vào cơ sở dữ liệu

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sing_in.css">
</head>
<body>
    <div class="wrapper">
        <h2>Logn In</h2>
        <form action="#" method="POST">
            <div class="input_field">
            <input type="taikhoan" name="taikhoan" id="taikhoan" placeholder="Tên đăng nhập.." require>
            <span style="color: red;" ><?= !empty($error["taikhoan"]) ? $error["taikhoan"] : '' ?></span>
            </div>
            <div class="input_field">
            <input type="email" name="email" id="email" placeholder="Username.." require>
            <span style="color: red;" ><?= !empty($error["email"]) ? $error["email"] : '' ?></span>
            </div>
            <div class="input_field">
            <input type="password" name="password" id="password" placeholder="Password.." require>
            <span style="color: red;" ><?= !empty($error["password"]) ? $error["password"] : '' ?></span>
            </div>
            <a href="" class="forgot">
                <p>Forgot Password?</p>
            </a>
            <button type="submit" class="login" name="login">Login</button>
            <p>Don't have an account? <a href="" class="sign_up">Sign Up</a></p>
        </form>
    </div>
</body>
</html>

