<?php

require '../Instancias/instancia_sede.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos = json_decode(file_get_contents("php://input"), true);
        $respuesta = Sede::RegistrarSede($datos["Nombre"], $datos["Latitud"],$datos["Longitud"]);
        if($respuesta){
            echo json_encode(array('resultado' => $datos));
        }
        else{
            echo json_encode(array('resultado' => 'Datos no almacenados'));
        }
    }

?>