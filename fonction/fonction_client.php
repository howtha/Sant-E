<?php 
include 'config.php'

function get_infos_client($id, $bd = $base_de_donnee, $login = $db_login, $password = $db_password, $host = $db_host)
{
	$db = mysql_connect('localhost', $login, $password); 
	mysql_select_db('Sant-E',$db);
	$sql = 'SELECT nom,prenom FROM client'
	$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
	$req = mysql_fetch_array($req)
	return $req
}

?>