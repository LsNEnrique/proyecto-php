<?php
    require_once '../serivces/UserService.php'

    class UserController{
        private $userService;

        public function _construct(){
            $db = (new Database())->getConnection();
            $this->userServices = new UserServices($db);
        }

        public function login(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];

                if(!empty($usuario) && !empty($password)){
                    $user = $this->UserService->login($usuarios, $password);
                    if($user) {
                        //redirigir a otra pagina
                        echo json_encode(array("success"=>true),
                        "message"=>"Inicio Satisfactorio");
                    }else{
                        echo json_encode(array("success"=>false),
                        "message"=>"Credenciales incorrectas");
                    }
                }else{
                    echo json_encode(array("success"=>false),
                    "message"=>"Faltan Datos");
                } else {
                    echo json_encode(array("success"=>false),
                    "message"=>"Tipo de peticion incorrecta");
                }
            }
        }
    }
?>