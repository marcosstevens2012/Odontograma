<?php 
	class libros
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

		
		
		function eliminar($id){
			 
			$sql="UPDATE tOdontograma SET realizado = '1' WHERE codigoOdontograma='$id'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else{
				return false;
			}
			$this->conexion->cerrar();
		}
	}


	
?>