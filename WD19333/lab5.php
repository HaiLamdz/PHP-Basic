<?php
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
