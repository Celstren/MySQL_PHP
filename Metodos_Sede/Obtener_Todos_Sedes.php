<?php
    require '../Instancias/instancia_sede.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try{
        $respuesta = Sede::ObtenerSedes();
        
        echo json_encode(array('resultado' => $respuesta));
        } catch (PDOException $e){
            echo json_encode(array('resultado' => 'Ocurrió un error en el sistema'));
        }
    }
?>