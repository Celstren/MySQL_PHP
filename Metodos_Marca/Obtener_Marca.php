<?php

require '../Instancias/instancia_marca.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    if (isset($_GET['Codigo'])){
        $identificador = $_GET['Codigo'];
        
        $respuesta = Marca::ObtenerMarcaPorID($identificador);
        
        if ($respuesta){
            echo json_encode(array('resultado' => $respuesta));
        }
        else
            echo json_encode(array('resultado' => 'La marca no existe'));
    }
    else{
        echo json_encode(array('resultado' => 'Ingrese un identificador'));
    }
}

?>