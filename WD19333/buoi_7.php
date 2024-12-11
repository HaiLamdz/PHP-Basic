<?php
    // // mảng trong là tập hopej các phần tử có hoặc không cùng kiểu dữ liệu
    // // phần tử bao gồm vị trí và giá trị
    // // trong mảng sẽ có 2 thành phần : vị trí và giá trị
    // // vị trí bắt đầu từ 0 > n - 1(n là tổng số phần tử trong mảng) 
    // // cách khai báo mảng trong php 
    // // cách 1:
    // $mang1 = array(1, 2, "lam", 2.5, true);
    // // cách khai báo cũ
    // // cách 2:
    // $mang2 = [3, 4, "Hải", 4.5, false];
    // // suer dụng cách này để khai báo mảng
    // // echo $mang1; 
    // // echo ko đc sử dụng để hiện thị mảng
    // // cách hiện ra thông tin cấu trúc của mảng
    // var_dump($mang2);
    // // hiển thị chi tiết cấu trúc của mảng thường dùng trong việc debug
    // echo "</br>";
    // print_r($mang2);
    // // chỉ hiển thị vị trí và giá trị 
    // // truy xuất giaad trị csyr 1 phần tử
    // // cú pháp tên mảng[vị trí] 
    // // truy xuất giá trị của 1 phần tử trong mảng
    // // cú pháp : $ten mảng[vị trí];
    // echo "</br>";
    // echo $mang1[2];
    // echo "</br>";
    // echo $mang2[3];
    // echo "</br>";
    // // mảng có 3 loại:
    // // loại 1: mảng rỗng: $arr = [];
    // // loại 2 : mảng tuần tự:
    // // mảng tuần tự là mảng mà vị trí ccacs phần tử đc xác định sẵn là các soos nguyên dương bắt đầu từ 0
    // $phone = ["apple", "samsung", "oppo", "xiaomi"];
    // // in ra màn hình tất các các giá trị của phần tử trong mảng phone 
    // print_r($phone);
    // echo "</br>";
    // echo $phone[0];
    // echo "</br>";
    // echo $phone[1];
    // echo "</br>";
    // echo $phone[2];
    // echo "</br>";
    // echo $phone[3];
    // echo "</br>";
    // // duyệt mảng phone bằng for
    // echo "duyệt mảng phone bằng for";
    // echo "</br>";
    // // dùng hàm count để đếm tổng số phần tử trong mảng
    // echo count($phone);
    // echo "</br>";   
    // for($i = 0; $i < count($phone);$i++){
    //     echo $phone[$i] . "</br>";
    // }
    // // duyệt mảng bằng foreach 
    // // foreach chuyền dngf để duyệt mảng trong php
    // // cú pháp :
    // // foreach($tên mảng cần duyệt as $key){công việc} 
    // foreach($phone as $key){
    //     echo $key . " ";
    // }
    // bài tập 
    // cho 1 mảng các số nguyền gồm 10 phần tử 
    // hiện thị ra các phần tử có  giá trị lẻ theo 2 cách : for and foreach
    $mang4 = [1,2,3,4,5,6,7,8,9,10];
    for($i = 0; $i < count($mang4); $i++){
        if($mang4[$i] % 2 != 0){
            echo $mang4[$i] . " ";
        }
    } 
    echo "</br>";
    foreach($mang4 as $mang){
        if($mang % 2 != 0){
            echo $mang . " ";
        }
    }
    echo "</br>";  
    $tong = 0;
    // bài 2 : đếm và tính tổng các phần tử có giá trị chẵn trong mảng trên
    for($x = 0; $x < count($mang4); $x++){
        if($mang4[$x] % 2 == 0){
            echo $mang4[$x] . " ";
            $tong += $mang4[$x];
        }
       
    }
    echo "</br>";
    echo $tong;  
    echo "</br>";
    $tong2 = 0;
    foreach($mang4 as $mangChan){
        if($mangChan % 2 ==0){
            echo $mangChan . " ";
            $tong2 += $mangChan;
        }
    }
    echo "</br>";
    echo $tong2;
    echo "</br>";
    // tìm giá trị lớn nhất trong mảng trên
    for($a = 0;$a < count($mang4); $a++){
        echo max($mang4);
        break;
    }
    echo "</br>";
    $max = $mang4[0];
    foreach($mang4 as $maxgiatri){
        if($maxgiatri > $max){
            $max = $maxgiatri;
        }
            
    }
    echo $max;
?>