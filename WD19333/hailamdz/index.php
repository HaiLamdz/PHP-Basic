<?php
    // hiển thị ra danh sách người dùng trong database 
    require_once("connect.php");

    // viêt câu truy vẫn để hiển thao tác với csdl
    $sql_listUser = "SELECT * FROM user2";

    // chuẩn bị truy vấn
    $stmt_listUser = $pdo->prepare($sql_listUser);
    // chạy câu truy vấn
    $stmt_listUser->execute();
    // hiển thị lấy ra dữ liệu
    $listUser = $stmt_listUser->fetchAll(PDO::FETCH_ASSOC);
    // PDO::FETCH_ASSOC dùng để xóa các key thừa không có trong database 
    // var_dump($listUser);    
    // hieern thij listUser ra table 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">  
        <a href="create.php">
            <button>Thêm mới</button>
        </a>
        <tr>
            <thead>
                <td>ID</td>
                <td>Name</td>
                <td>email</td>
                <td>phone</td>
                <td>status</td>
                <td > action</td>
            </thead>
        </tr>
        
        <tbody>
        <?php
            foreach($listUser as $key => $introduct) {
                $trangThai = ($introduct["status"] == 0) ? 'hoạt động' : 'không hoạt động'
            ?>
            <tr >
                <td><?= $introduct["id"]?></td>
                <td><?= $introduct["name"] ?></td>
                <td><?= $introduct["email"] ?></td>
                <td><?= $introduct["phone"] ?></td>
                <td><?= $trangThai ?></td>
                <td>
                    <a href="delete.php?id_user=<?= $introduct["id"] ?>" onclick="return confirm('bạn có chắc chắn muốn xóa hay không')">
                    <button>Xóa</button>
                    </a>
                    <a href="update.php?id_user=<?= $introduct["id"] ?>">
                        <button>sửa</button>
                    </a>
                </td>
            </tr>
        </tbody>
            <?php
        }
        ?>
        
    </table>
    <!-- 
        bài tập về nhà
        tạo nút thêm, sau khi ấn vào nút thêm sẽ chuyển sang trang thêm người dùng(tạo đầy đủ các ô input của các trường)
        
     -->
</body>
</html>