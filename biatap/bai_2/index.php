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
    <h1>
        <?php
        if (isset($_SESSION["taikhoan"])) {
            echo "Xin chào " . $_SESSION["taikhoan"] . " đăng nhập thành công";

        }else{
            header("location: index.php");
            exit;
        }
        ?>
    </h1>
    <div>
        <a href="logout.php ">
            <button>đăng xuất</button>
        </a>
    </div>
</body>

</html>