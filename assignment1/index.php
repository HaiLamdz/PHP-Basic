<?php
include './controller/ProductController.php';
// xu li yêu cầu đầu tiên,

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

// tao doi tuong controller
$productController = new ProductController();
switch ($action) {
    case 'home':
        $productController->showAllProduct();
        break;
}
