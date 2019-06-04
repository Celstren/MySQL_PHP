<?php
    require '../Instancias/instancia_marca.php';
    
    if (isset($_GET['Codigo'])){
        $identificador = $_GET['Codigo'];
        
        $respuesta = Marca::ObtenerMarcasPorUsuarioID($identificador);
        
        if ($respuesta){
            echo json_encode(array('resultado' => $respuesta));
        }
        else
            echo json_encode(array('resultado' => 'No existe marca relacionada al usuario ingresado'));
    }
    else{
        echo json_encode(array('resultado' => 'Ingrese un identificador'));
    }
?>