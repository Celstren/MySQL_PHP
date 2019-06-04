<?php
	require 'Database.php';
	
	Registro::ObtenerUsuarios();
	
	class Registro {
	    function _construct() {
	        
	    }
	    
	    public static function ObtenerUsuarios(){
	        $query = "SELECT * FROM `Usuario`";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			echo json_encode(array('resultado' => $table));
	        } catch (PDOException $e){
	            echo json_encode(array('resultado' => 'Ocurrió un error en el sistema'));
	        }
	        
	    }
	}
	
?>