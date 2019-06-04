<?php
	require '../Database.php';
	
	class Sede {
	    function _construct() {
	        
	    }
	    
	    public static function ObtenerSedes(){
	        $query = "SELECT * FROM `Sede`";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerSedePorID($id){
	        $query = "SELECT * FROM `Sede` WHERE SedeID = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function RegistrarSede($Nombre, $Latitud, $Longitud){
            $consulta = "INSERT INTO `Sede` (`Nombre`, `Latitud`, `Longitud`) VALUES (?,?,?)";
            try{
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                    
                return $resultado->execute(array($Nombre, $Latitud, $Longitud));
            } catch (PDOException $e){
                    return false;
            }
        }
	}
	
?>