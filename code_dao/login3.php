<?php
session_start();

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

// Lấy thông tin từ biểu mẫu đăng nhập
$username = $_POST['username'];
$password = $_POST['password'];

// Tìm người dùng trong cơ sở dữ liệu
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Đăng nhập thành công, tạo phiên làm việc
        $_SESSION['username'] = $username;
        echo "Login successful";
    } else {
        echo "Incorrect password";
    }
} else {
    echo "User not found";
}

$conn->close();
?>
