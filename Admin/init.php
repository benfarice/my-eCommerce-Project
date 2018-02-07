<?php
	//Routes
	$tpl = 'includes/templates/'; // template directory
	$css = 'layout/css/'; // Css directory
	$js = 'layout/js/'; // Js directory
	$lang = 'includes/languages/';//Language Directory
	//include 'includes/languages/arabic.php';
	include 'connect.php';


	// Include The Important Files

	include $lang.'english.php';
	include $tpl."header.php";

	//Include Navbar On all pages expect the one with $nonavbar variable

	if(!isset($noNavbar)){
		include $tpl."Navbar.php";
	}
	
	
	//include 'includes/languages/arabic.php';
	
?>