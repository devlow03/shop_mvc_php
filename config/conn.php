<?php
class Config
{
    //dependency_injection
    public $conn;
    public function connectDataBase()
    {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "shop";
        
        $this->conn = mysqli_connect($host, $user, $pass, $db);
        mysqli_query($this->conn, "set names utf8");
        return $this->conn;
    }
}
