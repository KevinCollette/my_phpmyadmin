<?php
function aff_table()
{
$connect = new PDO('mysql:host=localhost;dbname=phpmyadmin;charset=utf8', 'root', '');

$test = $connect->query('SELECT nom FROM jeux_video');
//$donnees = $test->fetch();

echo '<div class="list-group">';

while ($donnees = $test->fetch())
{
	echo '<a class="list-group-item">' . $donnees['nom'] . '<br /><a/>';
}
echo '</div>';
$test->closeCursor();

}
 
aff_table();

?>