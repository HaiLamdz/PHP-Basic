<?php
    $Products = [
        [
            "id" => 1,
            "name" => "sản phẩm 1",
            "sku" => "SP01",
            "price" => 12000,
            "cost" => 10000,
        ],
        [
            "id" => 2,
            "name" => "sản phẩm 2",
            "sku" => "SP02",
            "price" => 16000,
            "cost" => 12000,
        ]
    ]
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
            <div>
                <input type="text" name="search">
                <button type="submit" name="keysearch">SEARCH</button>
            </div>
            <div>
                <input type="text" name="timkiem">
                <button type="submit" name="tukhoatimkiem">SEARCH</button>
            </div>
        </form>
    </div>
    <div>
    <h1>tìm kiếm tương đối</h1>
                <?php
                    if(isset($_GET["search"]) && isset($_GET["keysearch"])){
                        $search = $_GET["search"];
                        $ketqua = [];
                        foreach($Products as $key => $Product) {
                            if(strpos($Product["name"], $search) !== FALSE ||
                                strpos($Product["sku"], $search) !== FALSE ||
                                strpos($Product["price"], $search) !== FALSE ||
                                strpos($Product["cost"], $search) !== FALSE
                            ){
                                array_push($ketqua, $Product);
                            }
                        }
                    }
                    ?>
        <h1>tìm kiếm tuyệt đối</h1>
                    <?php 
                    if(isset($_GET["timkiem"]) && isset($_GET["tukhoatimkiem"])){
                        $timkiem = $_GET["timkiem"];
                        $ketqua2 = [];
                        foreach($Products as $Product){
                            if(
                                $Product["name"] == $timkiem ||
                                $Product["sku"] == $timkiem ||
                                $Product["price"] == $timkiem ||
                                $Product["cost"] == $timkiem 
                            ){
                                array_push($ketqua2, $Product);
                            }
                        }
                    }
                    ?>
        <table>
            <thead>
                <tr>
                    <td>STT</td>
                    <td>id</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Mã Sản Phẩm</td>
                    <td>Giá Nhập </td>
                    <td>Giá Bán</td>

                </tr>
            </thead>
            <tbody>
            <?php
                    foreach(!empty($ketqua2) ? $ketqua2 : $Products as $key => $Product){
                    ?>
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
            <button>logout</button>
        </a>
    </div>
</body>
</html>