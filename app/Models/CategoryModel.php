<?php


class CategoryModel{
    public $conn;

    public function __construct()
    {
        $config = new Config();
        $this->conn = $config->connectDataBase();
    }

    public function getCategory(){
        
        $query = "SELECT * FROM `shop`.`category`";
        $response = mysqli_query($this->conn,$query);
        // echo "aaa";
        return $response;
    }

    public function getSubCategory($idCategory){
        $query = "SELECT * FROM `shop`.`subcategory` WHERE `id_category` = '$idCategory'";
        $response = mysqli_query($this->conn,$query);
        // echo "aaa";
        return $response;
    }

    
}



