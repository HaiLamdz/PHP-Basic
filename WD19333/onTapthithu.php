<?php
    $information = [
        [
            "hoTen" => "Vũ Hải Lam",
            "namSinh" => 2005,
            "diemTB" => 9 
        ],
        [
            "hoTen" => "Phạm Minh Hiếu",
            "namSinh" => 2007,
            "diemTB" => 4
        ],
        [
            "hoTen" => "Phạm Minh Hải",
            "namSinh" => 2003,
            "diemTB" => 5
        ]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        tạo 1 mảng thông tin sinh viên gồm
        họ tên năm sinnh, điểm tb, 
        hiển thị toàn bộ thông tin ra table dưới dạng html
        tạo 1 cột trạng thái ở cuối bảng hiển thị 
        nếu điểm tb < 5 hiển thị tạch
        >= 5 hiển thị qua môn
        tạo 1 cột tuổi ở cuối bảng 
        thực hiện tính tuổi và hiển thị ra 
        nếu < 18 thì màu nền là màu đỏ
        nếu >= 18 thì màu nền là màu xanh lá
        khi có 1 điều kiện ta nên sử dụng toán tử ba ngôi
     -->
     <h1>INFORMAION STUDENT</h1>
     <p>FullName: Vũ Hải Lam <br> maSV: PH56233</p>

     <table border="1">
        <thead>
            <td>STT</td>
            <td>Họ Tên</td>
            <td>Năm Sinh</td>
            <td>Điểm TB</td>
            <td>Trạng Thái</td>
            <td>Tuổi</td>
        </thead>
        <tbody>

        <?php

            foreach($information as $key => $introduct) {
                $age = 2024 - $introduct["namSinh"]; 
                $tinhtrang = ($introduct["diemTB"] < 5) ? "toạch" : "Pass môn";
                $background = ($age < 18) ? "red" : "green"; 
            ?>
            <tr >
                <td><?= $key + 1 ?></td>
                <td><?= $introduct["hoTen"] ?></td>
                <td><?= $introduct["namSinh"] ?></td>
                <td><?= $introduct["diemTB"] ?></td>
                <td><?= $tinhtrang ?></td>
                <td style="background-color: <?= $background ?>;"><?= $age ?></td>
            </tr>
        <?php
            }
        ?>
        <?php
        ?>
        </tbody>

     </table>\
     <h2>Search tuyệt đối</h2>
     <form action="" method="GET">
            <label for="">search tuyệt đối: </label>
            <input type="text" name="tuyetDoi">

            <button type="submit">SUBMIT</button>
     </form>
     <?php
     // kiểm tra xem ng dùng có điền giá trị hay ko
        $keyTuyetDoi = isset($_GET["tuyetDoi"]) ? $_GET["tuyetDoi"] : " ";
        // tạo một mảng để chứa dữ liệu sau khi tìm kiếm
        $serch = [];    
        // tìm kiếm tuyệt đối 
        foreach($information as $introduct){
        if($introduct["hoTen"] == $keyTuyetDoi || $introduct["namSinh"] == $keyTuyetDoi || $introduct["diemTB"] == $keyTuyetDoi);
        // thêm những sv có thông tin tìm kiếm vào 1 mảng
            array_push($serch, $introduct);
        }

        // var_dump($serch); 
     ?>
             <?php 
            // hàm isset
            // trả về true nếu biến tồn tại và có giá trị khác nulll
            // thường dùng để kiểm tra mảng 
            // empty
            // trả về true nếu biến ko tồn tại hoặc có giá trị rỗng
            // kiểm tra 1 giá trị của biến
            if(!empty($serch)){
                // nếu mảng serch ko rỗng thì chạy vào đây
                ?>
            <table border="1">
                <thead>
                    <td>STT</td>
                    <td>Họ Tên</td>
                    <td>Năm Sinh</td>
                    <td>Điểm TB</td>
                    <td>Trạng Thái</td>
                    <td>Tuổi</td>
                </thead>
            <tbody>

            <?php

                foreach($serch as $key => $introduct) {
                    $age = 2024 - $introduct["namSinh"]; 
                    $tinhtrang = ($introduct["diemTB"] < 5) ? "toạch" : "Pass môn";
                    $background = ($age < 18) ? "red" : "green"; 
                ?>
                <tr >
                    <td><?= $key + 1 ?></td>
                    <td><?= $introduct["hoTen"] ?></td>
                    <td><?= $introduct["namSinh"] ?></td>
                    <td><?= $introduct["diemTB"] ?></td>
                    <td><?= $tinhtrang ?></td>
                    <td style="background-color: <?= $background ?>;"><?= $age ?></td>
                </tr>
            <?php
                }
            ?>
                    <?php
                }
            ?>
            <h2>search tương đối</h2>
            <form action="" method="GET">
                <label for="">search tương đối: </label>
                <input type="text" name="tuongDoi">

                <button type="submit">SUBMIT</button>
            </form>
            <?php
                // strpos(): tìm kiếm chuỗi con nằm trong 1 chuoix khác
                // chuyền vào 2 giá trị
                // strpos(chuỗi mẹ, chuỗi con muốn tìm kiếm);
                // nếu có thì trả về vị trí đầu tieen của chuỗi con trg chuôi mẹ
                // nếu không có thì trả về false

                // lấy ra giá trị từ form nhaapj vào
                $keytuogndoi = isset($_GET["tuongdoi"]) ? $_GET["tuongdoi"] : " ";
                $search = [];
                foreach($information as $introduct){
                    // nếu có gias trị thỏa mãn thì khác false
                    if(strpos($introduct["hoTen"], $keytuogndoi ) !== false || strpos($introduct["namSinh"], $keytuogndoi ) !== false || strpos($introduct["diemTB"], $keytuogndoi ) !== false){
                        array_push($search, $introduct);
                    }
                }
                if(!empty($search)){
                    ?>
                    <table border="1">
        <thead>
            <td>STT</td>
            <td>Họ Tên</td>
            <td>Năm Sinh</td>
            <td>Điểm TB</td>
            <td>Trạng Thái</td>
            <td>Tuổi</td>
        </thead>
        <tbody>

        <?php

            foreach($serch as $key => $introduct) {
                $age = 2024 - $introduct["namSinh"]; 
                $tinhtrang = ($introduct["diemTB"] < 5) ? "toạch" : "Pass môn";
                $background = ($age < 18) ? "red" : "green"; 
            ?>
            <tr >
                <td><?= $key + 1 ?></td>
                <td><?= $introduct["hoTen"] ?></td>
                <td><?= $introduct["namSinh"] ?></td>
                <td><?= $introduct["diemTB"] ?></td>
                <td><?= $tinhtrang ?></td>
                <td style="background-color: <?= $background ?>;"><?= $age ?></td>
            </tr>
        <?php
            }
        ?>
        <?php
        ?>
        </tbody>

     </table>
                    <?php
                }
            ?>
</body>
</html>

