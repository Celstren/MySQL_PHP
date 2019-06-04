<?php
	require '../Database.php';
	
	class Dia {
	    function _construct() {
	        
	    }
	    
	    public static function ObtenerDias(){
	        $query = "SELECT * FROM `Dia`";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerDiasPorHorarioID($id){
	        $query = "SELECT * FROM `Dia` WHERE HorarioID = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerDiaPorID($id){
	        $query = "SELECT * FROM `Dia` WHERE DiaID = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function RegistrarDia($Nombre, $Fecha_Actual, $Hora_Ingreso, $Hora_Salida, $Minutos_Tolerancia, $HorarioID){
            $consulta = "INSERT INTO `Dia` (`Nombre`, `Fecha_Actual`, `Hora_ingreso`, `Hora_Salida`, `Minutos_Tolerancia`, `HorarioID`) VALUES (?,?,?,?,?,?)";
            try{
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                    
                return $resultado->execute(array($Nombre, $Fecha_Actual, $Hora_Ingreso, $Hora_Salida, $Minutos_Tolerancia, $HorarioID));
            } catch (PDOException $e){
                    return false;
            }
        }
	}
	
?>