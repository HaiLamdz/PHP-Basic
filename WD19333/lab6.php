<?php 
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