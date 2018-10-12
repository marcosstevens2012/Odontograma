<!doctype html>
<html lang="sp">
<head>
	<meta charset="UTF-8">
	<title>ODONTOGRAMA</title>
	<link rel="stylesheet" href="../public/css/cssDiente.css">
	<link rel="stylesheet" href="../public/css/cssDienteGeneral.css">
	<link rel="stylesheet" href="../public/css/cssFormulario.css">
	<link rel="stylesheet" href="../public/css/cssComponentes.css">
	<link rel="stylesheet" href="../public/css/cssComponentesPersonalizados.css">
	<link rel="stylesheet" href="../public/css/cssContenido.css">
	<script src="../public/js/jquery-3.3.1.js"></script>
	<script src="../public/js/jsAcciones.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

	<style type="">
		#image {
			  background-color: rgba(0,0,0,0.8);
			  background-image:url(../public/img/fondo.jpg);
			  height: 500px;
			  max-width: 100%;
			  filter:brightness(0.4);
		}
	</style>
</head>
<body>
	<?php
		$paciente = $_GET['idpaciente'];
		$profesional = $_GET['profesional'];
		$nombre = $_GET['nombre'];
		$apellido = $_GET['apellido'];
		$nacimiento = $_GET['nacimiento'];
		$telefono = $_GET['telefono'];
		$obra = $_GET['obrasocial'];
		$sangre = $_GET['sangre'];
		$documento = $_GET['documento'];
	?>
	<header>
		<img style="width:128px;height:128px;margin:10px auto;
	display:block;" src="../public/img/pp.jpg" />
		<h1 style="text-align: center;text-decoration: underline;font-family:verdana;">ODONTOGRAMA DE PACIENTE</h1>
		<input type="hidden" id="txtCodigoPaciente" name="txtCodigoPaciente" value="<?php echo($paciente)  ?>">
		<input type="hidden" id="txtCodigoProfesional" name="txtCodigoProfesional" value="<?php echo($profesional)  ?>">
		
          
	    <div> 	
			<h3 style="font-family:verdana;">Paciente: <?php echo ($nombre); echo ( $apellido) ?> </h3>
			<h3 style="font-family:verdana;">Documento: <?php echo " $documento " ; ?></h3>
			<h3 style="font-family:verdana;">Sangre: <?php echo " $sangre " ; ?></h3>
			<h3 style="font-family:verdana;">Telefono: <?php echo " $telefono " ; ?></h3>
			<h3 style="font-family:verdana;">Obra Social: <?php echo " $obra " ; ?></h3>
		</div>
	</header>
	<br>

	<section id="seccionRegistrarTratamiento" class="textAlignLeft sombraFormulario" style="background-color: white;padding: 20px;width: 1295px;">
			<section class="displayInlineBlockMiddle">
				<div class="dienteGeneral" id="dienteGeneral"><div id="C1" onclick="seleccionarCara(this.id);"></div><div id="C2" onclick="seleccionarCara(this.id);"></div><div id="C3" onclick="seleccionarCara(this.id);"></div><div id="C4" onclick="seleccionarCara(this.id);"></div><div id="C5" onclick="seleccionarCara(this.id);"></div><input type="text" id="txtIdentificadorDienteGeneral" name="txtIdentificadorDienteGeneral" value="DXX" readonly="readonly"></div>
			</section>
			<section class="displayInlineBlockMiddle">
				<form class="formulario sombraFormulario labelPequenio" style="text-align: left;">
					<div class="tituloFormulario">DATOS DE LA PRESTACION</div>
					<div class="contenidoInterno">
						<label for=""><b>DIENTE</b></label>
						<input type="text" id="txtDienteTratado" name="txtDienteTratado" class="textAlignCenter" size="4" readonly="readonly">
						<br>
						<label for=""><b>CARA</b></label>
						<input type="text" id="txtCaraTratada" name="txtCaraTratada" class="textAlignCenter" size="4" readonly="readonly">
						<br>
						<label for=""><b>PRESTACION</b></label>
						<select id="cbxEstado" class="cbxEstado" name="cbxEstado">
							<option value="2-DIENTE AUSENTE">DIENTE AUSENTE</option>
							<option value="3-REMANENTE RADICULAR">REMANENTE RADICULAR</option>
							<option value="4-EXTRUSION">EXTRUSION</option>
							<option value="5-INTRUSION">INTRUSION</option>
							<option value="6-GIROVERSION">GIROVERSION</option>
							<option value="7-MIGRASION">MIGRASION</option>
							<option value="8-MICRODONCIA">MICRODONCIA</option>
							<option value="9-MACRODONCIA">MACRODONCIA</option>
							<option value="10-ECTOPICO">ECTOPICO</option>
							<option value="11-TRANSPOSICION">TRANSPOSICION</option>
							<option value="12-CLAVIJA">CLAVIJA</option>
							<option value="13-FRACTURA">FRACTURA</option>
							<option value="14-DIENTE DISCROMICO">DIENTE DISCROMICO</option>
							<option value="15-GEMINACION">GEMINACION</option>
							<option value="16-CARIES">CARIES</option>
							<option value="17-OBTURACION TEMPORAL">OBTURACION TEMPORAL</option>
							<option value="18-AMALGAMA">AMALGAMA</option>
							<option value="19-RESINA">RESINA</option>
							<option value="20-INCRUSTACION">INCRUSTACION</option>
							<option value="21-ENDODONCIA">ENDODONCIA</option>
							<option value="22-DESGASTADO">DESGASTADO</option>
							<option value="23-DIASTEMA">DIASTEMA</option>
							<option value="24-MOVILIDAD">MOVILIDAD</option>
							<option value="25-CORONA TEMPORAL">CORONA TEMPORAL</option>
							<option value="26-CORONA COMPLETA">CORONA COMPLETA</option>
							<option value="27-CORONA VEENER">CORONA VEENER</option>
							<option value="28-CORONA FEXESTRADA">CORONA FEXESTRADA</option>
							<option value="29-CORONA TRES CUARTOS">CORONA TRES CUARTOS</option>
							<option value="30-CORONA PORCELANA">CORONA PORCELANA</option>
							<option value="31-PROTESIS FIJA">PROTESIS FIJA</option>
							<option value="32-PROTESIS REMOVIBLE">PROTESIS REMOVIBLE</option>
							<option value="33-ODONTULO TOTAL">ODONTULO TOTAL</option>
							<option value="34-APARAT. ORTO. FIJO">APARAT. ORTO. FIJO</option>
							<option value="35-APARAT. ORTO. REMOV.">APARAT. ORTO. REMOV.</option>
							<option value="36-IMPLANTE">IMPLANTE</option>
							<option value="37-SUPERNUMERARIO">SUPERNUMERARIO</option>
							<option value="38-DIENTE POR EXTRAER">DIENTE POR EXTRAER</option>
							<option value="39-CONSULTA">CONSULTA</option>
						</select>
						<hr>

						


						<div class="seccionBotones">
							<input type="button" value="Agregar Tratamiento" onclick="agregarTratamiento($('#txtDienteTratado').val(), $('#txtCaraTratada').val(), $('#cbxEstado').val());">
						</div>
					</div>
				</form>
			</section>
			<section class="displayInlineBlockTop textAlignCenter" style="margin-left: 10px;width: 230px;">
				<div id="divTratamiento" class="displayInlineBlockTop sombraFormulario" style="width: 700px;height:150px;overflow-y: scroll;">
					<table id="tablaTratamiento" width="100%">
						<tbody></tbody>
					</table>
				</div>
				<div class="displayInlineBlockTop">
					<label style="margin-top: 20px;"><b >NUMERO DE ORDEN</b> </label>
					<br>
					<input style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px;box-sizing: border-box;"  name="txtDescripcion" id="txtDescripcion" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" type="number"></input>
				</div>
			</section>
			<hr>
			<div>
				<section id="seccionPaginaAjax"></section>
				<?php 
				if ($paciente != $profesional){?>
				<input type="button" class="button anchoCompleto" style="background: green;" value="Guardar Tratamientos" onclick="guardarTratamiento();">
				<?php } ?>
				<button type="button" class="button anchoCompleto" style="background: blue;" onclick="prepararImpresion(); javascript:window.print(); terminarImpresion();">Imprimir Odontograma</button>
			</div>
		</section>
	<section>			
		<section style="width: 1342px;">
			
			<section id="seccionDientes" class="displayInlineBlockTop" style="padding: 10px;height: 800px;width: 861px;">
			</section>	
			<section id="seccionTablaTratamientos" style="height: 820px;overflow-y: scroll;width: 450px;" class="displayInlineBlockTop sombraFormulario">
			</section>		
		</section>

		<br><br>
		
	</section>
	<footer>
		
	</footer>
</body>
<script>
		
		cargarTratamientos("seccionTablaTratamientos", "verodontograma.php", $('#txtCodigoPaciente').val());
		cargarDientes("seccionDientes", "dientes.php", '', $('#txtCodigoPaciente').val());
	</script>
<script type="">
	$(document).ready(function() {
			$('#cbxEstado').select2({
    			sorter: function(data) {
    			return data.sort(function(a, b) {
        		return a.text < b.text ? -1 : a.text > b.text ? 1 : 0;
    								});
				}
				});

});	
</script>



</html>