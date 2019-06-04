<?php
    require '../Instancias/instancia_usuario.php';
    
    if($_SERVER['REQUEST_METHOD']=='GET'){
        try{
        $respuesta = Usuario::ObtenerUsuarios();
        
        echo json_encode(array('resultado' => $respuesta));
        } catch (PDOException $e){
            echo json_encode(array('resultado' => 'Ocurrió un error en el sistema'));
        }
    }
?>