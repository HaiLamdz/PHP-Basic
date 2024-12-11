<?php 
    //  một số hmaf  dùng sẵn để thao tác với mảng 

    // count : đếm tổng số phần tử trong mảng
    // array_key: lấy toàn bộ các key trong mảng và đưa vào 1 mảng khác 
    // array-values: lấy ra toàn bọ các giá trị của phân tử trong mảng và đưa nó vào 1 mảng khác
    // unshif thêm 1 hoặc nhiều phần tử vào đầu mảng
    // $arr = [1,2,3,4,5,6,6,7,8,9];
    // print_r($arr);
    // echo "<br>";
    // // mảng đã thêm ?
    // array_unshift($arr, "HaiLam" , 205);
    // print_r($arr);
    // echo "<br>";
    // // array_push: thêm 1 hoặc nhiều phần tử vào cuối mảng
    // array_push($arr, "Lam", 2005);// ttrong đề thi
    // print_r($arr);
    // // array_pop() xóa phần tử cuối cùng trong mảng
    // echo "<br>";
    //  array_pop($arr);// ttrong đề thi
    // // array_shift xóa phần tử đầu tiên trong mảng
    // echo "<br>";
    // array_shift($arr);
    // // tìm kiếm phần tử trong mảng
    // // tìm kiếm 1 giá trị trong mảng nếu có thì sẽ trả về key(vị trí của phần tử đó trong mảng)
    // // chuyền vào 2 tham số(giá trị , tên mảng cần tìm), nếu không có thì không trả về gì cả
    // echo array_search(8, $arr);// ttrong đề thi
    // // nếu có trả về true , không có trả về false
    // var_dump(in_array(8, $arr)) ; // ttrong đề thi
    // is_array(tên mảng) kiểm tra xem có phải mảng hay không
    // nếu là mảng thì trả về true không phải trả về false
    // imlode(tên mảng):  đưa mảng thành một chuỗi 
    // explode("ký tự muốn cắt",tên mảng) đưa chuỗi thành mảng


?>
<!-- làm việc với form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="">
    <!-- action: chỉ định đích đến của dữ liêu khi người dùng ấn gửi 
        (nếu không điền thì dữ liệu xử lí ở trang hiện tại)
        method: xác định phương thức HTTP(cách thức để người dùng có thể giao tiếp dữ liệu với hệ thống) sử dụng (GET và POST)

    -->
    <!-- input dùng để hiển thị hoặc chuyền dữ liệu -->
    <input type="text" name="hoTen">
    <!-- name chính là key
    sử dụng để xác định tên trg dữ liệu khi gửi lên servver -->
    <button type="submit">SUBMIT</button>
    </form>
    <h2>Phương thức GET</h2>
    <!-- 
        dữ liệu được gửi lên thanh url, 0hiener thị trực tiếp giá trị trên url
        ưu điểm: truyền tải dữ liệu qua các trang rất nhanh
        nhược điểm: kém bảo mật
        nên thường được sử dụng qua các tác vụ hỉ
     -->
    <form action="buoi_11.php" method="GET">
        <label for="">Hạ Và Tên</label>
        <input type="text " name="HoTen">
        <label for="">Lớp</label>
        <input type="text" name="lop">
        <button type="submit">SUBMIT</button>
    </form>
    <?php 
        // dữ liệu đc gửi lên là một mảng liên hợp có key chính là name trong input

        // lấy ra toàn bộ dữ liệu
        var_dump($_GET);
        // lấy ra từng giá trị 
        echo "<br>";
        // bắt buộc phải kiểm tra trc khi thao tác với dữ liệu
        // nếu có dữ liệu thì trả về true không có thì trả về false
        if(isset($_GET["HoTen"])){
            echo $_GET["HoTen"] . "<br>";
        }
        if(isset($_GET["lop"])){
            echo $_GET["lop"];
        }
    ?>
    <h2>phuowgn thức post</h2>
    <!-- 
        dữ liệu sẽ được gửi ngầm đi
        ưu điểm; bảo mật cao hơn get 
        thường được dùng trong các tác vụ s=xử lí dữ liệu quan trọng
        (đăng hập đăng ký, thêm sửa dữ liệu)
     -->
        <form action="buoi_11.php" method="GET">
        <label for="">Hạ Và Tên</label>
        <input type="text " name="HoTen">
        <label for="">Lớp</label>
        <input type="text" name="lop">
        <button type="submit">SUBMIT</button>
    </form>
    <?php
    // lấy ra toàn bộ dữ liệu
    var_dump($_POST);
    // bắt buộc phải kiểm tra trc khi thao tác với dữ liệu
    if(isset($_POST["Hoten"])){
        echo $_POST["HoTen"];
    } 
     ?>
     <!-- 
        tao 1 form đăng nhập sử dụng phuwogn thức post
        nhập vào userName và Password
        bắn dữ liệu sang buổi 11
        nếu userName và password là ""thaydinhdz
        thì hiển thị ra màn hình "thầy định đẹp trai nhất fpoly"
      -->
      <h2>Bài Tập</h2>
      <form action="buoi_11.php" method="POSt">
        <label for="">userName</label>
        <input type="text" name="hoTen">
        <label for="">Password</label>
        <input type="text" name="Pass">
        <button type="submit">SUBMIT</button>
      </form>
      <?php
        if(isset($_POST["hoTen"]) && isset($_POST["Pass"])){
            echo $_POST["hoTen"];
            echo $_POTS["Pass"];
        }
      ?>

</body>
</html>