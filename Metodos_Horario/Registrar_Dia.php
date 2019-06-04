<?php

require '../Instancias/instancia_horario.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos = json_decode(file_get_contents("php://input"), true);
        $respuesta = Horario::RegistrarHorario($datos["Fecha_Inicio"], $datos["Fecha_Fin"], $datos["Turno"]);
        if($respuesta){
            echo json_encode(array('resultado' => $datos));
        }
        else{
            echo json_encode(array('resultado' => 'Datos no almacenados'));
        }
    }

?>