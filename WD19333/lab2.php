<?php
    // bài 1 cho 2 giá trị chiều dài chiều rộng tính chu vị và diện tích hình chữ nhật 
    // bài 2 : cho giá trị a và b giải pt bậc 1 ãx + b = 0 
    // bài 3 : cho 3 giá trị đáy lớn đáy bé chiều cao tính diện tích hình thang 
    echo "bài 1";
    echo "</br>";
    function chuvi($a, $b){
        $lam = ($a + $b) * 2;
        return $lam;
    }
    echo "chu vi hcn là: " . chuvi(3, 4);
    echo "</br>";
    function dientich($c, $d){
        $hieu = $c * $d;
        return $hieu;
    }
    
    echo "diện tích là hcn : " . dientich(3, 4);
    echo "</br>";
    echo "bài 2";
    echo "<br>";
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
    echo "bài 3";
    echo "<br>";
    function Shinhthang($a, $b, $c){
        $hinhthang = 1/2 *$c * ($a + $b);
        return $hinhthang;
    }
    echo "diện tích hình thang là: " . Shinhthang(2, 3, 4);
?>