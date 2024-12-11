<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cửa hàng</title>
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
</head>

<body>
    <div class="box_first" >

        <ul style="margin-left: 280px;">
            <img class="img_background" src="./img/hailamstore.png" alt="">
            <li style="text-align: center;">Hỏi Đáp <br> Tư Vấn Trực Tuyến</li>
            <li style="text-align: center;">Tổng Đài <br> 0966701154 </li>
            <li style="text-align: center;">Giờ Làm Việc <br> 7:30-21:00</li>
            <li></li>
            <li></li>
            <div style="position: relative;  margin-left: 75px; margin-top: 75px;">
                <li class="button" style="float: left; "><a href="sing_in.html"><button style=" margin: 10px; background: #fff; border: none; outline: none; cursor: pointer; font-weight: 600; border-radius: 45px; width: 150px; height: 30px;">Đăng Nhập</button></a></li>
                <li class="button" style="float: left; "><a href=""><button style=" margin: 10px; background: #fff; border: none; outline: none; cursor: pointer; font-weight: 600; border-radius: 45px; width: 150px; height: 30px;">Đăng Ký</button></a></li>
            </div>
        </ul>
        <div class="form_search">
            <form action="" class="form" method="GET">
                <input class="input_search" type="text" name="keysearch" placeholder="tìm kiếm...">
                <button class="button_search" type="submit" name="search">SEARCH</button>

            </form>
        </div>
    </div>
    <br>
    <div class="nav">
        <ul>
            <li><a href="##">Cửa Hàng</a></li>
            <li><a target="_blank" href="iphone.php">iPhone</a></li>
            <li><a href="##">iPad</a></li>
            <li><a href="##">Mac</a></li>
            <li><a href="##">Watch</a></li>
        </ul>
    </div>
    <br>
    <div class="header">
        <div class="slide_header">
            <div class="headerimg">
                <img src="./img/img0.jpg" alt="">
            </div>
            <div class="headerimg">
                <img src="./img/img1.jpg" alt="">
            </div>
            <div class="headerimg">
                <img src="./img/img2.jpg" alt="">
            </div>
            <div class="headerimg">
                <img src="./img/img3.jpg" alt="">
            </div>
            <div class="headerimg">
                <img src="./img/img5.jpg" alt="">
            </div>
            <div class="headerimg">
                <img src="./img/img6.jpg" alt="">
            </div>
            <div class="headerimg">
                <img src="./img/img7.jpg" alt="">
            </div>
            <div class="headerimg">
                <img src="./img/img8.jpg" alt="">
            </div>
            <div class="content_header">
                <ul>
                    <li>
                        <p style="font-weight: 700; font-size: 20px;">Thủ Tục Trả Góp </p>Thủ tục đơn giản, <br> lấy máy ngay sau 10 phút
                    </li>
                    <li>
                        <p style="font-weight: 700; font-size: 20px;">Bảo Hành</p>Nhanh chóng, 1 đổi 1 trong <br> vòng 12 tháng
                    </li>
                    <li>
                        <p style="font-weight: 700; font-size: 20px;">Thay Lấy Ngay</p>Thay lấy ngay, <br> thoiwg gian thay chỉ 40-90 phút
                    </li>
                    <li>
                        <p style="font-weight: 700; font-size: 20px;">Linh Kiện Chính Hãng</p>Cam kết chất lượng, <br> linh kiện thay thế
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="hr-with-text">
        <hr>
        <span class="span_iphone">iphone</span>
        <hr>
    </div>
    <div class="iphone">
        <?php
        $iphones = [
            [
                "img" => "./iphone/iphoneX.jpg",
                "name" => "iPhone X 64GB",
                "price" => "11,300,000vnd"
            ],
            [
                "img" => "./iphone/iphoneX_128GB.jpg",
                "name" => "iPhone X 128GB (Cũ)",
                "price" => "11,500,000vnd"
            ],
            [
                "img" => "./iphone/iphoneXR_64GB.jpg",
                "name" => "iPhone XR 64GB (Cũ)",
                "price" => "11,000,000vnd"
            ],
            [
                "img" => "./iphone/iphoneXSMax_256GB.jpg",
                "name" => "iPhone XS Max 256GB",
                "price" => "12,400,000vnd"
            ],
            [
                "img" => "./iphone/iphoneX_64GB.jpg",
                "name" => "iPhone 11 Pro Max 64GB",
                "price" => "13,300,000vnd"
            ],
            [
                "img" => "./iphone/iphone11ProMax_256GB.jpg",
                "name" => "iPhone 11 ProMax 256GB",
                "price" => "13,400,000vnd"
            ],
            [
                "img" => "./iphone/iphone12_64GB.jpg",
                "name" => "iPhone 12 64GB",
                "price" => "13,300,000vnd"
            ],
            [
                "img" => "./iphone/iphone12ProMax_128GB.jpg",
                "name" => "iPhone 12 ProMax 128GB",
                "price" => "15,000,000vnd"
            ],
            [
                "img" => "./iphone/iphone6S_32GB.jpg",
                "name" => "iPhone 6S 32GB",
                "price" => "3,700,000vnd"
            ]
        ];

        $ipads = [
            [
                "img" => "./ipad/iPad10.2inch_WifiCellular128GB(2019).png",
                "name" => "Máy tính bảng iPad 10.2 inch 128GB (2019)",
                "price" => "15.990.000₫"
            ],
            [
                "img" => "./ipad/iPad10.22019_Wi-Fi32GB.png",
                "name" => "Apple iPad 10.2 2019 Wi-Fi 32GB Chính hãng",
                "price" => "13.990.000₫"
            ],
            [
                "img" => "./ipad/iPad10.22019_Wi-Fi128GB.png",
                "name" => "Apple iPad 10.2 2019 Wi-Fi 128GB Chính hãng",
                "price" => "10.000.000₫"
            ],
            [
                "img" => "./ipad/iPadMini7.9inch _Wifi64GB(2019).png",
                "name" => "Máy tính bảng iPad Mini 7.9 inch 64GB (2019)",
                "price" => "10.990.000₫"
            ],
            [
                "img" => "./ipad/iPadPro11inch_Wifi64GB(2018).png",
                "name" => "Máy tính bảng iPad Pro 11 inch 64GB (2018)",
                "price" => "21.990.000₫"
            ]
        ];
        ?>
        <!-- <div class="imgIphone"><img src="./img2/iphoneX.jpg" alt=""></div> -->
        <div style='display:flex; flex-wrap: wrap; margin-left: 60px;  ' class="iphone">
            <?php

            if (isset($_GET["keysearch"]) && isset($_GET["search"])) {
                $search = $_GET["keysearch"];
                $ketqua = [];
                foreach ($iphones as $iphone) {
                    if (
                        stripos($iphone["name"], $search) !== FALSE
                    ) {
                        array_push($ketqua, $iphone);
                    }
                }
            };
            foreach (!empty($ketqua) ? $ketqua : $iphones as $iphone) {

            ?>
                <table style="margin-top: 50px;">
                    <tr>
                        <td><img width="350px" src="<?= $iphone["img"] ?>" alt=""></td>
                    </tr>
                    <tr>
                        <td style='font-size: larger; font-weight: 900;' ' align=' center'><?= $iphone["name"] ?></td>
                    </tr>
                    <tr>
                        <td style='font-size: large; font-weight: 500;' align='center'><?= $iphone["price"] ?></td>
                    </tr>
                </table>
            <?php
            }
            ?>
        </div>
        <div style="margin-top: 60px;" class="hr-with-text">
            <hr>
            <span class="span_ipad">iPad</span>
            <hr>
        </div>
        <div style='display:flex; flex-wrap: wrap; margin-left: 80px; gap: 50px;' class="iphone">
            <?php

            if (isset($_GET["keysearch"]) && isset($_GET["search"])) {
                $search = $_GET["keysearch"];
                $ketqua2 = [];
                foreach ($ipads as $ipad) {
                    if (
                        stripos($ipad["name"], $search) !== FALSE
                    ) {
                        array_push($ketqua2, $ipad);
                    }
                }
            };
            foreach (!empty($ketqua2) ? $ketqua2 : $ipads as $ipad) {

            ?>
                <table style="margin-top: 50px;">
                    <tr>
                        <td><img src="<?= $ipad["img"] ?>" alt=""></td>
                    </tr>
                    <tr>
                        <td style='font-size: larger; font-weight: 900;  ' align='center'><?= $ipad["name"] ?></td>
                    </tr>
                    <tr>
                        <td style='font-size: large; font-weight: 500;' align='center'><?= $ipad["price"] ?></td>
                    </tr>
                </table>
            <?php
            }
            ?>
        </div>
    </div>

</body>
<script src="index.js"></script>

</html>