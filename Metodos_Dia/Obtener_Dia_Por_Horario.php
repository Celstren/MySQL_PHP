<?php

require '../Instancias/instancia_dia.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    if (isset($_GET['Codigo'])){
        $identificador = $_GET['Codigo'];
        
        $respuesta = Dia::ObtenerDiasPorHorarioID($identificador);
        
        if ($respuesta){
            echo json_encode(array('resultado' => $respuesta));
        }
        else
            echo json_encode(array('resultado' => 'No existen dias relacionados al horario'));
    }
    else{
        echo json_encode(array('resultado' => 'Ingrese un identificador'));
    }
}

?>