<?php
	session_start();

	//return to login if session username does not exist.
	if (!isset($_SESSION['username'])){
		header("Location:$redirect.$filepath/login.php", true);
		exit();
	}
	//Print link to the content 1 page.
	else{
	echo "<a href=$redirect.$filepath/content1.php>Content 1</a>";
	}
?>
