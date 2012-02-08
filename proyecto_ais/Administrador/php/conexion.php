<?
$hostname= "localhost";
	$user="root";
	$password="";
	
	//connect
	$db_link=mysql_connect($hostname,$user,$password);
	
	//select db
	mysql_select_db("administrador",$db_link);
?>
