<?php

require '../Instancias/instancia_usuario.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    if (isset($_GET['Codigo'])){
        $identificador = $_GET['Codigo'];
        
        $respuesta = Usuario::ObtenerUsuarioPorID($identificador);
        
        if ($respuesta){
            echo json_encode(array('resultado' => $respuesta));
        }
        else
            echo json_encode(array('resultado' => 'El usuario no existe'));
    }
    else{
        echo json_encode(array('resultado' => 'Ingrese un identificador'));
    }
}

?>