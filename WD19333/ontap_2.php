<?php
    // function ham(){
    //     echo "đaây là hàm";
    // }
    // ham();
    // // function hamcothamso($thamso){
    // //     echo $thamso;
    // // }
    // // hamcothamso();
    // function hamthamsomacdinh($thamso = "lam"){
    //     echo $thamso;
    // }
    // hamthamsomacdinh();
    // echo "</br>";
    // $a = 10;
    // $b=20;
    // echo  $a + $b;

    // $c = 23;
    // $d = 18;
    // echo $c + $d;
    // function tinhtong($a, $b){
    //     echo $a + $b . "<br>";
    // }
    // tinhtong(10,20);
    // tinhtong(10,30);
    // tinhtong(10,40);
    // tinhtong(10,50);
    // function sum($a, $b){
    //     return $a + $b;
    // }
    // echo sum(12, 20);
// hàm ko có tham số
    // function sayhello(){
    //     echo "xin chào";
    // }
    // sayhello();

    function sayhello($name){
        echo "xin chào {$name}" . "<br>";
    }
    sayhello("lam");
    sayhello("nam");
    sayhello("ham");
    sayhello("cam");
    // tính tổng các số chẵn từ 1 đến n
    function checksochan($i){
        if($i % 2 ==0){
            return true;
        }return false;
    }
    echo checksochan(12);
    echo "<br>";
    function tongsochan($n){
        $tong = 0;
        for($i = 1; $i <= $n; $i++){
            if(checksochan($i))
            $tong += $i;
        }
        return $tong;
    }
    echo tongsochan(4);
    
    

?>