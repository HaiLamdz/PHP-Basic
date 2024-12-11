<?php 
    require_once('connect.php');
    echo "<br>";

    $Products = [
        [
            "id" => 1,
            "name" => "sản Phẩm 1",
            "sku" => "SP01",
            "price" => 120,
            "cost" => 100
        ],
        [
            "id" => 2,
            "name" => "sản Phẩm 2",
            "sku" => "SP02",
            "price" => 220,
            "cost" => 200
        ]
        ];

    session_start();
    if(isset($_SESSION["taikhoan"])){
        echo "chuc mung " . $_SESSION["taikhoan"] . " dang nhap thanh cong";
    }else{
        header("location: login.php");
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
    <div>
        <form action="" method="GET">
            <input type="text" name="search">
            <button type="submit" name="keysearch">SEARCH</button>
        </form>
    </div>
    <div>
        <table border="1" style="border-collapse: collapse ;">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Tên sản phẩm</td>
                    <td>Mã sản phẩm</td>
                    <td>Giá bán</td>
                    <td>Giá Nhập</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_GET["search"]) && isset($_GET["keysearch"])){
                    $search = $_GET["search"];
                    $ketqua= [];
                    foreach ($Products as $Product){
                        // if(
                        //     strpos($Product["name"], $search) !== FALSE ||
                        //     strpos($Product["sku"], $search) !== FALSE ||
                        //     strpos($Product["price"], $search) !== FALSE ||
                        //     strpos($Product["cost"], $search) !== FALSE 
                        // ){
                        //     array_push($ketqua, $Product);
                        // }
                        if(
                            // timf kieems tuyet doi
                            $Product["name"] == $search ||
                            $Product["sku"] == $search ||
                            $Product["price"] == $search ||
                            $Product["cost"] == $search 
                        ){
                            array_push($ketqua, $Product);
                        }
                    }if(empty($ketqua)){
                        echo "<script> alert(' khong tim thay san pham') </script>" ;
                    }
                }
                foreach(!empty($ketqua) ? $ketqua :  $Products as $key => $Product){ ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $Product["id"] ?></td>
                    <td><?= $Product["name"] ?></td>
                    <td><?= $Product["sku"] ?></td>
                    <td><?= $Product["price"] ?></td>
                    <td><?= $Product["cost"] ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div>
        <a href="logout.php">
            <button>logout</button>
        </a>
    </div>
</body>
</html>