<?php

//Affichage des différents produits
$listOfProducts = $bdd->query('SELECT * FROM products');
while ($donnees=$listOfProducts->fetch())
{
	echo $donnees['name'];
}

?>