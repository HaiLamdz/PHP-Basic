<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    $Products = [
        [
            "ma_sp" => "SP01",
            "ten_sp" => "Bánh đậu xanh",
            "gia_sp" => "30000",
            "trangThai_sp" => 0,
        ],
        [
            "ma_sp" => "SP02",
            "ten_sp" => "Bánh Oreo",
            "gia_sp" => "15000",
            "trangThai_sp" => 1,
        ],
        [
            "ma_sp" => "SP03",
            "ten_sp" => "Bánh Chocopie",
            "gia_sp" => "30000",
            "trangThai_sp" => 1,
        ]
    ];
    $donggia = 30000;
    ?>
    <h2>Bảng sản phẩm</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Trạng thái của sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Products as $Product) { ?>
                <tr>
                    <td><?= $Product["ma_sp"] ?></td>
                    <td><?= $Product["ten_sp"] ?></td>
                    <td><?= $Product["gia_sp"] ?></td>
                    <td><?php $trangthai = $Product["trangThai_sp"] == 0 ? "Hết hàng" : "Còn hàng";
                        echo $trangthai ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h2>Bảng sản phẩm đồng giá 30000</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Trạng thái của sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Products as $Product) {
                if ($Product["gia_sp"] == $donggia) { ?>
                    <tr>
                        <td><?= $Product["ma_sp"] ?></td>
                        <td><?= $Product["ten_sp"] ?></td>
                        <td><?= $Product["gia_sp"] ?></td>
                        <td><?php $trangthai = $Product["trangThai_sp"] == 0 ? "Hết hàng" : "Còn hàng";
                            echo $trangthai ?></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</body>

</html>