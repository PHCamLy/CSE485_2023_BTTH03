<?php

class DBConnection{
    private $conn=null;

    public function __construct(){
         // B1. Kết nối DB Server
         try {
            $this->conn = new PDO('mysql:host=localhost;dbname=hospital;port=3307', 'root','');
            // echo "Thanh công";
        } catch (PDOException $e) {
            echo "Thất baiij".$e->getMessage();
        }
         
    }

    public function getConnection(){
        return $this->conn;
    }


}