<?php

class CategoryController{
    public  $categoryModel;
    

    public function __construct()
    {
        $categoryModel = new CategoryModel();
        $this->categoryModel = $categoryModel;
    }

    public function getCategory(){
        $response = $this->categoryModel->getCategory();
        if(mysqli_num_rows($response)){
            $data = mysqli_fetch_all($response, MYSQLI_ASSOC);
    
        }
        // var_dump($data);
        return $data;
    }

    public function getSubCategory($idCategory){
        $response = $this->categoryModel->getSubCategory($idCategory);
        if(mysqli_num_rows($response)){
            $data = mysqli_fetch_all($response, MYSQLI_ASSOC);
    
        }
        // var_dump($data);
        return $data;
    }
}