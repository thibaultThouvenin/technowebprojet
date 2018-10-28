<?php

$listOfOrders = $bdd->query('select o.* from orders o where o.user_id = :userId;');


?>