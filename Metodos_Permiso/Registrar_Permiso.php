<?php

require '../Instancias/instancia_permiso.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos = json_decode(file_get_contents("php://input"), true);
        $respuesta = Permiso::RegistrarPermiso($datos["Nombre"], $datos["Descripcion"]);
        if($respuesta){
            echo json_encode(array('resultado' => $datos));
        }
        else{
            echo json_encode(array('resultado' => 'Datos no almacenados'));
        }
    }

?>