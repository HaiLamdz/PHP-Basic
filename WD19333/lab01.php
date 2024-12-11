<?php
    //cho các thông tin học tên , năm sinh , giới tính (nam là 0, nữ là 1)
    //kiểm tra xem có đủ tuổi đi NVQS không
    // hiển thị ông. bà có / khoogn đủ tuôi đi NVQS
    // ông bà dựa vào giới tính
    // tuổi 0 năm hiện tại - năm sinh 
    // năm hiện tại search "get current year in php"
    //>=18 và <-27 thì đủ tuổi đi nvqs
    echo "Bài 1";
    echo "<br>";
    $hoTen = "Vũ Hải Lam";
    $namSinh = 2005;
    $gioiTinh = 0;
    $tuoi = date("Y") - $namSinh;
    echo $hoTen;
    echo "</br>";
    echo $tuoi;
    echo "</br>";
    if($gioiTinh==0){
        if($tuoi >= 18 && $tuoi <= 27){
            echo "Giới tính nam";
            echo "</br>";
            echo "Ông có đủ tuổi đi nghĩa vụ quân sự";
        }else{
            echo "Giới tính nam";
            echo "</br>";
            echo "Ông không đủ tuổi đi nghĩa vụ quân sự";
        }
    }else if($tuoi != 0 && $tuoi != 1){
        echo "tuoi khong hợp lệ";
    }else{
        if($tuoiv >= 18 && $tuoi <= 27){
            echo "Giới tính nữ";
            echo "</br>";
            echo "bà có đủ tuổi đi nghĩa vụ quân sự";
        }else{
            echo "Giới tính nữ";
            echo "</br>";
            echo "bà không đủ tuổi đi nghĩa vụ quân sự";
        }
    }
    echo "</br>";
    echo "</br>";
    echo " Bài 2_lab01: tính phương trình bậc 2: ";
    // chenk a =0 quay về giải pt bậc 1
    // check a != 0 
    $soA = 2;
    $soB = 7;
    $soC = 4;
    echo $soA . "x*2 + " . $soB . "x + " . $soC;
    $denta = $soB**2 - 4 * $soA * $soC;
    if($denta > 0 && $soA == 0){
        echo "</br>";
        $x1 = (-$soB + sqrt($denta)) / (2 * $soA);
        $x2 = (-$soB - sqrt($denta)) / (2 * $soA);
        echo "phương trình " .$soA . "x*2 + " . $soB . "x + " . $soC .  " có 2 nghiệm phân biệt: " ;
        echo "</br>";
        echo "x1 = " . $x1;
        echo "</br>";
        echo "x2 = " . $x2;
    }else if($denta < 0 && $soA ==0){
        echo "</br>";
        echo "phương trình " .$soA . "x*2 + " . $soB . "x + " . $soC .  "  vô nghiệm" ;
    }else{
        echo "</br>";
        $x = -$soB / 2*$soA;
        echo "phương trình " .$soA . "x*2 + " . $soB . "x + " . $soC .  "  có nghiệm kép x = " . $x;
    }
    
?>