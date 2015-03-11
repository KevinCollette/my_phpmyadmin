<?php
if (!isset($_SESSION['login']))
{
	if (!empty($_POST['login']))
		{
				$serveur = "localhost";
				$base = "phpmyadmin";
				@$mysqli = new mysqli($serveur, $_POST['login'], $_POST['password'], $base);
				if ($mysqli->connect_error) {
				header('Location: ../index.php?erreur='.$mysqli->connect_error);
				echo "erreur d'authentification";
				exit;
			}
		else
			{
				session_start();
				$_SESSION['login'] = $_POST['login'];
				$_SESSION['password'] = $_POST['password'];
				$_SESSION['server'] = $serveur;
				header('Location: ../script/accueil.php');
			}
		}
	else
		{
			header('Location: ../index.php');
			echo "erreur d'authentification";
		}
}
?>