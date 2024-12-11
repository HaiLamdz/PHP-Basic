<?php
      // cho 1 mảng các số nguyền gồm 10 phần tử 
    // hiện thị ra các phần tử có  giá trị lẻ theo 2 cách : for and foreach
    echo "bài 1";
    echo "<br>";
    $mang4 = [1,2,3,4,5,6,7,8,9,10];
    for($i = 0; $i < count($mang4); $i++){
        if($mang4[$i] % 2 != 0){
            echo "các phần tử lẻ bằng for là: " . $mang4[$i] . "<br> ";
        }
    } 
    echo "</br>";
    foreach($mang4 as $mang){
        if($mang % 2 != 0){
            echo "các phần tử lẻ foreach là: " . $mang . "<br> ";
        }
    }
    echo "</br>";  
    $tong = 0;
    echo "<br>";
    echo "bài 2";
    echo "<br>";
    // bài 2 : đếm và tính tổng các phần tử có giá trị chẵn trong mảng trên
    for($x = 0; $x < count($mang4); $x++){
        if($mang4[$x] % 2 == 0){
            echo "mảng chẵn for là  " . $mang4[$x] . "<br> ";
            $tong += $mang4[$x];
        }
       
    }
    echo "</br>";
    echo "tổng là: " . $tong;  
    echo "</br>";
    $tong2 = 0;
    foreach($mang4 as $mangChan){
        if($mangChan % 2 ==0){
            echo "mảng chẵn for là  " . $mangChan . "<br> ";
            $tong2 += $mangChan;
        }
    }
    echo "</br>";
    echo "tổng là: " . $tong2;
    echo "</br>";
    echo "bài 3";
    echo "<br>";
    // tìm giá trị lớn nhất trong mảng trên
    for($a = 0;$a < count($mang4); $a++){
        echo "giá trị lớn nhất bằng for là: " . max($mang4);
        break;
    }
    echo "</br>";
    $max = $mang4[0];
    foreach($mang4 as $maxgiatri){
        if($maxgiatri > $max){
            $max = $maxgiatri;
        }
            
    }
    echo "giá trị lớn nhất bằng foreach là: " . $max;
?>