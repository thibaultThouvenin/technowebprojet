<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=databaseprojet;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM products');
while ($donnees=$reponse->fetch())
{
	echo $donnees['name'];

}
?>