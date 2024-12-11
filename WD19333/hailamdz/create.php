<?php
    require_once("connect.php");

    // kiểm tra xem người dùng có submit hay k
    if(isset($_POST["create"])){
        // lấy toàn bộ dữ liệu ở form
        $name = $_POST["hoTen"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $trangthai = $_POST["trangthai"];
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
        }
        if(empty($error)){
            $spl_create = "INSERT INTO user2 VALUES (null, '$name', '$email', '$phone', '$trangthai')";
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
    <h3>Thêm người dùng</h3>
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
        <label for="">trangthai</label>
        <select name="trangthai" id="">
            <option value="0">ko hoạt động</option>
            <option value="1">hoạt động</option>
        </select>
        <br>
        <button type="submit" name="create">Thêm mới</button>
    </form>
</body>
</html>