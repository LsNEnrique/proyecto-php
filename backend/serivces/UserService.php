<?php
    require once '../models/User.php'
    require once '../db/Database.php'
    require once '../interfaces/UserInterace.php'

    class UserService implements UserInterface {
        private $db;

        public function _construct(db){
            $this->db->$db;
        }

        public function registrarUsuario($usuario){
            $nombre = $usuario -> getNombre();
            $apaterno = $usuario -> getApaterno();
            $amaterno = $usuario -> getAmaterno();
            $direccion = $usuario -> getDireccion();
            $telefono = $usuario -> getTelefono();
            $correo = $usuario -> getCorreo();
            $username = $usuario -> getUsername();
            $password = password_hash($usuario->getPassword(), PASSWORD_DEFAULT);

            $sql_insertar = "INSERT INTO usuario(nombre, apaterno, amaterno, 
            direccion, telefono, correo, usuario, password) VALUES (null, '$nombre',
            '$apaterno','$direccion','$telefono','$correo', '$username', '$password')";

        if($this->db -> query($sql_insertar)===TRUE){
            return true;
        } else {
            return false
        }
        }
    }
?>