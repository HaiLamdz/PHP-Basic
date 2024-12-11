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
        <table>
        <tr>
            <td><label for="">Tai khoan</label></td>
            <td><input type="text" name="taikhoan"></td>
        </tr>
        <br>
        <tr>
            <td><label for="">mat Khau</label></td>
            <td><input type="text" name="matkhau"></td>
        </tr>
        <br>
        <tr>
            <td colspan="2"> <button type="submit" name="login">login</button></td>
        </tr>
        </table>
    </form>
</body>
<?php
    if(isset($_POST["login"])){
        $taikhoan = $_POST["taikhoan"];
        $matkhau = $_POST["matkhau"];
        if($taikhoan == "hailamdz" && $matkhau == "1234567"){
            $_SESSION["taikhoan"] = $taikhoan;

            header("location: index.php");
        }else{
            echo "<script> alert('ban da nhap sai tai khoan hoac mat khau') </script>";
        }
    }
?>
</html>