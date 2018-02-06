<?php
	include 'init.php';
	include $tpl."header.php";
	//include 'includes/languages/arabic.php';
	include 'includes/languages/english.php';



	// Check if User Coming From HTTP Post Request
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		//echo $username .'  '.$password;
		$hashedPass = sha1($password);
		//echo $hashedPass;
		// Check if the user exist in database
		$stmt = $con->prepare("select username,password from users where username = ? and password = ? and GroupID = 1");
		$stmt->execute(array($username,$hashedPass));
		$count = $stmt->rowCount();
		//echo $count;
		// If count > 0 this mean the database contain record about this username
		if($count > 0){
			echo "welcome ".$username ;
		}
	}
?>
	<!--Welcome to Index-->

	<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>"
		method="POST">
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