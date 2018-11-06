<?php
	/**
	 * summary
	 */
	class AccesoDatos
	{
	    private $conn=NULL;
	    private $serv = 'localhost'; 
	    private $db = 'mitiendita';
	    private $usr = 'root';
	    private $pass = 'root';
	    private $port = 3306;

	    /**
	     * summary
	     */
	    public function __construct()
	    {
	    	//$this->conn = new mysqli($this->serv,$this->usr,$this->pass,$this->db);
	    	try{
	    		$dns="mysql:dbname=mitienda;host=localhost";
		    	$this->conn = new PDO($dns, $this->usr, $this->pass);
		    	$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    	}catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }
	    }

	    public function ejecutarSentencia($sql, $valores){
	    	try{
		    	$sentencia = $this->conn->prepare($sql);
		    	$sentencia->execute($valores);
	    		return $sentencia->rowCount();
	    	}catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		    }
	    }

	    public function consultar($sql, $valores){
	    try{
	    	$sentencia = $this->conn->prepare($sql);
	    	if (is_null($valores)){
	    		$sentencia->execute();
	    	}else{
	    		$sentencia->execute($valores);
	    	}
	    	
	    	
	    	return $sentencia->fetchAll();	
	    }catch(PDOException $e){
		    	echo "Connection failed: " . $e->getMessage();
		}
	    }

	    public function __destruct(){
	    	unset($conn);
	    }

	}

?>