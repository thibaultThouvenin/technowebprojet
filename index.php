<br><br><br>
<?php

//Starting session
session_start();

//include database.php file
include("action/databaseConnection.php");

//include checkUser.php file
include("action/checkUser.php");

$page = $_GET['page'];

//execute one script in a php action file
if (file_exists("action/'.$page'.php"))
	include(".$page.php");
?>
 
<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" title="ProjetWeb" href="ccsprojet.css"/>
</head>
 
<body>
	<?php include("view/header.php"); ?>
	<?php if (file_exists("view/'.$page'.php"))
			include(".$page.php");
		  else
			include("view/main.php"); 
	?>
</body>
</html>