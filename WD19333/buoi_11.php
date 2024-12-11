<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    <?php
    if(isset($_GET["hoTen"]) && isset($_GET["Pass"])){
        $name = $_GET["hoTen"];
        $class = $_GET["Pass"];
    }
    ?>
    <h2><?php echo $name; ?></h2>
</body>
</html>