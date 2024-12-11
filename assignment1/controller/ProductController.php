<?php
include './model/ProductModel.php';

class ProductController {
    public $productModel;

    function __construct() {
        $this->productModel = new ProductModel();
    }

    // phuong thuc tra ve danh sach san pham
    function showAllProduct() {
        $products = $this->productModel->getAllProduct();

        // load view
        include "./view/home.php";
    }
}


?>