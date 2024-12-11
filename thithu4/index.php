<?php
    $Products = [
        [
            "id" => 1,
            "name" => "bánh phu thê",
            "sku" => "SP01",
            "price" => 120,
            "cost" => 100
        ],
        [
            "id" => 2,
            "name" => "kẹo sweet",
            "sku" => "SP02",
            "price" => 220,
            "cost" => 200
        ]
        ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>
        <?php 
            session_start();
            if(isset($_SESSION["taikhoan"])){
                echo "chúc mừng ". $_SESSION["taikhoan"] . " đăng nhập thành công";
            }else{
                header("location: login.php");
            }
        ?>
    </h1>
    <div>
        <h1>SEARCH tuyệt đối</h1>
    <form action="" method="GET">
    <input type="text" name="search">
        <button type="submit" name="keysearch">tìm kiếm tuoeng đối</button>
    </form>
    </div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Tên Sản phẩm</td>
                    <td>Mã sSản Phẩm</td>
                    <td>Giá bán</td>
                    <td>Giá nhập</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_GET["search"]) && isset($_GET["keysearch"])){
                        $search =$_GET["search"];
                        $ketqua = [];
                        foreach ($Products as $Product){
                            if(
                                strpos($Product["name"], $search) !== FALSE ||
                                strpos($Product["sku"], $search) !== FALSE ||
                                strpos($Product["price"], $search) !== FALSE ||
                                strpos($Product["cost"], $search) !== FALSE 
                            ){
                                array_push($ketqua, $Product);
                            }
                            // if(
                            //     $Product["name"] == $search || 
                            //     $Product["sku"] == $search || 
                            //     $Product["price"] == $search || 
                            //     $Product["cost"] == $search 
                            // ){
                            //     array_push($ketqua, $Product);
                            // }
                            
                        }
                        if(empty($ketqua)){
                            echo "<script> alert('không tìm thấy sản phẩm') </script>";
                        }
                    }
                   
                

                foreach(!empty($ketqua) ? $ketqua : $Products as $key => $Product) { ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $Product["id"] ?></td>
                    <td><?= $Product["name"] ?></td>
                    <td><?= $Product["sku"] ?></td>
                    <td><?= $Product["price"] ?></td>
                    <td><?= $Product["cost"] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div>
        <a href="logout.php">
            <button>đăng xuất</button>
        </a>
    </div>
</body>
</html>