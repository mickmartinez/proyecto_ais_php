<?php



	session_start(); 
	include ('conexion.php');
	
	

		$query = mysql_query ("INSERT INTO cita (paciente_id, tipo_paciente, frecuentacion_inst, frecuentacion_serv, tipo_atencion, atencion_por, area_referencia ) VALUES ('{$_GET['paciente']}','{$_GET['seguro']}','{$_GET['frecuentacion']}','{$_GET['frecuentacion_servicio']}','{$_GET['tipo_atencion']}','{$_GET['atencion']}','{$_GET['area']}')", $db_link);
                $my_error = mysql_error($db_link);
		echo $my_error;
		echo "Insercion exitosa!";

        
?>
