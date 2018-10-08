<?php
require("../connection/Conexion.php");
require("../entity/TOdontograma.php");
require("../model/ModeloTOdontograma.php");

class Editar
{

	public function editar ($codigoOdontograma)
	{
		$modeloTOdontograma=new ModeloTOdontograma();
		$modeloTOdontograma->editar($this->conexion, $codigoOdontograma);
	}

}
?>