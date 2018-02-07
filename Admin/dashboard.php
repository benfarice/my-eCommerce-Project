<?php
	session_start();
	//print_r($_SESSION);
	if(isset($_SESSION['username'])){
		$pagetitle = 'Dashboard';
		include 'init.php';

		echo "welcome ".$_SESSION['username'] ;
		include $tpl ."footer.php";
	}else{
		//echo "You Are not Authorized To view this page";
		header('Location: index.php');
		exit();
	}