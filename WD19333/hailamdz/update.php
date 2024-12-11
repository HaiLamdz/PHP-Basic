<?php
    require_once("connect.php");

    if(isset($_GET["id_user"])){
        // nếu có id thì lấy ra thông tin chi tiết của người dùng đó
        $id = $_GET["id_user"];
        $sql_detail = "SELECT * FROM user2 WHERE id = '$id' ";
        $stmt_detail = $pdo->prepare($sql_detail);
        $stmt_detail->execute();
        $userdetail = $stmt_detail->fetch(PDO::FETCH_ASSOC);

        // nếu không có dữ liệu trả veef người dùng
        if(empty($userdetail)){
            echo "người dùng ko tồn tại";
            exit();
        }else{
            // nếu có dữ liệu về người dùng
            if(isset($_POST["update"])){
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
                    $spl_update = "UPDATE user2 SET name='$name', email='$email', phone='$phone', status='$trangthai' WHERE id='$id' " ;
                    $spl_update = $pdo->prepare($sql_create);
                    $spl_update->execute();
                    header("location: index.php");
                    
                }
        
                // viết câu truy vẫn để đưa dữ liệu để thêm vào cơ sở dữ liệu
        
            }
        }
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
<h3>sửa thông tin người dùng</h3>
    <form action="" method="GET">
        <label for="">Họ Tên</label>
        <input type="text" name="hoTen" value="<?= $userdetail["name"] ?>">
        <span style="color: red;" ><?= !empty($error["hoTen"]) ? $error["hoTen"] : '' ?></span>
        <br>
        <label for="">email</label>
        <input type="text" name="email" value="<?= $userdetail["email"] ?>">
        <span style="color: red;" ><?php echo!empty($error["email"]) ? $error["email"] : '' ?></span>
        <br>
        <label for="">phone</label>
        <input type="text" name="phone" value="<?= $userdetail["phone"] ?>">
        <span style="color: red;" ><?php echo!empty($error["phone"]) ? $error["phone"] : '' ?></span>
        <br>
        <label for="" >trangthai</label>
        <select name="trangthai" id="">
            <option <?= $userdetail["status"] == 0 ? 'selected': '' ?> >ko hoạt động</option>
            <option <?= $userdetail["status"] == 1 ? 'selected': '' ?> >hoạt động</option>
        </select>
        <br>
        <button type="submit" name="update">update</button>
    </form>
</body>
</html>
