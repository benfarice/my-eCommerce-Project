<?php
	include 'init.php';
	include $tpl."header.php";
	//include 'includes/languages/arabic.php';
	include 'includes/languages/english.php';
?>
	Welcome to Index


<?php
	echo lang('Message').' '.lang('Admin');
	include $tpl ."footer.php";
?>