<?php
	if($_GET['name']=="logout")
	{
		session_destroy();
		setcookie("user",null,time()-1,"/");
		header("Location: index.php");
	}
?>