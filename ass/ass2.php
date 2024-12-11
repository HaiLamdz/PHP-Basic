<!DOCTYPE html>
<?php
session_start()
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    </script>
    <style>
        body{
            background-color: lightpink;
        }


        .table-logout a {
            text-decoration: none;
            color: white;
        }

        .table-logout {
            border: 1px solid blue;
            background-color: blue;
            width: 100px;
            text-align: center;
            line-height: 30px;
            border-radius: 5px;
            float: right;

        }
        .table-logout{
            background-color: red;
            color: white;
            font-size: 20px;
            border: 1px solid red;
            box-shadow: 10px 10px 30px 0px black;
        }
        .container{
            max-width: 80%;
            margin: 0 auto;
            
        }
        .table{
            /* border: 1px solid gray; */
            border-collapse: collapse;
            width: 100%;
            margin: auto 0;
            
        }
        tr, td{
            font-size: 20px;
            padding: 13px;
            
        }
        th{
            font-size: 25px;
            background-color: chartreuse ;
            padding: 13px;
        }
        .input{
            width: 200px;
            height: 25px;
        }
        .button{
            height: 30px;
        }
    </style>
</head>

<body>
    <?php
    $Products = [
        [
            "ma_sp" => "SP01",
            "ten_sp" => "Bánh Phu Thê",
            "soLuong_sp" => 0,
            "gia_sp" => "30000",
            "ngaynhap" => "12/01/2024",
            "trangThai_sp" => 0,
        ],
        [
            "ma_sp" => "SP02",
            "ten_sp" => "Bánh Oreo",
            "soLuong_sp" => 56,
            "gia_sp" => "15000",
            "ngaynhap" => "12/01/2024",
            "trangThai_sp" => 1,
        ],
        [
            "ma_sp" => "SP03",
            "ten_sp" => "Bánh Chocopie",
            "soLuong_sp" => 24,
            "gia_sp" => "30000",
            "ngaynhap" => "12/01/2024",
            "trangThai_sp" => 1,
        ]
    ];
    ?>
</body>
<div class="table-logout">
    <a href="logout.php">Đăng xuất</a>
</div>
<div class="container">
    <h1 class="header" >Danh sách thông tin sản phẩm</h1>
    <table class="table " border="1" style="text-align:center">
        <thead>
            <tr class="table-danger">
                <th>Mã Sản Phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng sản phẩm</th>
                <th>Ngày nhập</th>
                <th>Trạng thái của sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Products as $Product) { ?>
                <tr >
                    <td><?= $Product["ma_sp"] ?></td>
                    <td><?= $Product["ten_sp"] ?></td>
                    <td><?= $Product["gia_sp"] ?></td>
                    <td><?= $Product["soLuong_sp"] ?></td>
                    <td><?= $Product["ngaynhap"] ?></td>
                    <td><?php $trangthai = $Product["trangThai_sp"] == 0 ? "Hết hàng" : "Còn hàng";
                        echo $trangthai ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h1 class="header">Danh sách thông tin sản phẩm tìm kiếm tuyệt đối</h1>
    <form action="" method="POST" >
        <div >
            <div >
                <input type="text" class="input" placeholder="Search..." name="name">
                <button class="button" type="submit">Search</button>
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST["name"])) {
        $ten = $_POST["name"];
        $check = false;

    ?>
        <table class="table " border="1" style="text-align:center; margin-top:20px;">
            <thead>
                <tr class="table-danger">
                    <th>Mã Sản Phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Ngày nhập</th>
                    <th>Trạng thái của sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Products as $Product) {
                    if (strpos($Product["ma_sp"], $ten) !== false) {
                        $check = true; ?>
                        <tr>
                            <td><?= $Product["ma_sp"] ?></td>
                            <td><?= $Product["ten_sp"] ?></td>
                            <td><?= $Product["gia_sp"] ?></td>
                            <td><?= $Product["soLuong_sp"] ?></td>
                            <td><?= $Product["ngaynhap"] ?></td>
                            <td><?php $trangthai = $Product["trangThai_sp"] == 0 ? "Hết hàng" : "Còn hàng";
                                echo $trangthai ?></td>
                        </tr>
                    <?php }
                }
                if (!$check) { ?>
                    <tr>
                        <td colspan="6">Không tìm thấy sản phẩm tên "<?= $ten ?>"</td>
                    </tr>
            <?php
                }
            } ?>
            </tbody>
        </table>
        <h1 class="header">Danh sách thông tin sản phẩm tìm kiếm tương đối</h1>
        <form action="" method="post" >
            <div >
                <div >
                    <input type="text" class="input" placeholder="Search..." name="name1">
                    <button class="button" type="submit">Search</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST["name1"])) {
            $ten1 = $_POST["name1"];
            $checking = false;
            $ketqua = [];
            // $ketqua_tuongdoi = [];
            foreach ($Products as $Product) {
                if (strpos($Product["ma_sp"], $ten1) !== false) {
                    $ketqua[] = $Product;
                }
            }

        ?>  
            <table class="table " border="1" style="text-align:center; margin-top:20px;">
                <thead>
                    <tr class="table-danger">
                        <th>Mã Sản Phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Ngày nhập</th>
                        <th>Trạng thái của sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ketqua as $Product) { ?>
                        <tr>
                            <td><?= $Product["ma_sp"] ?></td>
                            <td><?= $Product["ten_sp"] ?></td>
                            <td><?= $Product["gia_sp"] ?></td>
                            <td><?= $Product["soLuong_sp"] ?></td>
                            <td><?= $Product["ngaynhap"] ?></td>
                            <td><?php $trangthai = $Product["trangThai_sp"] == 0 ? "Hết hàng" : "Còn hàng";
                                echo $trangthai ?></td>
                        </tr>
                    <?php }
                    if (empty($ketqua)) { ?>
                        <tr>
                            <td colspan="6">Không tìm thấy sản phẩm tên "<?= $ten1 ?>"</td>
                        </tr>
                <?php
                    }
                } ?>
                </tbody>
            </table>
</div>

</html>
