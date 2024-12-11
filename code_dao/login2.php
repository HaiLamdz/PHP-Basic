<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "mydatabase";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy thông tin từ biểu mẫu đăng ký
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Mã hóa mật khẩu
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

// Thực hiện truy vấn để thêm người dùng vào cơ sở dữ liệu
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password_hashed', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
