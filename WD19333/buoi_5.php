<?php
    // cho 2 số tự nhiên tính tổng hai số in ra màn hình
    // $a = 8;
    // $b = 10;
    // $tong = $a + $b;
    // echo $tong;
    // hàm trong php 
    // hàm là các khối code để thực hiện 1 công việc cụ thể nào đó có tính tái sử dụng
    //và chỉ thực thi khi đc gọi
    // cấu trúc 
    // function ten_ham(){
    //     khối code
    // }

    // // cách gọi hàm
    // ten_ham();
    // hàm trả về 
    // là hàm sẽ trả về 1 kết quả cụ thể nào đó (return)
    // hàm trả về có tham số
    // function TinhTong($a , $b) {
    //     // tham số đc chuyền vào giữa 2 ngoặc tròn 
    //     // ngăn cách nhau = dấu ,
    //     $tong = $a + $b;
    //     return $tong;
    // }

    // echo TinhTong(6, 7);
    // echo "</br>";
    // giá trị chuyền vào tham số sẽ đc gán theo vị trí
    //hàm trả về không có tham số
    function getRandomNunber() {
        $number = rand(1, 38);
        return $number;
    }
    echo getRandomNunber();
    echo "</br>";
    // hàm không trả về
    // cách nhận biết hàm ko trả về 1 kết quả cụ thể và ko có return
    // hàm ko trả về có tham số
    function sayhello($name){
        echo "xin chào " . $name;
    }
    sayhello("Vũ Hải Lam");
    // hàm không trả về ko có tham số
    function XinChao(){
        echo "Xin Chào Các Bạn";
    }
    XinChao();
    // bài tập
    // sử dụng hàm để làm bài tập sau 
    // lb5 
    // bài 1 cho 2 giá trị chiều dài chiều rộng tính chu vị và diện tích hình chữ nhật 
    // bài 2 : cho giá trị a và b giải pt bậc 1 ãx + b = 0 
    // bài 3 : cho 3 giá trị đáy lớn đáy bé chiều cao tính diện tích hình thang 
    echo "</br>";
    function chuvi($a, $b){
        $lam = ($a + $b) * 2;
        return $lam;
    }
    echo "chu vi là: " . chuvi(3, 4);
    echo "</br>";
    function dientich($c, $d){
        $hieu = $c * $d;
        return $hieu;
    }
    
    echo "diện tích là: " . dientich(3, 4);
    echo "</br>";
    function giaiPT($x, $y){
        if($x == 0 ){
            if( $y == 0){
                echo "pt có nghiệm vô số nghiệm";
            }else{
                echo "pt vô nghiệm";
            }
        }else{
            if( $y == 0){
                echo "pt có nghiệm x = 0";
            }else{
                $nghiem = -$y/$x;
                echo "pt có nghiệm " . $nghiem;
            }
        }
    }
    giaiPT(4, 8);
    echo "</br>";
    function Shinhthang($a, $b, $c){
        $hinhthang = 1/2 *$c * ($a + $b);
        return $hinhthang;
    }
    echo "diện tích hình thang là: " . Shinhthang(2, 3, 4);
    
?>