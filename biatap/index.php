<?php
$flys = [
    [
        "so_hieu_chuyen_di" => "VN001",
        "noi_di" => "Hà Nội",
        "noi_den" => "HCM",
        "tong_hanh_khach" => 100,
        "thoi_gian_di" => "2022-03-04 14:00:00",
        "thoi_gian_den" => "2022-03-04 16:00:00"
    ],
    [
        "so_hieu_chuyen_di" => "VN002",
        "noi_di" => "Đà Lạt",
        "noi_den" => "Quy Nhơn",
        "tong_hanh_khach" => 80,
        "thoi_gian_di" => "2022-03-04 10:00:00",
        "thoi_gian_den" => "2022-03-04 12:00:00"
    ],
    [
        "so_hieu_chuyen_di" => "VN003",
        "noi_di" => "Huế",
        "noi_den" => "Hải Phòng",
        "tong_hanh_khach" => 90,
        "thoi_gian_di" => "2022-03-04 07:00:00",
        "thoi_gian_den" => "2022-03-04 09:00:00"
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
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="">Số Hiệu Chuyến Bay</label></td>
                    <td><input type="text" name="soHieu" id="soHieu"></td> <br>
                </tr>
                <tr>
                    <td><label for="">Thời Gian Đi</label></td>
                    <td><input type="text" name="time_di" id="time_di"></td> <br>
                </tr>
                <tr>
                    <td><label for="">Thời Gian Đến</label></td>
                    <td><input type="text" name="time_den" id="time_den"></td> <br>
                </tr>
                <tr>
                    <td><button type="submit" name="search">Tìm Kiếm</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>

<table border="1">
    <thead>
        <tr>
            <td>số hiệu chuyến bay</td>
            <td>nơi đi</td>
            <td>nơi đến</td>
            <td>tong hành khách</td>
            <td>thời gian đi</td>
            <td>thời gian đến</td>
            <td>trạng thái</td>
        </tr>
    </thead>
    <tbody>
        <?php
        // if (isset($_POST["search"])) {
        //     $soHieu = $_POST["soHieu"];
        //     $time_di = strtotime($_POST["time_di"]);
        //     $time_den = strtotime($_POST["time_den"]);

            foreach ($flys as $fly) {


        ?>
                <tr>
                    <td><?= $fly["so_hieu_chuyen_di"] ?></td>
                    <td><?= $fly["noi_di"] ?></td>
                    <td><?= $fly["noi_den"] ?></td>
                    <td><?= $fly["tong_hanh_khach"] ?></td>
                    <td><?= $fly["thoi_gian_di"] ?></td>
                    <td><?= $fly["thoi_gian_den"] ?></td>
                    
                </tr>
    </tbody>
</table>
<?php
        }
        // } else {
        //     echo "mời nhập";
        // }
?>
<!-- $thoi_gian_di = strtotime($fly["thoi_gian_di"]);
                        $thoi_gian_den = strtotime($fly["thoi_gian_den"]);
                        if ($time_di < $thoi_gian_di && $time_den < $thoi_gian_di) {
                            echo "chưa bay";
                        } elseif ($time_di > $thoi_gian_di  && $time_den > $thoi_gian_di) {
                            echo "đã bay";
                        } else {
                            echo "đang bay";
                        }  -->