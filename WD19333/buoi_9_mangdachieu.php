<?php 
    // khai báo 1 mảng liên hợp các thoogn tin họ tên mã sinh viên lớp
    // sử dụng foreach của nyc
    // hiện thị ra màn hình
    // $infor = [
    //     "hoTen" => "Vũ Hải Lam",
    //     "maSV" => "Ph56233",
    //     "class" => "WD1933"
    // ];
    // foreach($infor as $introduct => $values){
    //     echo $introduct . " : " . $values . "<br>";
    // };
    // mảng đa chiều
    // là mảng chứa 1 hoặc nhiều mảng khác 
    // mảng tuần tự 2 chiều
    $arr_1 = [
        [1,2],
        [3,4],
        [5,6,7],
    ];
    // cách in ra giá trị 
    // cú pháp : $tenmang[Vị trí mảng cần truy cập][vị trí của phần tử] 
    //laasys số 1
    echo $arr_1[0][0];
    echo "<br>";
    echo $arr_1[2][0];
    echo "<br>";
    echo $arr_1[2][2];
    echo "<br>";
    // sử sụng foreach để in ra toàn bộ các số trong mảng $arr_1
    foreach ($arr_1 as $arr_2) {
        var_dump($arr_2);
        foreach($arr_2 as $arr_3){
            echo $arr_3 . "<br>";    
        }
    }
    // ví dụ : tính tổng giá trị các phần u=tử trong mảng trên
    $tong = 0;
    foreach ($arr_1 as $arr_2) {
        foreach($arr_2 as $arr_3){
            echo $arr_3 . " ";
            $tong += $arr_3;    
        }
    }echo "tổng mảng trên là: " . $tong;    
    // và mảng liên hợp
    // đây là mảng dữ liệu mad database trả ra có chúng ta
    $infor = [
        [
            "hoTen" => "Vũ Hải Lam",
            "maSV" => "Ph56233",
            "class" => "WD1933"
        ],
        [
            "hoTen" => "Phạm Minh Hiếu",
            "maSV" => "SOXO66",
            "class" => "WD1933"
        ],

    ];
    echo "<br>";
        // cú pháp: $tenmang[vị trí mảng cần truy cập][key]
    // cách in ra giá trị 
    echo $infor [0]["hoTen"];
    echo "<br>";
    // hiển thị ra thông tin của người thứ 2
    echo $infor [1]["hoTen"];
    echo "<br>";
    echo $infor [1]["maSV"];
    echo "<br>";
    echo $infor [1]["class"];
    echo "<br>";
    // hiện thị ra thông tin của cả hai người
    foreach($infor as $introduct2 ){
        foreach($introduct2 as $item){
            echo $item . "<br>";
        }
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
    <h1>Thông tin cá nhân</h1>
    <!-- hiển thị toàn bộ thông tin cá nhân của mảng trên ra table -->
    <table border="1">
        <thead>
            <th>STT</th>
            <th>Họ Và Tên</th>
            <th>Mã SInh Viên</th>
            <th>Class</th>
        </thead>
        <tbody>
            <?php
            $STT = 1;
            foreach($infor as $intro) :
            ?>
            <!-- công việc cần lặp -->
            <tr>
                <td><?= $STT++ ?></td>
                <td><?= $intro["hoTen"] ?></td>
                <td><?= $intro["maSV"]?></td>
                <td><?= $intro["class"] ?></td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
    <?php
    foreach($infor as $intro){
        var_dump($intro);
    }
    ?>
</body>
</html>