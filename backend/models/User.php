<?php
    class User(){
        private $id;
        private $nombre;
        private $apaterno;
        private $amaterno;
        private $direccion;
        private $telefono;
        private $correo;
        private $password;

        //Creacion del Constructor de la clase
        public function _construct($nombre, $apaterno, $amaterno, $direccion, $telefono, $correo, $password){
            $this->nombre->$nombre;
            $this->apaterno->$apaterno;
            $this->amaterno->$amaterno;
            $this->direccion->$direccion;
            $this->telefono->$telefono;
            $this->correo->$correo;
            $this->password->$password;
        }

        public function getId(){
            return $this->id;
        }

        public function setId(){
            $this -> id ->$id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre(){
            $this -> nombre ->$nombre;
        }

        public function getApaterno(){
            return $this->apaterno;
        }

        public function setApaterno(){
            $this -> apaterno ->$apaterno;
        }

        public function getAmaterno(){
            return $this->amaterno;
        }

        public function setAmaterno(){
            $this -> amaterno ->$amaterno;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function setDireccion(){
            $this -> direccion ->$direccion;
        }
        
        public function getTelefono(){
            return $this->telefono;
        }

        public function setTelefono(){
            $this -> telefono ->$telefono;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo(){
            $this -> correo ->$correo;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword(){
            $this -> password ->$password;
        }
    }
?>