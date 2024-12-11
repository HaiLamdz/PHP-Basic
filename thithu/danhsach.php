<?php
    $Products = [
        [
            "id" => 1,
            "name" => "sản phẩm 1",
            "sku" => "SP01",
            "price" => 120,
            "cost" => 100
        ],
        [
            "id" => 2,
            "name" => "sản phẩm 2",
            "sku" => "SP02",
            "price" => 220,
            "cost" => 200
        ]
        ];
        session_start();
    if(isset($_SESSION["taikhoan"])){
        echo "chúc mừng " . $_SESSION["taikhoan"] . "đăng nhập thành công";
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
        <a href="logout.php">
            <button>đăng xuất</button>
        </a>
    </div>
    <div>
        <form action="" method="GET">
            <input type="text" name="search">
            <button name="keysearch">SEARCH</button>
        </form>
    </div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>name</td>
                    <td>sku</td>
                    <td>price</td>
                    <td>cost</td>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_GET["search"]) && isset($_GET["keysearch"])){
                    $search = $_GET["search"];
                    $ketqua = [];
                    foreach($Products as $Product){
                        // tìm kiếm tương đối
                        // if(
                        //     strpos($Product["name"], $search) !== FALSE ||
                        //     strpos($Product["sku"], $search) !== FALSE ||
                        //     strpos($Product["price"], $search) !== FALSE ||
                        //     strpos($Product["cost"], $search) !== FALSE 
                        // ){
                        //     array_push($ketqua, $Product);
                        // }
                        // tìm kiếm tuyệt đối
                            if(
                                $Product["name"] == $search ||
                                $Product["sku"] == $search ||
                                $Product["price"] == $search ||
                                $Product["cost"] == $search 
                            ){
                                array_push($ketqua, $Product);
                            }
                        
                    }
                    if(empty($ketqua)){
                        echo "<script> alert('không tinmg thấy sản phẩm') </script>";
                    }
                }
                foreach(!empty($ketqua) ? $ketqua : $Products as $key => $Product){ ?>
                    <tr>
                        <td><?php ++$key ?></td>
                        <td><?php echo $Product["id"] ?></td>
                        <td><?php echo  $Product["name"] ?></td>
                        <td><?php echo $Product["sku"] ?></td>
                        <td><?php echo $Product["price"] ?></td>
                        <td><?php echo $Product["cost"] ?></td>
                    </tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>