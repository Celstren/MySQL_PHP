<?php
    require '../Instancias/instancia_permiso.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try{
        $respuesta = Permiso::ObtenerPermisos();
        
        echo json_encode(array('resultado' => $respuesta));
        } catch (PDOException $e){
            echo json_encode(array('resultado' => 'Ocurrió un error en el sistema'));
        }
    }
?>