<?php

require '../Instancias/instancia_usuario.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos = json_decode(file_get_contents("php://input"), true);
        $respuesta = Usuario::RegistrarUsuario($datos["Nombre"], $datos["Estado"],$datos["Sector"],$datos["Contrasena"],$datos["Area"],$datos["Codigo_Empleado"],$datos["SedeID"],$datos["HorarioID"]);
        if($respuesta){
            echo json_encode(array('resultado' => $datos));
        }
        else{
            echo json_encode(array('resultado' => 'Datos no almacenados'));
        }
    }

?>