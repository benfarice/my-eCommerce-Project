<?php
	include 'init.php';
	include $tpl."header.php";
	//include 'includes/languages/arabic.php';
	include 'includes/languages/english.php';
?>
	<!--Welcome to Index-->

	<form class="login">
		<h4 class="text-center">Admin Login</h4>
		<input class="form-control" type="text" name="user" placeholder="Username" autocomplete="off" />
		<input class="form-control" type="password" name="pass"
		placeholder="Password" 
		autocomplete="new-password" />
		<input class="btn btn-primary btn-block" type="submit" name="" value="Login">
	</form>

<?php
	//echo lang('Message').' '.lang('Admin');
	include $tpl ."footer.php";
?>