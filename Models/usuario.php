<?php 
	class usuario
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

		function identificar($email,$password)
		{
			$pass=sha1($password);
			$sql="SELECT * FROM usuarios WHERE email_usuario='$email' && pass_usuario='$pass'";
			$resulatdos = $this->conexion->conexion->query($sql);
			if ($resulatdos->num_rows > 0) {
				$r=$resulatdos->fetch_array();
			}
			else{
				$r[0]=0;
			}
			return $r;
			$this->conexion->cerrar();
		}
		
		function registrar($nombre,$apellido,$email,$password){
			$pass= sha1($password);
			$sql="INSERT INTO usuarios VALUES(0,'$nombre','$apellido','$email','$pass')";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}
	
	}

	
	
?>