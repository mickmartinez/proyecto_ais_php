<?php



	session_start(); 
	include ('conexion.php');
	
	$query = mysql_query ("SELECT id FROM pacientes where id = '{$_GET['id']}'", $db_link);
	
	if (mysql_num_rows($query)!= 0)
	{
		$query = mysql_query ("UPDATE pacientes SET numero_historia = '{$_GET['numero_historia']}', primer_nombre = '{$_GET['primer_nombre']}', segundo_nombre = '{$_GET['segundo_nombre']}', primer_apellido = '{$_GET['primer_apellido']}', segundo_apellido = '{$_GET['segundo_apellido']}', nombre_padre = '{$_GET['nombre_padre']}', nombre_madre = '{$_GET['nombre_madre']}', sexo = '{$_GET['sexo']}', telefono = '{$_GET['telefono']}', lugar_nacimiento = '{$_GET['lugar_nacimiento']}', fecha_nacimiento = '{$_GET['fecha_nacimiento']}', seguro_social = '{$_GET['seguro_social']}', provincia = '{$_GET['provincia']}', distrito = '{$_GET['distrito']}', corregimiento = '{$_GET['corregimiento']}', direccion = '{$_GET['direccion']}', nombre_urgencias = '{$_GET['nombre_urgencias']}', parentesco_urgencias = '{$_GET['parentesco_urgencias']}', telefono_urgencias = '{$_GET['telefono_urgencias']}' where id = '{$_GET['id']}'", $db_link);
		$my_error = mysql_error($db_link);
		echo "Actualizacion exitosa!";
	}
	else
	{
		$query = mysql_query ("INSERT INTO pacientes (id, numero_historia, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, nombre_padre, nombre_madre, sexo,telefono, lugar_nacimiento, fecha_nacimiento, seguro_social, provincia, distrito, corregimiento, direccion, nombre_urgencias, parentesco_urgencias, telefono_urgencias) VALUES ('{$_GET['id']}','{$_GET['numero_historia']}','{$_GET['primer_nombre']}','{$_GET['segundo_nombre']}','{$_GET['primer_apellido']}','{$_GET['segundo_apellido']}','{$_GET['nombre_padre']}','{$_GET['nombre_madre']}','{$_GET['sexo']}','{$_GET['telefono']}','{$_GET['lugar_nacimiento']}','{$_GET['fecha_nacimiento']}','{$_GET['seguro_social']}','{$_GET['provincia']}','{$_GET['distrito']}','{$_GET['corregimiento']}','{$_GET['direccion']}','{$_GET['nombre_urgencias']}','{$_GET['parentesco_urgencias']}','{$_GET['telefono_urgencias']}')", $db_link);
		echo "Insercion exitosa!";
	}
        
?>
