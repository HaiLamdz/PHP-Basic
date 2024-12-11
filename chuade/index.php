<?php
    $Products= [
        [
            "id" => 1,
            "name" => "sp 1",
            "sku" => "SP01",
            "giaban" => 12000,
            "gianhap" => 10000
        ],
        [
            "id" => 2,
            "name" => "sp 2",
            "sku" => "SP02",
            "giaban" => 12000,
            "gianhap" => 10000
        ]
        ];

        // câu đăng nhập
        session_start();
        if(isset($SESSION["username"])){
            echo "xin chào " . $SESSION["username"] . " đăng nhập thành congp";

        }
        // else{
        //     header("location: login.php");
        // }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách Sản Phẩm</h1>
        <a href="logout.php"> đăng xuất</a>
    <form action="" method="GET">
        <input type="text" name="keysearch">
        <button type="submit" name="search">SEARCH</button>
    </form>
        <table>
            <thead>
                <th>stt</th>
                <th>id</th>
                <th>name</th>
                <th>sku</th>
                <th>giaban</th>
                <th>gianhap</th>
            </thead>
            <tbody>
                <?php
                if(isset($_GET["search"]) && isset($_GET["keysearch"])){
                    $keysearch = $_GET["keysearch"];
                    $ketqua = [];
                    foreach($Products as $Product){
                        // tìm kiến tuyệt đối
                        // if(
                        //     $Proudct["name"] == $keysearch ||
                        //     $Product["sku"] == $keysearch ||
                        //     $Product["giaban"] == $keysearch ||
                        //     $Product["gianhap"] == $keysearch 

                        //     ){
                        //         array_push($ketqua, $Product);
                        // }
                        // hết timg kiếm tuyệt đối
                        if( 
                            // strpos(): tìm kiếm 1 chuooic on trong chuỗi mẹ 
                            // nếu có trả về vị trí của ký tự đầu tiên
                            // ngược lại nếu không có thù trả về false
                            strpos($Product["name"], $keysearch) !== FALSE || 
                            strpos($Product["sku"], $keysearch) !== FALSE || 
                            strpos($Product["giaban"], $keysearch) !== FALSE || 
                            strpos($Product["gianhap"], $keysearch) !== FALSE 
                        ){
                            array_push($ketqua, $Product);
                        }

                    }
                    if(empty($ketqua)){
                        echo "<script> alert('khoogn có sản phẩm nào') </script>";
                    }
                }
                foreach (!empty($ketqua) ? $ketqua : $Products as $key => $Product) {
                    
                    
                    
                    ?>
                    <tr>
                        <td> <?= ++$key ?></td>
                        <td><?= $Product["id"] ?></td>
                        <td><?=$Product["name"] ?></td>
                        <td><?= $Product["sku"] ?></td>
                        <td><?= $Product["giaban"] ?></td>
                        <td><?= $Product["gianhap"] ?></td>

                    </tr>
                <?php }?>
            </tbody>
        </table>

</body>
</html>