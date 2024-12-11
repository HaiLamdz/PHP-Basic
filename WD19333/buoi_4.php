<?php
// vòng lặp 
    // dùng khi tôi muốn thực hiện 1 công việc ( đoạn code ) lập lại nhiều lần
    //hiển thị lần lượt các số từ 1 đến 10
    // echo "1 2 3 4 5 6 7 8 9 10";
    // vòng lặp for sử dụng khi đã biết trc điều kiện dừng
    // cú pháp 
    // for(giá trị khởi tạo; điều kiện ; bước nhảy){thực thi}
    // for ($i = 1; $i <= 10; $i++){
    //     echo $i         ;
    // }
    // vòng lập while
    // sử dunngj không cần bt trc điều kiện dừng
    // cấu trúc while(điều kiện){công việc thực thi}
    // $x = 1;
    // while($x <= 10){
    //     echo $x;
    //     $x++;
        
    // }
    // vòng lặp do while
    // thi hành câu lệnh trước , sau đó kiểm tra điều kiện 
    // nếu điều kiện vẫn đúng thì tiến hành lặp lại
    // cú pháp do {câu lệnh} while (điều kiện)
    // $a = 11;
    // do{
    //     echo $a;
    //     $a++;
    // }while($a <= 20);
    //bài 1: tính tổng các số từ 1 đến 100
    
    // $tong = 0;
    // for($a=1;$a<=100;$a++){
    //     echo $a;
    //     $tong += $a;
    //     echo "</br>";
        
    // }
    // echo $tong;
    // $b = 1;
    // $tong = 0;
    // while($b <= 100){
    //     $b++;
    //     $tong += $b;
    // } echo $tong;
    // $tong = 0;
    // $b = 1;
    // do(
    //     $b++;
    //     $tong += $b;
        
    // )while($b <= 100);
    //bài 2: in ra màn hình bảng cửu chương 9
    // bài 3: tìm các số nghuyên tố < 100
        // for($a = 2; $a <= 100; $a++){
        //     if(sqrt ==  0){
        //         echo "</br>";
        //         echo  $a . " là số ngto";
        //     }else{
        //         echo "</br>";
        //         echo  $a . " ko là số ngto";
        //     }
        // }
    // $nhan = 0;
    // for($a = 1; $a <= 10; $a++){
    //     $nhan = $a * 9;
    //     echo "</br>";
    //     echo "9 * " . $a . " = " . $nhan;
    // }

    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }
    
    echo "Các số nguyên tố nhỏ hơn 100 là: ";
    for ($i = 2; $i < 100; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
    
?>