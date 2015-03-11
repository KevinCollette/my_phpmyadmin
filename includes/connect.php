<?php
function connect()
{
	if (!empty($_POST['login']) && !empty($_POST['password'])) {

		if (($_POST['login'] == 'admin') && ($_POST['password'] == 'adminadmin')) {
			$server = 'localhost';
			$base = 'phpmyadmin';
			$connect = mysqli_connect($server,'root','', $base) 
				or die ("erreur de connexion");

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