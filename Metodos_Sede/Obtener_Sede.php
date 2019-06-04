<?php

require '../Instancias/instancia_sede.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    if (isset($_GET['Codigo'])){
        $identificador = $_GET['Codigo'];
        
        $respuesta = Sede::ObtenerSedePorID($identificador);
        
        if ($respuesta){
            echo json_encode(array('resultado' => $respuesta));
        }
        else
            echo json_encode(array('resultado' => 'La sede no existe'));
    }
    else{
        echo json_encode(array('resultado' => 'Ingrese un identificador'));
    }
}

?>