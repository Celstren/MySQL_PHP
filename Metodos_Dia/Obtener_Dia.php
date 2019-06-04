<?php

require '../Instancias/instancia_dia.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    if (isset($_GET['Codigo'])){
        $identificador = $_GET['Codigo'];
        
        $respuesta = Dia::ObtenerDiaPorID($identificador);
        
        if ($respuesta){
            echo json_encode(array('resultado' => $respuesta));
        }
        else
            echo json_encode(array('resultado' => 'El dia no existe'));
    }
    else{
        echo json_encode(array('resultado' => 'Ingrese un identificador'));
    }
}

?>