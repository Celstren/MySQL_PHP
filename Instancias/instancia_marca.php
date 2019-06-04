<?php
	require '../Database.php';
	
	class Marca {
	    function _construct() {
	        
	    }
	    
	    public static function ObtenerMarcas(){
	        $query = "SELECT * FROM `Marca`";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerMarcaID($id){
	        $query = "SELECT * FROM `Marca` WHERE MarcaID = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerMarcasPorUsuarioID($id){
	        $query = "SELECT * FROM `Marca` WHERE UsuarioID = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function RegistrarMarca($Tipo_Marca, $Hora_Marca, $Respuesta, $Minutos_Diferencia, $Latitud, $Longitud, $UsuarioID){
            $consulta = "INSERT INTO `Marca` (`Tipo_Marca`, `Hora_Marca`, `Respuesta`, `Minutos_Diferencia`, `Latitud`, `Longitud`, `UsuarioID`) VALUES (?,?,?,?,?,?,?)";
            try{
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                    
                return $resultado->execute(array($Tipo_Marca, $Hora_Marca, $Respuesta, $Minutos_Diferencia, $Latitud, $Longitud, $UsuarioID));
            } catch (PDOException $e){
                    return false;
            }
        }
	}
	
?>