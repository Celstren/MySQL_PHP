<?php

require '../Instancias/instancia_marca.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos = json_decode(file_get_contents("php://input"), true);
        $respuesta = Marca::RegistrarMarca($datos["Tipo_Marca"], $datos["Hora_Marca"], $datos["Respuesta"], $datos["Minutos_Diferencia"], $datos["Latitud"], $datos["Longitud"], $datos["UsuarioID"]);
        if($respuesta){
            echo json_encode(array('resultado' => $datos));
        }
        else{
            echo json_encode(array('resultado' => 'Datos no almacenados'));
        }
    }

?>