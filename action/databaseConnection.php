<?php

//Connexion a la bdd
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=databaseprojet;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>