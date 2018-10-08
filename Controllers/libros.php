<?php 
	require_once("../Models/libros.php");
	$boton= $_POST['boton'];
	if($boton==='buscar')
	{
		$valor=$_POST['valor'];
		$inst = new libros();
		$r=$inst ->lista_libros($valor);
		//print_r($r);
		echo json_encode($r);
	}
	if ($boton==='actualizar') {
		$inst = new libros();
		$id=$_POST['idlib'];
		$isbn=$_POST['isbn'];
		$titulo=$_POST['titulo'];
		$autor=$_POST['autor'];
		$añop=$_POST['añop'];
		$nrop=$_POST['nrop'];
		$ediccion=$_POST['ediccion'];
		$idioma=$_POST['idioma'];
		
		if($inst->actualizar($id,$isbn,$titulo,$autor,$añop,$nrop,$ediccion,$idioma)){
			echo 'exito';
		}
		else{
			echo "No se Actualizo los datos";
		}
	}
		if($boton==='eliminar')
	{
		$idlib=$_POST['idlib'];
		$inst = new libros();
		if($inst->eliminar($idlib)){
			echo 'Se edito correctamente';
		}
		else{
			echo "No se editaron los datos";
		}
	}
	
?>