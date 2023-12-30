<?php

class ProductModel{
    public $conn;

    public function __construct()
    {
        $config = new Config();
        $this->conn = $config->connectDataBase();
    }

    public function getProduct(){
        
        $query = "SELECT * FROM `shop`.`product`";
        $response = mysqli_query($this->conn,$query);
        // echo "aaa";
        return $response;
    }

    public function getProductById($id){
        $query = "SELECT * FROM `shop`.`product` WHERE `id` = '$id'";
        $response = mysqli_query($this->conn,$query);
        // echo "aaa";
        return $response;
    }
}