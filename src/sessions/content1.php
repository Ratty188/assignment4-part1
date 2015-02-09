<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

//set variables
$filepath = "";
$redirect = "";

//Pulled this from the lecture video. 
if ((isset($_POST['username']) && $_POST['username'] == 'end')){ //make sure username exists and is the last element
	$_SESSION = array(); //set session array to empty
	session_destroy(); //destroy the session

	//redirect after logout. I used these variables to redirect later in the program.
	$filepath = explode('/'. $_SERVER['PHP_SELF'], -1);
	$filepath = implode('/', $filepath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filepath;
	header("Location: {$redirect}/login.php", true);
	die();
}

if(session_status() == PHP_SESSION_ACTIVE){ //make sure that the session is active.

	//set username from post equal to session username.
	if(isset($_POST['username'])){
		$_SESSION['username'] = $_POST['username'];
	}

	//if no session username exists, redirect to login.
	//This makes sure that the user has gone through the login process.
	if (!isset($_SESSION['username'])){
		header("Location:$redirect.$filepath/login.php", true);
		exit();
	}

	//Set the number of visits to zero if the session just started.
	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}

	//if username is blank print statement with link to login screen.
	if (isset($_SESSION['username'])){
		if($_SESSION['username'] == "" || $_SESSION['username'] == null){
			echo "A username must be entered. Click ";
			echo "<a href=$redirect.$filepath/login.php?logout>Here</a>";
			echo " to return to the login screen.";	
		}

		//if user did provide username then print a statement with name, visits, and link to content2.php
		else{
			echo "Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before. Click ";
			echo "<a href=$redirect.$filepath/login.php?logout>Here</a>";
			echo " to logout.<br><br>";
			echo "<a href=$redirect.$filepath/content2.php>Content 2</a>";
			$_SESSION['visits']++;
		}
	}
}
?>

