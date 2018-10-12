<?php
require("../controller/ControladorOdontograma.php");
$controladorOdontograma=new ControladorOdontograma();
$arrayTOdontograma=$controladorOdontograma->consultarTodoPorCodigoPaciente($_POST["codigoPaciente"]);
?>
<table class="table">
	<thead>
		<th>Numero de Tratamiento</th>
		<th>DESCRIPCIÓN</th>
		<th class="widthDetalleTable">FECHA REGISTRO</th>
		<th class="widthDetalleTable"></th>
		<th class="widthDetalleTable"></th>
	</thead>
	<tbody style="font-size: 13px;">
		<?php
		foreach($arrayTOdontograma as $key => $value) 
		{
			?>
			<tr>
				<td><?=$value->getEstados()?></td>
				<td><?=$value->getFechaRegistro()?></td>
				<td><input id="<?=$value->getEstados()?>" type="button" class="button2" value="Ver Detalle" onclick="cargarDientes('seccionDientes', 'dientes.php', this.id);"></td>
				<td id="realizado"><input id="<?=$value->getCodigoOdontograma()?>" type="button" class="button2" id="realizado" name="realizado" style="background: green;" value="Realizado" onclick="eliminar(this.id);"></td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
<script type="" ">
	
    function eliminar(id){
	
	$.ajax({
		url:'../Controllers/libros.php',
		type:'POST',
		data:'idlib='+id+'&boton=eliminar'
	}).done(function(resp){
		alert(resp);
		document.getElementById("realizado").style.display = "none";
		
	});
	
}
</script>
