<?php

require '../Instancias/instancia_dia.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
        $datos = json_decode(file_get_contents("php://input"), true);
        $respuesta = Dia::RegistrarDia($datos["Nombre"], $datos["Fecha_Actual"], $datos["Hora_Ingreso"], $datos["Hora_Salida"], $datos["Minutos_Tolerancia"], $datos["HorarioID"]);
        if($respuesta){
            echo json_encode(array('resultado' => $datos));
        }
        else{
            echo json_encode(array('resultado' => 'Datos no almacenados'));
        }
    }

?>