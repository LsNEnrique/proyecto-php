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

            $sql_insertar = "INSERT INTO usuarios(nombre, apaterno, amaterno, 
            direccion, telefono, correo, usuario, password) VALUES (null, '$nombre',
            '$apaterno','$direccion','$telefono','$correo', '$username', '$password')";

            if($this->db -> query($sql_insertar) === TRUE){
            return true;
            } else {
            return false
            }
        },

        public function login($usuario, $password){
            $sql_usuario = "SELECT * FROM usuarios WHERE
            usuario = '$usuario'";

            $result = $this->db->query($sql_usuario);
            if($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                if(password_verify($password, $user['password'])) {
                    return $user;
                }
            }
            return false;
        },

        public function obtenerTodosUsuarios() {
            $sql = "SELECT = FROM usuarios";
            $result = $this->db->query($sql);
            $users = array();

            if($result->num_rows>0){
                while($row = $reult->fetch_assoc()){
                    $users[] = $row;
                }
            }
            return $users;
        },

        public function actualizarUsuario($usuario) {
            $id = $usuarios->getId(); 
            $nombre = $usuario -> getNombre();
            $apaterno = $usuario -> getApaterno();
            $amaterno = $usuario -> getAmaterno();
            $direccion = $usuario -> getDireccion();
            $telefono = $usuario -> getTelefono();
            $correo = $usuario -> getCorreo();
            $username = $usuario -> getUsername();

            $sql_update = "UPDATE usuarios 
                SET nombre = '$nombre', 
                    apaterno = '$aparterno',
                    amaterno = '$amaterno',
                    direccion = '$direccion',
                    telefono = '$telefono',
                    correo = '$correo',
                    username = '$username'
                WHERE id='$id'";

            if($this->db->query($sql_update) === TRUE) {
                return true;
            } else {
                return false;
            }
        },

        public function borrarUsuario($id) {
            $sql_borrar = "DELETE FROM usuarios WHERE id='$id'";
            if($this->db->query($sql_borrar) === TRUE) {
                return true;
            } else {
                return false;
            }
        },

        public function obtenerUsuarioPorId($id) {
            $sql = "SELECT = FROM usuarios WHERE id=$id";
            $result = $this->db->query($sql);
            #$users = array();

            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }
            return null;
        },

        public function obtenerUsuarioPorCorreo($correo) {
            $sql = "SELECT = FROM usuarios WHERE id=$correo";
            $result = $this->db->query($sql);

            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }
            return null;
        }
    }
?>