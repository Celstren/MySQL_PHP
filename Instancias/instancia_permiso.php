<?php
	require '../Database.php';
	
	class Permiso {
	    function _construct() {
	        
	    }
	    
	    public static function ObtenerPermisos(){
	        $query = "SELECT * FROM `Permiso`";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerPermisoPorID($id){
	        $query = "SELECT * FROM `Permiso` WHERE PermisoID = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function RegistrarPermiso($Nombre, $Descripcion){
            $consulta = "INSERT INTO `Permiso` (`Nombre`, `Descripcion`) VALUES (?,?)";
            try{
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                    
                return $resultado->execute(array($Nombre, $Descripcion));
            } catch (PDOException $e){
                    return false;
            }
        }
	}
	
?>