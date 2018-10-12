<?php
//Connexion à la database -> il faut changer les informations telles que le 'dbname' en fonction du nom de votre database
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=webdatabase;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//Affichage des différents produits (fonctionnel)
$listOfProducts = $bdd->query('SELECT * FROM products');
while ($donnees=$listOfProducts->fetch())
{
	echo $donnees['name'];
}

//Ajout d'un article au panier (fonctionnel)
$bdd->exec("INSERT INTO orders(`user_id`, `type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`) VALUES(1, 'KART', 'KART', 100, 3, 4)");
?>