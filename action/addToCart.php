<?php

//Ajout d'un article au panier (fonctionnel)
$bdd->exec("INSERT INTO orders(`user_id`, `type`, `status`, `amount`, `billing_adress_id`, `delivery_adress_id`) VALUES('.$user_id', 'KART', 'KART', 100, 3, 4)");

?>