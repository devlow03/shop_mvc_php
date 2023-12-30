<?php
class ProductController{
    public  $productModel;
    

    public function __construct()
    {
        $productModel = new ProductModel();
        $this->productModel = $productModel;
    }

    public function getProduct(){
        $response = $this->productModel->getProduct();
        if(mysqli_num_rows($response)){
            $data = mysqli_fetch_all($response, MYSQLI_ASSOC);
    
        }
        // var_dump($data);
        return $data;
    }

    public function getProductById($id){
        $response = $this->productModel->getProductById($id);
        if(mysqli_num_rows($response)){
            $data = mysqli_fetch_all($response, MYSQLI_ASSOC);
    
        }
        // var_dump($data);
        return $data;
    }
}