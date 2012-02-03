<?php
session_start();
header("Cache-control: private");
if ($_SESSION['estado']  == "Conectado"){
  echo "<font face='arial' size='3'>Bienvenido " .$_SESSION['usuario']."</font>";
}
include ('conexion.php');
	
$id = $_GET['id'];

$historia_medica_id = ""; $primer_nombre = ""; $segundo_nombre = ""; $primer_apellido = ""; $segundo_apellido = ""; $nombre_padre = ""; $nombre_madre = ""; $sexo = ""; $telefono = ""; $fecha_nacimiento = ""; $lugar_nacimiento = ""; $seguro_social = ""; $provincia = ""; $distrito = ""; $corregimiento = ""; $direccion = ""; $nombre_urgencias = ""; $parentesco = ""; $telefono_urgenicas = "";

	
	$query = mysql_query ("SELECT * FROM pacientes where id = '$id'", $db_link);
        
if (mysql_num_rows($query)!= 0){
	$r = mysql_fetch_array ($query);
	$historia_medica_id = $r['historia_medica_id'];        
	$primer_nombre = $r['primer_nombre'];
        $segundo_nombre = $r['segundo_nombre'];
        $primer_apellido = $r['primer_apellido'];
        $segundo_apellido = $r['segundo_apellido'];
        $nombre_padre =  $r['nombre_padre'];
        $nombre_madre =  $r['nombre_madre'];
	$sexo = $r['sexo'];
	$telefono = $r['tlf'];
	$fecha_nacimiento = $r['fecha_nacimiento'];
	$lugar_nacimiento = $r['lugar_nacimiento'];
	$seguro_social = $r['seguro_social'];
	$provincia = $r['provincia'];
	$distrito = $r['distrito'];
	$corregimiento = $r['corregimiento'];	
	$direccion = $r['direccion'];
	$nombre_urgencias = $r['nombre_urgencias'];
	$parentesco = $r['parentesco'];
	$telefono_urgenicas = $r['telefono_urgencias'];
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

 <div class="demo">

	<div id="tabs">
		<ul>
		 <li><a href="#tabs-1">Editar Paciente</a></li>
			
			
	         <li><a href="#tabs-2">Registrar Cita</a></li>
		 <li><a href="#tabs-3">Ver Historial</a></li>
                </ul>
		<div id="tabs-1" align = "center">
			<p>Editar</p>
                        <table>
                        	<tr>
  					<td><font color = "#000000">ID:</font></td>
                                        <td><font color = "#000000"><? echo $id;?></font></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Numero de historia:</font></td>
                                        <td><input type = "text" value = "<? echo $historia_medica_id;?> "></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Primer Nombre:</font></td>
                                        <td><input type = "text" value = "<? echo $primer_nombre;?> "></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Segundo Nombre:</font></td>
                                        <td><input type = "text" value = "<? echo $segundo_nombre;?> "></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Primer Apellido:</font></td>
                                        <td><input type = "text" value = "<? echo $primer_apellido;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Segundo Apellido:</font></td>
                                        <td><input type = "text" value = "<? echo $segundo_apellido;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Nombre del padre:</font></td>
                                        <td><input type = "text" value = "<? echo $nombre_padre;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Nombre de la Madre:</font></td>
                                        <td><input type = "text" value = "<? echo $nombre_madre;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Sexo:</font></td>
                                        <td><input type = "text" value = "<? echo $sexo;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Telefono:</font></td>
                                        <td><input type = "text" value = "<? echo $telefono;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">fecha_nacimiento:</font></td>
                                        <td><input type = "text" value = "<? echo $fecha_nacimiento;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">lugar_nacimiento:</font></td>
                                        <td><input type = "text" value = "<? echo $lugar_nacimiento;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Seguro social:</font></td>
                                        <td><input type = "text" value = "<? echo $seguro_social;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">provincia:</font></td>
                                        <td><input type = "text" value = "<? echo $provincia;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">distrito:</font></td>
                                        <td><input type = "text" value = "<? echo $distrito;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">corregimiento:</font></td>
                                        <td><input type = "text" value = "<? echo $corregimiento;?>"></td>
				</tr>

				<tr>
  					<td><font color = "#000000">direccion:</font></td>
                                        <td><input type = "text" value = "<? echo $direccion;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">nombre_urgencias:</font></td>
                                        <td><input type = "text" value = "<? echo $nombre_urgencias;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">parentesco:</font></td>
                                        <td><input type = "text" value = "<? echo $parentesco;?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">telefono_urgenicas:</font></td>
                                        <td><input type = "text" value = "<? echo $telefono_urgenicas;?>"></td>
				</tr>
				<tr>
                                        <td><input type = "submit" value="Guardar Cambios"></td>
				</tr>

			</table>
	        </div>
	        <div id="tabs-2" align = "center">
			<p>Registrar</p>
                        <table>
                        	<tr>
  					<td><font color = "#000000">ID del paciente:</font></td>
                                        <td><input type = "text" value = "<? echo $_GET['id'];?>"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">ID del medico:</font></td>
                                        <td><input type = "text"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Tipo de atencion:</font></td>
                                        <td><input type = "text"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Atencion por:</font></td>
                                        <td><input type = "text"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Fecha:</font></td>
                                        <td><input type = "text"> <input type = "button" value = "Generar"></td>
				</tr>
				<tr>
  					<td><font color = "#000000">Turno:</font></td>
                                        <td><input type = "text"></td>
				</tr>

			</table>


	        </div>
	        <div id="tabs-3">
                </div>
       </div>
 </div>

</body>
</html>
