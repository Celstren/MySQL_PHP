<?php
	require '../Database.php';
	
	class Usuario {
	    function _construct() {
	        
	    }
	    
	    public static function ObtenerUsuarios(){
	        $query = "SELECT * FROM `Usuario`";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerUsuarioPorID($id){
	        $query = "SELECT * FROM `Usuario` WHERE Codigo_Empleado = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function RegistrarUsuario($Nombre, $Estado, $Sector, $Contrasena, $Area, $Codigo_Empleado, $SedeID, $HorarioID){
            $consulta = "INSERT INTO `Usuario` (`Nombre`, `Estado`, `Sector`, `Contrasena`, `Area`, `Codigo_Empleado`, `SedeID`, `HorarioID`) VALUES (?,?,?,?,?,?,?,?)";
            try{
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                    
                return $resultado->execute(array($Nombre, $Estado, $Sector, $Contrasena, $Area, $Codigo_Empleado, $SedeID, $HorarioID));
            } catch (PDOException $e){
                    return false;
            }
        }
	}
	
?>