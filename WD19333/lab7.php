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
     </table>
</body>
</html>

