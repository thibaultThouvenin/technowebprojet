<?php


// Starting session
session_start();



//TODO include database.php file
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=databaseprojet;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



//TODO include checkUser.php file







// Chercher les produits et les afficher
$reponse = $bdd->query('SELECT * FROM products');
while ($donnees=$reponse->fetch())
{
	echo $donnees['name'];

}
?>