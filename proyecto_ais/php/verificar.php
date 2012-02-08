<?php
	session_start(); 
	include ('conexion.php');
	
	
	$query = mysql_query ("SELECT primer_nombre, primer_apellido, rol FROM usuarios where id = '{$_GET['id']}' and clave = '{$_GET['key']}'", $db_link);
	
	
		if (mysql_num_rows($query)!= 0){
			$_SESSION['estado'] = "Conectado";
						
			$row = mysql_fetch_array ($query);
			$_SESSION['usuario'] = $row['primer_nombre'];
                        $_SESSION['rol'] = $row['rol'];

				echo  "<style>span {display:none;}</style>";
						
				echo "<font face='arial' size='3'>Bienvenido " .$row['primer_nombre']." " .$row ['primer_apellido']."</font>";
						
						
		if ($_SESSION['rol'] == "Taquillero"){
			$id = 0;
			//header("Location:taquillero.php?id=$id");
			echo "<form onsubmit = 'buscarPaciente();return false;' action = '' method = 'POST'><strong>CEDULA: </strong><input type='text' id = 'cedula'/>";
			echo "<INPUT TYPE='submit' value='Ingresar'/>";
                        echo "</form>";
						
						
						}
						
						
		
						}else{
		                echo "<font face='arial' size='3'> Usted no se encuentra registrado </font>";
	
						}

                               
			

	
	
?>
