<?php
function aff_table()
{
$connect = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'root', '');

$test = $connect->query('SELECT * FROM jeux_video');
//$donnees = $test->fetch();

echo '<div class="panel panel-default">
  <div class="panel-heading">jeux_video</div>
  <table class="table">
  <thead>
			<tr>
				<th>nom</th>
				<th>possesseur</th>
				<th>console</th>
				<th>prix</th>
				<th>nbre_joueurs_max</th>
				<th>commentaires</th>
			</tr>
		</thead>
';

while ($donnees = $test->fetch())
{
	echo '<tr><td>' . $donnees['nom'] . '</td>' . '<td>' . $donnees['possesseur'] . '</td>' . '<td>' . $donnees['console'] . '</td>' .'<td>' . $donnees['prix'] . '</td>' .'<td>' . $donnees['nbre_joueurs_max'] . '</td>' . '<td>' . $donnees['commentaires'] . '</td>' .'<tr/>';
}
echo '</table>';
$test->closeCursor();

}
 
aff_table();

?>