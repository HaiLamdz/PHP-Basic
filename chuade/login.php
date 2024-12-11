<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>Đang nhâpk</h5>
    <form action="" method="POST">
        <label for="name">Tên đang nhập</label>
        <input type="text" name="username" repuired>
        <br>
        <label for="name">mật khẩu</label>
        <input type="text" name="passwork" repuired>

        <button type="submit" name="login">login</button>
    </form>

    <?php
        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $passwork = $_POST["passwork"];

            if($username == "hailam123" && $passwork == "123456"){
                session_start();
                $SESSION["username"] = $username;

                // echo "<script> alert('bạn đã đăng nhập thành công') </script>";
                
                header("location: index.php");
            }else{
                echo "<script> alert('thông tin đăng nhập sai') </script>";
            }
        }
    
    ?>
</body>
</html>