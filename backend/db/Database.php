<?php
    require_once '../config/config.php';
    
    class Database{
        private $conn;

        public function _construct(){
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if($this->conn->connect_error){
                this('Error de conexion'.this->conn->connect_error);
            }
        }

        public function getConnection(){
            return $this->conn;
        }
    }
?>