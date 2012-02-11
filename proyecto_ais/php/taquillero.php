<?php

session_start();
header("Cache-control: private");

if ($_SESSION['estado']  == "Conectado"){
  echo "<font face='arial' size='3'>Bienvenido " .$_SESSION['usuario']."</font>";
}
include ('conexion.php');
	
$id = $_GET['id'];

$numero_historia = ""; $primer_nombre = ""; $segundo_nombre = ""; $primer_apellido = ""; $segundo_apellido = ""; $nombre_padre = ""; $nombre_madre = ""; $sexo = ""; $telefono = ""; $fecha_nacimiento = ""; $lugar_nacimiento = ""; $seguro_social = ""; $provincia = ""; $distrito = ""; $corregimiento = ""; $direccion = ""; $nombre_urgencias = ""; $parentesco_urgencias = ""; $telefono_urgencias = "";

$query = mysql_query ("SELECT * FROM pacientes where id = '$id'", $db_link);
        
if (mysql_num_rows($query)!= 0)
{
	$r = mysql_fetch_array ($query);
	$numero_historia = $r['numero_historia'];        
	$primer_nombre = $r['primer_nombre'];
        $segundo_nombre = $r['segundo_nombre'];
        $primer_apellido = $r['primer_apellido'];
        $segundo_apellido = $r['segundo_apellido'];
        $nombre_padre =  $r['nombre_padre'];
        $nombre_madre =  $r['nombre_madre'];
	$sexo = $r['sexo'];
	$telefono = $r['telefono'];
	$fecha_nacimiento = $r['fecha_nacimiento'];
	$lugar_nacimiento = $r['lugar_nacimiento'];
	$seguro_social = $r['seguro_social'];
	$provincia = $r['provincia'];
	$distrito = $r['distrito'];
	$corregimiento = $r['corregimiento'];	
	$direccion = $r['direccion'];
	$nombre_urgencias = $r['nombre_urgencias'];
	$parentesco_urgencias = $r['parentesco_urgencias'];
	$telefono_urgencias = $r['telefono_urgencias'];
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Seguro</title>

		<script src="../js/sesion.js" language="javascript" type="text/javascript"> </script>
		<link rel="stylesheet" href="../css/jquery.ui.all.css">
		<link rel="stylesheet" href="../css/fondo.css">
		<script src="../js/jquery-ui-1.8.17.custom.min.js"></script>
		<script src="../js/jquery-1.7.1.js"></script>
		<script src="../js/jquery.ui.core.js"></script>
		<script src="../js/jquery.ui.position.js"></script>
		<script src="../js/jquery.ui.widget.js"></script>
		<script src="../js/jquery.ui.tabs.js"></script>
		<link rel="stylesheet" href="../css/demos.css">
		<link type="text/css" href="../css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
		<script>
		$(function() {
			$( "#tabs" ).tabs();
		});
		</script>
	</head>
	
	<body>

		<form onsubmit = "buscarPaciente2();return false;" action = "" method = "POST">
			<strong>CEDULA: </strong>
			<input type="text" id = "cedula2"/>
			<input type="submit" value="Ingresar"/>
		</form>

		<div id = "resultado">
			<div class="demo">

				<div id="tabs">
					<ul>
						<li><a href="#tabs-1">Registro de Paciente</a></li>
						<li><a href="#tabs-2">Registro de Cita</a></li>
						<li><a href="#tabs-3">Historial de Paciente</a></li>
					</ul>

					<div id="tabs-1" align = "center">
						<p>Registrar Paciente</p>

						<form id = "formularioRegistroPaciente" onsubmit = "GuardarCambiosPaciente();return false;" action = "" method = "POST">
				                        <table>
        				                	<tr>
				  					<td><font color = "#000000">ID:</font></td>
								        <td><input type = "text" id = "id" value = "<? echo $id;?>" disabled></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Numero de historia:</font></td>
								        <td><input type = "text" id = "numero_historia" value = "<? echo $numero_historia;?> "></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Primer Nombre:</font></td>
								        <td><input type = "text" id = "primer_nombre" value = "<? echo $primer_nombre;?> "></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Segundo Nombre:</font></td>
								        <td><input type = "text" id = "segundo_nombre"  value = "<? echo $segundo_nombre;?> "></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Primer Apellido:</font></td>
								        <td><input type = "text" id = "primer_apellido" value = "<? echo $primer_apellido;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Segundo Apellido:</font></td>
								        <td><input type = "text" id = "segundo_apellido"  value = "<? echo $segundo_apellido;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Nombre del padre:</font></td>
								        <td><input type = "text" id = "nombre_padre" value = "<? echo $nombre_padre;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Nombre de la Madre:</font></td>
								        <td><input type = "text" id = "nombre_madre" value = "<? echo $nombre_madre;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Sexo:</font></td>
								        <td><input type = "text" id = "sexo" value = "<? echo $sexo;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Telefono:</font></td>
								        <td><input type = "text" id = "telefono" value = "<? echo $telefono;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Fecha de nacimiento:</font></td>
								        <td><input type = "text" id = "fecha_nacimiento" value = "<? echo $fecha_nacimiento;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Lugar de nacimiento:</font></td>
								        <td><input type = "text"id = "lugar_nacimiento" value = "<? echo $lugar_nacimiento;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Seguro social:</font></td>
								        <td><input type = "text" id = "seguro_social" value = "<? echo $seguro_social;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Provincia:</font></td>
								        <td><input type = "text" id = "provincia" value = "<? echo $provincia;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Distrito:</font></td>
								        <td><input type = "text" id = "distrito" value = "<? echo $distrito;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Corregimiento:</font></td>
								        <td><input type = "text" id = "corregimiento" value = "<? echo $corregimiento;?>"></td>
								</tr>

								<tr>
				  					<td><font color = "#000000">Direccion:</font></td>
								        <td><input type = "text" id = "direccion" value = "<? echo $direccion;?>"></td>
								</tr>
				 				<tr>
									<td><p><font color = "#000000">En caso de Urgencias llamar a:</font></p>
								</tr>
								<tr>
				  					<td><font color = "#000000">Nombre:</font></td>
								        <td><input type = "text" id = "nombre_urgencias" value = "<? echo $nombre_urgencias;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Parentesco:</font></td>
								        <td><input type = "text" id = "parentesco_urgencias" value = "<? echo $parentesco_urgencias;?>"></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Telefono:</font></td>
								        <td><input type = "text" id = "telefono_urgencias" value = "<? echo $telefono_urgencias;?>"></td>
								</tr>
							</table>				
				
							<input type = "submit" value="Guardar Cambios">
							<div id = "resultadoGuardarCambiosPaciente"></div>
						</form>
				        </div>
					
					<div id="tabs-2" align = "center">
						<p>Registrar Cita</p>

						<form id = "formularioRegistroCita" onsubmit = "GuardarCambiosCita();return false;" action = "" method = "POST">
				                        <table>
								<tr>
				  					<td><font color = "#000000">Cedula del paciente:</font></td>
								        <td><input type = "text" value = "<? echo $_GET['id'];?> " id = "id_paciente" style="width:150px" disabled></td>
								</tr>
								<tr>
									<td><font color = "#000000">Atencion por:</font></td>
				  					<td><select name="atencion_por" style="width:150px" id = "atencion">
										<option value="Control">Consulta-Control</option>
										<option value="Morbilidad">Consulta-Morbilidad</option>
										<option value="Urgencia">Consulta-Urgencia</option>
										<option value="Bota">Procedimiento-Bota</option>
										<option value="Ultrasonido">Procedimiento-Ultrasonido</option>
										<option value="Evaluacion">Evaluacion</option>
									</select></td>
								        <td>
								</tr>
								<tr>
									<td><font color = "#000000">Servicio:</font></td>
				  					<td><select name="atencion_por" style="width:150px" id = "servicios">
									<?php
										$query=mysql_query("SELECT nombre_servicio FROM servicios ORDER BY nombre_servicio ASC");
										$i=0;
										while ($row=mysql_fetch_array($query))
										{
											echo "<option value=".$row['nombre_servicio'].">".$row['nombre_servicio']."</option>\n";
										}
									?> 
									</select></td>
								</tr>

								<tr>
									<td><font color = "#000000">Tipo de Paciente:</font></td>
				  					<td><select name="tipo_paciente" style="width:150px" id = "seguro">
										<option value="Asegurado">Asegurado</option>
										<option value="No Asegurado">No Asegurado</option>
									</select></td>
								</tr>
								<tr>
									<td><font color = "#000000">Frecuentacion en la Institucion:</font></td>
				  					<td><select name="frecuentacion_institucion" style="width:150px" id = "frecuentacion">
										<option value="De Primera Vez">De primera vez</option>
										<option value="Nuevo en el anio">Nuevo en el anio</option>
										<option value="Subsiguiente">Subsiguiente</option>
									</select></td>
								</tr>
								<tr>
									<td><font color = "#000000">Frecuentacion en Servicio:</font></td>
				  					<td><select name="frecuentacion_servicio" style="width:150px" id = "frecuentacion_servicio">
										<option value="De primera vez">De primera vez</option>
										<option value="Nuevo en el anio">Nuevo en el anio</option>
										<option value="Subsiguiente">Subsiguiente</option>
									</select></td>
								</tr>
								<tr>
									<td><font color = "#000000">Tipo de Atencion:</font></td>
				  					<td><select name="frecuentacion_servicio" style="width:150px" id = "tipo_atencion">
										<option value="Nuevo">Nuevo</option>
										<option value="Reconsulta">Reconsulta</option>
									</select></td>
								</tr>
								<tr>
				  					<td><font color = "#000000">Area de Referencia:</font></td>
				  					<td><select name="area_referencia" style="width:150px" id = "area">
										<option value="Consulta Externa">Consulta Externa</option>
										<option value="Instalaciones del Minsa Metro y del Hisma">Instalaciones del Minsa Metro y del Hisma</option>
										<option value="Instalaciones del Seguro Social Metro">Instalaciones del Seguro Social Metro</option>
										<option value="Minsa Interior">Minsa Interior</option>
										<option value="Seguro Interior">Seguro Interior</option>
										<option value="Clinicas Privadas">Clinicas Privadas</option>
										<option value="Centros Penitenciarios">Centros Penitenciarios</option>
										<option value="Otros">Otros</option>
									</select></td>
								</tr>
							</table>

							<input type = "submit" value="Guardar Cita">
							<div id = "resultadoCita"></div>
						</form>


				        </div>

				        <div id="tabs-3">
						<?php
							$query2 = mysql_query ("SELECT * FROM cita where paciente_id = '$id'", $db_link);
							
							if (mysql_num_rows($query2)!= 0){

								echo "
								<table>";
					                echo "<tr>
										<td><p><font color = '#000000'>Id_cita</font></p></td>
										<td><p><font color = '#000000'> Id de paciente</font></p></td>
										<td><p><font color = '#000000'> Id de medico</font></p></td>
										<td><p><font color = '#000000'>Tipo de paciente</font></p></td>
										<td><p><font color = '#000000'> Frecuentacion en la institucion</font></p></td>
										<td><p><font color = '#000000'> Frecuentacion de servicio</font></p></td>
										<td><p><font color = '#000000'> Tipo de Atencion</font></p></td>
										<td><p><font color = '#000000'>Atencion por</font></p></td>
										<td><p><font color = '#000000'>Area de Referencia </font></p></td>
									</tr>";
									while ($fila = mysql_fetch_array ($query2)){
										
									echo"
									<tr>";
										echo "<td><p><font color = '#000000'>" .$fila['id']. "</font></p></td>";
										echo "<td><p><font color = '#000000'> " .$fila['paciente_id']. "</font></p></td>";
										echo "<td><p><font color = '#000000'>  " .$fila['medico_id']. " </font></p></td>";
										echo "<td><p><font color = '#000000'>  " .$fila['tipo_paciente']."  </font></p></td>";
										echo "<td><p><font color = '#000000'>  " .$fila['frecuentacion_inst']. " </font></p></td>";
										echo "<td><p><font color = '#000000'> " .$fila['frecuentacion_serv']. "</font></p></td>";
										echo "<td><p><font color = '#000000'>  " .$fila['tipo_atencion']. " </font></p></td>";
										echo "<td><p><font color = '#000000'>  " .$fila['atencion_por']. "</font></p></td>";
										echo "<td><p><font color = '#000000'> " .$fila['area_referencia']. "</font></p></td>";
										echo "<td><p><font color = '#000000'>  " .$fila['fecha']. "</font></p></td>";
										echo "<td><p><font color = '#000000'> " .$fila['turno']. "</font></p></td>";
									echo "</tr>"; 
									}
								echo "</table>";
									
							}else{
								echo "No hay registro de citas";
							}
						?>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>
