<br><br><br><br>
<?php

//Starting session
session_start();

//include database.php file
include("action/databaseConnection.php");

//include checkUser.php file
include("action/checkUser.php");

global $page;
$page = $_GET['page'];

?>

<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" title="ProjetWeb" href="ccsprojet.css"/>
</head>
 
<body>
	<?php include("view/header.php"); ?>
	<?php 

	if (file_exists("action/".$page.".php")) {
		$path = "action/".$page.".php";
	} elseif (file_exists("view/".$page.".php")) {
		$path = "view/".$page.".php";
	}
		if (!empty($path))
			include ($path);
		else
		  	include ("view/main.php");
	?>
</body>
</html>