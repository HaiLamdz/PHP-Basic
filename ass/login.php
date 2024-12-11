<!DOCTYPE html>
<?php
session_start()
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            /* font-family: Arial, Helvetica, sans-serif; */
            background-image: url(https://img.thuthuat123.com/uploads/2019/07/16/hinh-nen-4k-windows-10_100821069.jpg);
        }

        div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            text-align: center;
            font-size: 60px;
        }

        input {
            width: 500px;
            padding: 10px;
            border: 1px solid #ccc;
            font-size: 20px;
            border-radius: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        button {
            margin-top: 50px;
            width: 200px;
            padding: 10px;
            border: 1px solid pink;
            background-color: green;
            color: white;
            font-size: 20px;
            margin-left: 30%;
            border-radius: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
        #foget{
            float: right;
            margin-top: 20px;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }
        #false{
            text-align: center;
        }
        
    </style>
</head>

<body>
    <?php
    $Users = [
        [
            'name' => "Hoàng Vinh Khoa",
            'date' => "19/05/2005",
            'email' => "khoa@gmail.com",
            'password' => "123456",
            'phone' => "0987654321"
        ],
        [
            'name' => "Vũ Hải Lam",
            'date' => "11/02/2005",
            'email' => "lam@gmail.com",
            'password' => "123256",
            'phone' => "0123456789"
        ]

    ]
    ?>
    <h1>Login here </h1>
    <div class="form">
        <form action="" method="POST">
            <!-- <label for="" id="lable"></label> -->
            <input type="text" name="email" value="kkkkkkkaaaa@gmail.com" required placeholder="nhập email của bạn...">
            <br> <br>
            <input type="password" name="password" value="123456" required placeholder="nhập mật khẩu của bạn...">
            <br>
            <p id="foget">foget passwork?</p>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>

    <?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];
        $check = false;

        foreach ($Users as $User) {
            if ($User['email'] == $username && $User['password'] == $password) {
                $check = true;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('Location: ass2.php');
            }
        }
        if (!$check) {
            ?>
            <p id="false" style='color: red;text-align:center;'>Sai thông tin đăng nhập!</p>;
            <?php
        }
    }
    ?>
</body>

</html>