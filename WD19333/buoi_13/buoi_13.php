<?php 
    // session và cookie

    // giống nhau 
    // đều là 1 vùng chứa dữ liệu tạ thời
    // dùng để luwuu trư dữ liệu

    // khác nhâu: 
    // session :
    // dữ liệu sẽ đc lưu trữ trên máy trủ
    // session sẽ tồn tại trong 1 phiên làm việc của người dùng
    // (phiên làm việc của người dùng là )
    // session sẽ bị xóa trình duyệt hoặc người dùng tự xóa nó 
    
    // cookie:
    // dữ liệu đc lưu trữ trên chính máy tính của người dungf
    // chỉ tồn tại trong 1 khoảng thời gian đc xác định
    // tự động xóa khi hết thời gian hoặc khi đóng trình duyệt

    // session:
    // bắt đầu 1 phiên làm việc với session 
    session_start();
    $uesername = "Vũ Hải Lam";
    $passwork = "Vuhailam2112";

    // thiết lập giá trị trên SESSION
    $_SESSION["ten_dang_nhap"] = $uesername;
    $_SESSION["mat_khau"] = $passwork;

    if(isset($_SESSION["ten_dang_nhap"]) && isset($_SESSION["mat_khau"])){
        echo $_SESSION["ten_dang_nhap"] ;
        echo "<br>";
        echo $_SESSION["mat_khau"];
    }
    echo "<br>";

    // xóa session
    // xóa giá trị của session 
    unset($_SESSION["ten_dang_nhap"]);
    // xòa bằng cách kết thúc 1 phiên làm việc
    session_destroy();
   
    // cookie
    $ho_ten = "Vũ Hải Anh";
    $class = "wd19333";

    // thiết lập giá trị cho cookie
    setcookie("name", $ho_ten, time() + 10);
    setcookie("class", $class, time() + 10);
    if(isset($_COOKIE["name"]) && $_COOKIE["class"]){
        echo $_COOKIE["name"];
        echo "<br>";
        echo $_COOKIE["class"];
    }

    // xóa cookie
    setcookie("name", $ho_ten, time() - 11);
    setcookie("class", $class, time() - 11);
    
?>