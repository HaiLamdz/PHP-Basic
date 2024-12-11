<?php
    require_once("connect.php");

    // kiểm tra xem người dùng có submit hay k
    if(isset($_POST["create"])){
        // lấy toàn bộ dữ liệu ở form
        $name = $_POST["hoTen"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["pass2"];
        // tạo mảng chứa lỗi
        $error = [];
        if(empty($name)){
            $error["hoTen"] = "bạn cần điền họ Tên";
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
        $regex_phone = '/^(0|\+84)(3[2-9]|5[2689]|7[06-9]|8[1-689]|9[0-46-9])\d{7}$/';
        if(empty($phone)){
            $error["phone"] = "bạn cần điền phone";
            // $error["hoTen"] = "bạn cần điền họ Tên";
        }
        else if(!preg_match($regex_phone, $phone)){
            // preg_match sử dụng validate bằng regax
            $error["phone"] = "phone sai định dạng";
        }else if(empty($pass)){
            $error["pass"] = "bạn cần điền mật khẩu";
        }else if(strlen($pass) < 8){
            $error["pass"] = "mật khẩu cần phải hơn 8 ký tự";
        }
        if(empty($pass2)){
            $error["pass2"] = "vui lòng điền lại mật khẩu";
        }else if($pass !== $pass2){
            $error["pass2"] = "2 mật khẩu không trùng nhau";
        }
        if(empty($error)){
            $spl_create = "INSERT INTO user2 VALUES (null, '$name', '$email', '$phone', '$pass', '$pass2')";
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
</head>
<body>
    <h3>sign up</h3>
    <form action="" method="POST">
        <label for="">Họ Tên</label>
        <input type="text" name="hoTen">
        <span style="color: red;" ><?= !empty($error["hoTen"]) ? $error["hoTen"] : '' ?></span>
        <br>
        <label for="">email</label>
        <input type="text" name="email">
        <span style="color: red;" ><?php echo!empty($error["email"]) ? $error["email"] : '' ?></span>
        <br>
        <label for="">phone</label>
        <input type="text" name="phone">
        <span style="color: red;" ><?php echo!empty($error["phone"]) ? $error["phone"] : '' ?></span>
        <br>
        <label for="">mật khẩu</label>
        <input type="text" name="pass">
        <span style="color: red;" ><?php echo!empty($error["pass"]) ? $error["pass"] : '' ?></span>
        <br>
        <label for="">nhập lại mật khẩu</label>
        <input type="text" name="pass2">
        <span style="color: red;" ><?php echo!empty($error["pass2"]) ? $error["pass2"] : '' ?></span>

        <br>
        <button type="submit" name="create">Thêm mới</button>
    </form>
</body>
</html>