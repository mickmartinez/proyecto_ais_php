<?php



	session_start(); 
	include ('conexion.php');
	
		$query_servicio = mysql_query ("select codigo_servicio from servicios where nombre_servicio = '{$_GET['servicio']}'");

		$query_medico =  mysql_query ("select codigo_medico from medicos where servicio_id = '$query_servicio'");
		
		$fila2 = mysql_fetch_array ($query_medico);

		$query = mysql_query ("INSERT INTO cita (paciente_id, medico_id, tipo_paciente, frecuentacion_inst, frecuentacion_serv, tipo_atencion, atencion_por, area_referencia ) VALUES ('{$_GET['paciente']}', '$query_medico','{$_GET['seguro']}','{$_GET['frecuentacion']}','{$_GET['frecuentacion_servicio']}','{$_GET['tipo_atencion']}','{$_GET['atencion']}','{$_GET['area']}')", $db_link);
                $my_error = mysql_error($db_link);
		echo $my_error;
		echo "Insercion exitosa!";

        
?>
