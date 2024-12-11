<?php 
 class  productModel{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllProduct(){
        $sql="SELECT * FROM books_sach ORDER BY id DESC";
        return $this->conn->query($sql);
    }
    

    
 }
?>