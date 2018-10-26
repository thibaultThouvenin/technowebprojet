<?php

//Starting session
session_start();

//include database.php file
include("action/database.php");

//include checkUser.php file
include("checkUser.php");

$page = $_GET['page'];
 
//execute one script in a php action file
if (file_exists("action/'.$page'.php"))
	include(".$page.php");
?>
 
<html>
<head>

 </head>
 
<body>
	<?php include("view/header.php"); ?>
	<?php if (file_exists("view/'.$page'.php"))
			include(".$page.php");
	?>
</body>
</html>