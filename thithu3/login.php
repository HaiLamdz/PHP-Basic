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
        <div>
            <label for="">Username</label>
            <input type="text" name="taikhoan">
        </div>
        <div>
            <label for="">passwork</label>
            <input type="text" name="passwork">
        </div>
        <div>
            <button type="submit" name="login"> đang nhập</button>
        </div>
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $username = $_POST["taikhoan"];
        $passwork = $_POST["passwork"];
        if($username == "hailam123" && $passwork == "123456"){
            
            $_SESSION[$_POST["login"]];
            header("location: index.php");
        }
    }
?>