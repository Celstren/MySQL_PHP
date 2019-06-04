<?php
    require '../Instancias/instancia_dia.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try{
        $respuesta = Dia::ObtenerDias();
        
        echo json_encode(array('resultado' => $respuesta));
        } catch (PDOException $e){
            echo json_encode(array('resultado' => 'Ocurrió un error en el sistema'));
        }
    }
?>