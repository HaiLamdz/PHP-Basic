<?php
    //khai báo biến
    //bắt buộc biến trong php phải có dấu $
    $a = 5;
    echo $a;
    //cách nỗi chuỗi
    echo "số " . $a ." là số số lẻ "; 
    // có thể hiện thị nhiều giá trị bằng cách d=sử dụng dấu ,
    echo "</br>";
    $b = 6;
    echo $a , $b;

    // các kiểu dữ liệu
    //Kiểu số nguyên
    $soNguyen = 2005;
    //số thực
    $soThuc = 2.3;
    // kiểu boolean
    $boolean = true; // 2 giá trị true or false
    // kiểu null
    $myNull = null; // biến này trống
    // String
    $myString = "Vũ Hải Lam";
    echo "</br>";
    echo $myString;
    // ví dụ khai báo thông tin của 3 nyc gồm họ tên năm sinh chiều cao cân nặng
    // hiện thị ra màn hình mỗi nyc 1 dòng các thông  tin nagwn cách nhau = dấu-
    $namsinh = 2005;
    $hoTen = "Vũ Hải Lam";
    $chieucao = 1.68;
    $canNang = 50; 
    $string = " kí lô";
    echo "</br>";
    echo $namsinh . " - " . $hoTen . " - " . $chieucao . " - " . $canNang , $string;
    // NHẮC LẠI TOÁN TỬ
    // TOÁN TỬ SỐ HỌC:
    //+,-,*,/(CHIA LẤY PHẦN NGUYÊN), %(CHIA LẤY PHẦN DƯ), ** LŨY THỪA
    //TOÁN TỬ SO SÁNH
    // >, <, <=, >=, ==(SO SÁNH BẰNG), ===(SO SÁNH CẢ GIÁ TRỊ VÀ KIỂU DỮ LIỆU), !=(SO SÁNH KHÔNG BẰNG), !== KHÔNG BẰNG GIÁ TRỊ HOẶC KIỂU DỮ LIỆU
    // X<=> Y: NẾU GIÁ TRỊ CỦA X = Y THÌ TRẢ VỀ 0, NGƯỢC LẠI, NẾU X > GIÁ TRỊ Y THÌ TRẢ VỀ 1, NẾU GIÁ TRỊ Y > GIÁ TRỊ X THÌ TRẢ VỀ -1
    //<br> ( KHÁC)
    // TOÁN TỬ LOGIC: && VÀ ||
    //TOÁN TỬ GÁN: X = Y GÁN GIÁ TRỊ Y CHO X,//X += Y (X = X+Y) CỘNG THÊM Y CHO X,X -= Y (X = X-Y) TRỪ X ĐI Y GIÁ TRI , X*=Y NHÂN THÊM Y LẦN CHO X, X/=Y CHIA Y LẦN GIÁ TRỊ X, X%=Y CHIA LẤY PHẦN DƯ GIÁ TRỊ X
    //TOÁN TỬ TĂNG GIẢM
    echo "</br>";
    $x = 5; 
    $y = $x++;//trả về giá trị gốc trc khi nó thay đổi
    $z = ++$x;// thay đổi biến trước sau đó trả về giá trị
    echo $y;
    
    // câu điều kiện: 
    // if(điều kiện){
    //    câu lệch 1
    //}else{
    //    câu lệch 2
    //}
    //ví dụ cho 1 số nguuyeen kiểm tra xem số đố là chẵn hay lẻ
    echo "</br>";
    $so1 = 9;
    if($so1%2==0){
        echo " số ". $so1 . " là số chẵn";
    }else{
        echo " số ". $so1 . " là số lẻ";
    }
    echo "</br>";
    // if(điều kiện){
    //    câu lệch 1
    //}else if(điều kiện n){
    //    câu lệch 2
    //}else{
    //    câu lệnh n
    //}
    //tính phương trình bậc 1 ax + b = 0
    $soA = 4;
    $soB = 8;
    if($soA == 0 ){
        if( $soB == 0){
            echo "pt có nghiệm vô số nghiệm";
        }else{
            echo "pt vô nghiệm";
        }
    }else{
        if( $soB == 0){
            echo "pt có nghiệm x = 0";
        }else{
            $nghiem = -$soB/$soA;
            echo "pt có nghiệm " . $nghiem;
        }
    }
    
?>