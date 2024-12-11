<?php
    
    // // kiểm tra xem một năm có phải năm nhuận hay không
    // echo "Bài 1: Kiểm tra xem một năm có phải năm nhuận hay không";
    // echo "</br>";
    // $nam = 2024;
    // if($nam % 4 == 0 && $nam % 100 != 0){
    //     echo "năm " . $nam . " là năm nhuận";
    // }else{
    //     echo "năm ". $nam. " không là năm nhuận";
    // }
    // echo "</br>";
    //     // cho 3 cạnh của tam giác kiểm tra xem đó là tam giác đều hay cân hay thường 
    // // duwqaj vào 3 cạnh của tam giác
    // echo "</br>";
    // echo " Bài 2: phân biệt tam giác qua 3 cạnh";
    // $canh1 = 5;
    // $canh2 = 6;
    // $canh3 = 7;
    // echo "</br>";
    // if($canh1 == $canh2 && $canh1 == $canh3){
    //     echo "tam giác có cạnh 1 =  " . $canh1 . " cạnh 2 = " . $canh2 . " cạnh 3 = " . $canh3 . " là tam giác đều";
    // }else if($canh1 == $canh2 || $canh1 == $canh3){
    //     echo "tam giác có cạnh 1 =  ". $canh1. " cạnh 2 = ". $canh2. " cạnh 3 = ". $canh3. " là tam giác cân"; 
    // }else{
    //     echo "tam giác có cạnh 1 =  ". $canh1. " cạnh 2 = ". $canh2. " cạnh 3 = ". $canh3. " là tam giác thường";
    // }
    // echo "</br>";
    // echo "</br>";
    // // cho 5 số tự nhiên kiemr tra xem số nào là lớn nhất 
    // echo "Bài 3: Cho 5 số tự nhiên kiemr tra xem số nào là lớn nhất";
    // echo "</br>";
    // $so1 = 3;
    // $so2 = 9;
    // $so3 = 6;
    // $so4 = 8;
    // $so5 = 11;
    // echo $so1;
    // echo "</br>";
    // echo $so2;
    // echo "</br>";
    // echo $so3;
    // echo "</br>";
    // echo $so4;
    // echo "</br>";
    // echo $so5;
    // echo "</br>";
    // if($so1 > $so2 && $so1 >$so3 && $so1 > $so4 && $so1 > $so5){
    //     echo "số ". $so1. " là số lớn nhất";
    // }else if($so2 > $so1 && $so2 >$so3 && $so2 > $so4 && $so2 > $so5){
    //     echo "số ". $so2 . " là số lớn nhất";    
    // }else if($so3 > $so1 && $so3 >$so2 && $so3 > $so4 && $so3 > $so5){
    //     echo "số ". $so3. " là số lớn nhất";
    // }else if($so4 > $so1 && $so4 >$so3 && $so4 > $so2 && $so4 > $so5){
    //     echo "số ". $so4. " là số lớn nhất";
    // }else{
    //     echo "số ". $so5. " là số lớn nhất";
    // }    
    // echo "</br>";
    // echo "</br>";
    // // xác định tháng dựa trên số từ 1 đến 12 ( sử dụng swtich case)
    // echo "Bài 4: Xác định tháng dựa trên số từ 1 đến 12 ( sử dụng swtich case)";
    // echo "</br>";
    // $thang = 4;
    // switch($thang){
    //     case 1:
    //         echo "Đây là tháng 1";
    //         break;
    //     case 2:
    //         echo "Đây là tháng 2";
    //         break;
    //     case 3:
    //         echo "Đây là tháng 3";
    //         break;
    //     case 4:
    //         echo "Đây là tháng 4";
    //         break;
    //     case 5:
    //         echo "Đây là tháng 5";
    //         break;
    //     case 6:
    //         echo "Đây là tháng 6";
    //         break;
    //     case 7:
    //         echo "Đây là tháng 7";
    //         break;
    //     case 8:
    //         echo "Đây là tháng 8";
    //         break;
    //     case 9:
    //         echo "Đây là tháng 9";
    //         break;
    //     case 10:
    //         echo "Đây là tháng 10";
    //         break;
    //     case 11:
    //         echo "Đây là tháng 11";
    //         break;
    //     case 12:
    //         echo "Đây là tháng 12";
    //         break;
    //     default:
    //         echo "Tháng không hợp lệ";
    //         break;
    // }
    // //cho các thông tin học tên , năm sinh , giới tính (nam là 0, nữ là 1)
    // //kiểm tra xem có đủ tuổi đi NVQS không
    // // hiển thị ông hoặc bà có hoặc không đủ tuổi đi NVQS
    // // ông bà dựa vào giới tính
    // // tuổi 0 năm hiện tại - năm sinh 
    // // năm hiện tại search "get current year in php"
    // //>=18 và <-27 thì đủ tuổi đi nvqs
    // echo "</br>";
    // echo "</br>";
    // echo "Bài 1_lab01:cho các thông tin học tên , năm sinh , giới tính (nam là 0, nữ là 1)
    // kiểm tra xem có đủ tuổi đi NVQS không
    // hiển thị ông hoặc bà có hoặc không đủ tuổi đi NVQS
    // ông bà dựa vào giới tính
    // tuổi 0 năm hiện tại - năm sinh 
    // năm hiện tại
    // >=18 và <-27 thì đủ tuổi đi nvqs: ";
    // echo "</br>";
    // $hoTen = "Vũ Hải Lam";
    // $namSinh = 2005;
    // $gioiTinh = 0;
    // $tuoi = date("Y") - $namSinh;
    // echo $hoTen;
    // echo "</br>";
    // echo $tuoi;
    // echo "</br>";
    // if($gioiTinh==0){
    //     if($tuoi >= 18 && $tuoi <= 27){
    //         echo "Giới tính nam";
    //         echo "</br>";
    //         echo "Ông có đủ tuổi đi nghĩa vụ quân sự";
    //     }else{
    //         echo "Giới tính nam";
    //         echo "</br>";
    //         echo "Ông không đủ tuổi đi nghĩa vụ quân sự";
    //     }
    // }else if($tuoi != 0 && $tuoi != 1){
    //     echo "tuoi khong hợp lệ";
    // }else{
    //     if($tuoiv >= 18 && $tuoi <= 27){
    //         echo "Giới tính nữ";
    //         echo "</br>";
    //         echo "bà có đủ tuổi đi nghĩa vụ quân sự";
    //     }else{
    //         echo "Giới tính nữ";
    //         echo "</br>";
    //         echo "bà không đủ tuổi đi nghĩa vụ quân sự";
    //     }
    // }
    // echo "</br>";
    // echo "</br>";
    // // tính phương trình bậc 2
    // echo " Bài 2_lab01: tính phương trình bậc 2: ";
    // // chenk a =0 quay về giải pt bậc 1
    // // check a != 0 
    // $soA = 2;
    // $soB = 7;
    // $soC = 4;
    // echo $soA . "x*2 + " . $soB . "x + " . $soC;
    // $denta = $soB**2 - 4 * $soA * $soC;
    // if($denta > 0 && $soA == 0){
    //     echo "</br>";
    //     $x1 = (-$soB + sqrt($denta)) / (2 * $soA);
    //     $x2 = (-$soB - sqrt($denta)) / (2 * $soA);
    //     echo "phương trình " .$soA . "x*2 + " . $soB . "x + " . $soC .  " có 2 nghiệm phân biệt: " ;
    //     echo "</br>";
    //     echo "x1 = " . $x1;
    //     echo "</br>";
    //     echo "x2 = " . $x2;
    // }else if($denta < 0 && $soA ==0){
    //     echo "</br>";
    //     echo "phương trình " .$soA . "x*2 + " . $soB . "x + " . $soC .  "  vô nghiệm" ;
    // }else{
    //     echo "</br>";
    //     $x = -$soB / 2*$soA;
    //     echo "phương trình " .$soA . "x*2 + " . $soB . "x + " . $soC .  "  có nghiệm kép x = " . $x;
    // }
    
    // Nhập vào chiều cao và cân nặng. Viết một chương trình JavaScript để tính
    // chỉ số BMI của người dùng. Công thức tính BMI là BMI = cân nặng (kg) / (chiều cao
    // (m) * chiều cao (m))
    // Bài 4: Viết một chương trình JavaScript để kiểm tra tình trạng hôn nhân của người
    // dùng. Người dùng sẽ nhập giới tính và tình trạng hôn nhân. Dựa vào thông tin này,
    // chương trình sẽ đưa ra thông báo(alert) tương ứng
    $canNang = 50 ;
    $chieuCao = 1.7;
    $BMI = $canNang / ($chieuCao * $chieuCao);
    echo "chỉ số BMI của bạn là: " . $BMI;


    // bài 4
    $gioitinh = "na ";
    $honnhan = "đã kết hôn";
    if($gioitinh == "nam"){
        if($honnhan == "đã kết hôn"){
            echo "</br>";
            echo "đã kết hôn";
        }else if($honnhan == "chưa kết hôn"){
            echo "</br>";
            echo "chưa kết hôn";
        }else{
            echo "</br>";
            echo "giới tính hoặc tình trạng hôn nhân không hợp lệ";
        }
    }else if($gioitinh == "nữ" ){
        if($honnhan == "đã kết hôn"){
            echo "</br>";
            echo "đã kết hôn";
        }else if($honnhan == "chưa kết hôn"){
            echo "</br>";
            echo "chưa kết hôn";
        }else{
            echo "</br>";
            echo "giới tính hoặc tình trạng hôn nhân không h��p lệ";
        }
    }else{
        echo "</br>";
        echo "giới tính hoặc tình trạng hôn nhân không hợp lệ";
    }
?> 