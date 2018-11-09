<?php 

//Ajout d'un nouvel utilisateur dans la base de donnee 
function addNewUser(){
	if(ISSET($_POST['submit']))
	{
		$pseudo=$POST_[pseudo];
		$prenom=$POST_[prenom];
		$nom=$POST_[nom];
		$telephone=$POST_[telephone];
		$numero=$POST_[numero];
		$adresse=$POST_[adresse];
		$codePostal=$POST_[codePostal];
		$ville=$POST_[ville];
		$motdePasse=$POST_[passe];
		$adresseMail=$POST_[email];
		$bdd->exec("INSERT INTO users(`username`, `email`, `password`) VALUES(:pseudo ,:email,:motdePasse)");
		$id=$bdd->exec('SELECT id FROM users WHERE id=MAX(id)');
		$created_at=$bdd->exec('SELECT created_at FROM users')
		$updated_at=$bdd->exec('SELECT updated_at FROM users')
		$nomComplet=$prenom . $nom;
		$bdd->exec("INSERT INTO ordre_adresses('id','human_name','address_one','postal_code','city','country','created_at','updated_at')VALUES(:id,:nomComplet,:adresse;:codePostal,:ville,'France',:created_at,:updated_at)");
	}
}
?>