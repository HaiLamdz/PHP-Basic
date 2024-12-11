<?php
include "./includes/connect.php";

class ProductModel {
    public $conn;

    function __construct(){
        $this->conn = connectDB();
    }

    // viet phuong thuc
    // tra ve 1 mang gom 2 thanh phan: key la ten cua cot,
    // value la gia tri tuong ung trong cot
    function getAllProduct() {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>