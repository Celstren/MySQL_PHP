<?php
	require '../Database.php';
	
	class Horario {
	    function _construct() {
	        
	    }
	    
	    public static function ObtenerHorarios(){
	        $query = "SELECT * FROM `Horario`";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function ObtenerHorarioPorID($id){
	        $query = "SELECT * FROM `Horario` WHERE HorarioID = $id";
	        
	        try {
	            $resultado = Database::getInstance()->getDb()->prepare($query);
	        
    	        $resultado->execute();
    
    			$table = $resultado->fetchALL(PDO::FETCH_ASSOC);
    
    			return $table;
	        } catch (PDOException $e){
	            echo false;
	        }
	        
	    }
	    
	    public static function RegistrarHorario($Fecha_Inicio, $Fecha_Fin, $Turno){
            $consulta = "INSERT INTO `Horario` (`Fecha_Inicio`, `Fecha_Fin`, `Turno`) VALUES (?,?,?)";
            try{
                $resultado = Database::getInstance()->getDb()->prepare($consulta);
                    
                return $resultado->execute(array($Fecha_Inicio, $Fecha_Fin, $Turno));
            } catch (PDOException $e){
                    return false;
            }
        }
	}
	
?>