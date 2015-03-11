<?php
function connect()
{
	if (!empty($_POST['login']) && !empty($_POST['password'])) {

		if (($_POST['login'] == 'admin') && ($_POST['password'] == 'root')) {
			$server = 'localhost';
			$base = 'phpmyadmin';
			$connect = mysql_connect($server,'root','') 
				or die ("erreur de connexion");
			mysql_select_db($base, $connect) 
				or die ("erreur de connexion base");

			session_start();
					$_SESSION['user'] = $_POST['login'];
					$_SESSION['password'] = $_POST['password'];
					$_SESSION['server'] = $server;

			header('Location: ../script/accueil.php');
		}
		else {
			header('Location: ../index.php');
		}
	}
	else {
		header('Location: ../index.php');
	}
}
connect();
?>