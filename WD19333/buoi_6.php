<?php
    // $String = "Vu Hai Lam";
    // // hàm đếm số ký tự trong một chuỗi
    // echo strlen($String);// trả về dộ dài của một chuỗi
    // echo "</br>";
    // // hàm đếm tổng số từ trong chuỗi
    // echo str_word_count($String);
    // echo "</br>";
    // // hàm đảo ngược kí tự trong chuỗi 
    // echo strrev($String);
    // echo "</br>";
    // // hàm viết thường tất cả các ký tự trong chuỗi
    // echo strtolower($String);
    // echo "</br>";
    // // hàm viết hoa tất cả các ký tự
    // echo strtoupper($String);
    // echo "</br>";
    // // hàm cắt chuôi
    // // chuyền vào 3 tham sô 
    // // chuỗi cần cắt 
    // // vị trí bắt đầu cắt 
    // // số lượng ký tự muốn cắt
    // echo substr($String, 7, 10);
    // echo "</br> ";
    // echo substr($String, 3, 4);
    // echo "</br>";
    // echo substr($String, 0, 2);
    // echo "</br>";
    // // nếu không điền vị trí kết thúc thì nó sẽ cắt từ vị trí bắt đầu đến hết
    // // hàm thay thế chuỗi
    // // chuyền vào 3 tham sô 
    // // chuỗi cần thay thế
    // // chuỗi thay thế
    // // chuỗi
    // echo str_replace("Lam", "nam", $String);
    // // tìm vị trí của chuỗi con trong chuỗi 
    // // chuyền vaod chuỗi
    // // từ khóa tìm kiếm
    // echo "</br>";
    // echo strpos($String, "Hai");
    // giả sử tôi không biết đếm 
    // cho một chuỗi $string = "thầy định đẹp trai nhất fpoly";
    // cắt ra từ thầy định
    // cắt ra từ đẹp trai
    $string = "thay đinh dep trai nhat fpoly";
    // cắt ra từ thầy định
    $a = strpos($string, "thay dinh");
    echo substr($string, $a, strlen("thay dinh "));
    echo "</br>";
    $b = strpos($string, "dep trai");
    echo substr($string, $b, strlen(" dep trai"));
    echo "</br>";
    echo str_replace("dep trai", "xinh trai", $string);
?>