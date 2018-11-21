<?php

require_once ('sql.php');
if (isset($_POST['submit']))
{
	$login = $_POST['login'];
	$password = $_POST['password'];

	$requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ? AND password = ?");
	$requete->execute(array($login, $password));

	if ($reponse = $requete->fetch())
	{
		$_SESSION['id'] = $reponse['id'];
	}
	else
	{
		echo "Dymei";
	}
}
?>