<?php
    // mảng liên hợp 
    // là mảng mà các vị trí của các phần tự được tự xác định
    // và nó đc gọi là các key 

    // cách khai báo mảng llieen hợp 
    // $tenmang = [key => giá trị];
    // các key viết liền không dấu 
    // các key chỉ tồn tại duy nhất 1 lần trong mảng 

    $array = [
        "toi" => "I ",
        "iu" => "Love ",
        "em" => "You"
    ]; 
    echo $array["toi"];
    echo $array["iu"];
    echo $array["em"];
    echo "</br>";

    // hiển thị giá trị 
    // $tenmang[key]; 
    // khai báo 1 mảng thông tin cá nhân gồm các thuộc tính 
    // họ tên ngày sinh namw sinh số điện thoại giới tính 
    // hiển thị toàn bộ thông tin ra màn hình
    $introduct = [
        "hoTen" => "Vũ Hải Lam",
        "ngaySinh" => "21/12"       ,
        "namSinh" => 2005,
        "SDT" => "0966701154",
        "gioiTinh" => "Nam"
    ];
    echo $introduct["hoTen"];
    echo "</br>";
    echo $introduct["ngaySinh"];
    echo "</br>";
    echo $introduct["namSinh"];
    echo "</br>";
    echo $introduct["SDT"];
    echo "</br>";
    echo $introduct["gioiTinh"];
    echo "</br>";
    // lấy ra cả key và giá trị
    foreach($introduct as $info => $item){
        echo "ở vị trí " . $info . " có giá trị là: " .$item . "</br> ";
    }
    // duyệt mảng bằng for
    $values = array_values($introduct);
    // duyệt mảng array và trả ra mảng mới gồm các giá trị của mảng 
    var_dump($values);
    echo '<br>';
    $key = array_keys($introduct);
    var_dump($key);
    // duyệt mảng introduct và trả ra 1 mảng mới gồm các kry của mảng introduct 
    // duyệt mảng introduct bằng vòng lặp for


    // khai báo mảng lieen hợp gồm điểm các môn đg học
    // tính trung bình cộng điểm các môn
    // tìm môn có điểm cao nhất 
    // tìm môn có điểm thấp nhất
    // hiện thị các môn lại theo thứ tự điểm giảm dần
    echo '<br>';
    // tính trung bình cộng điểm các môn 
    $diemSo = [
        "php1" => 10,
        "js1" => 9,
        "english" => 8,
    ];
    $sum = 0;
    foreach($diemSo as $diemSo2 => $values){
        echo $values . "<br>";
        $sum += $values;
        $soMon = count($diemSo);
    }
    $trungbinh = $sum / $soMon;
    echo $sum . '<br>';
    echo $trungbinh;
    // tìm môn có điểm cao nhất  
    $diemcaonhat = -1;
    // foreach($diemSo as $values){
    //     if($values > ){
    //         $max = max($);
    //         echo $max;
    //     }
    // }
    
    
?>