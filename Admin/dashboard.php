<?php
	session_start();
	//print_r($_SESSION);
	if(isset($_SESSION['username'])){
		echo "welcome ".$_SESSION['username'] ;
	}else{
		//echo "You Are not Authorized To view this page";
		header('Location: index.php');
		exit();
	}