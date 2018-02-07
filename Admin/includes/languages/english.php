<?php
	function lang($phrase){
		static $lang = array(
			'Home' => 'Home',
			'Categories' => 'Categories',
			'link' => 'link',
			'Edit_Profile' => 'Edit Profile',
			'Settings' => 'Settings',
			'Logout' => 'Logout'
		);
		return $lang[$phrase];
	}