<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>San pham</h1>
    <p class="wrapper"><a href=""><button>Thêm sản phẩm</button></a></p>

    <table border="1">
        <tr>
            <td>Id</td>
            <td>Ten sach</td>
            <td>hinh Anh</td>
            <td>Tac gia</td>
            <td>Nha xuat ban</td>
            <td>Ngay xuat ban</td>
            <td>Sua</td>
            <td>Xoa</td>
        </tr>
        <tr>
            <?php foreach($allProduct as $key =>$rows){?>

            <td><?= $rows['id'] ?></td>
            <td><?= $rows['title'] ?></td>
            <td> <img src="/assets/image/<?= $rows['cover_image']  ?>" alt=""></td>
            <td><?= $rows['author'] ?></td>
            <td><?= $rows['publisher'] ?></td>
            <td><?= $rows['publisher_date'] ?></td>
            <td><a href=""><button>Sua</button></a></td>
            <td><a href=""><button>Xoa</button></a></td>


            <?php } ?>  
        </tr>
    </table>


</body>

</html>