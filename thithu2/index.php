<?php
    $users = [
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
        echo "chào mừng " . $_SESSION["taikhoan"] . " đăng nhập thành công";
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
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div>
        <h1>tìm kiếm tuyệt đối</h1>
        <form action="" method="GET">
        <div>
            <input type="text" name="search">
            <button type="submit" name="keysearch">SEARCH</button>
        </div>
        </form>
    </div>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Mã Sản Phẩm</td>
                    <td>Giá Bán</td>
                    <td>Giá Nhập</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_GET["search"]) && isset($_GET["keysearch"])){
                        $search = $_GET["search"];
                        $ketqua = [];
                        foreach($users as  $user){
                            // TÌM KIẾM TƯƠNG ĐỐI
                        //     if(
                        //         strpos($user["name"], $search) !== FALSE ||
                        //         strpos($user["sku"], $search) !== FALSE ||
                        //         strpos($user["price"], $search) !== FALSE ||
                        //         strpos($user["cost"], $search) !== FALSE 
                        //     ){
                        //         array_push($ketqua, $user);
                        //     }
                            // TIMG KIẾM TUYỆT ĐỐI
                            if(
                                $user["name"] == $search || 
                                $user["sku"] == $search || 
                                $user["price"] == $search || 
                                $user["cost"] == $search 
                            ){
                                array_push($ketqua, $user);
                            }
                        }                    
                        if(empty($ketqua)){
                            echo "<script> alert('ko tìm thấy sản phẩm') </script>";
                        }
                    }


                foreach(!empty($ketqua) ? $ketqua :  $users as $key => $user){ ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $user["id"] ?></td>
                    <td><?= $user["name"] ?></td>
                    <td><?= $user["sku"] ?></td>
                    <td><?= $user["price"] ?></td>
                    <td><?= $user["cost"] ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div>
        <a href="logout.php">
            <button type="submit" name="logout">logout</button>
        </a>
        <?php

        ?>
    </div>
</body>
</html>