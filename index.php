<?php
include_once ('../../../tribe.init.php');

if (!$_SESSION['user']['id']) {ob_start(); header ('Location: /user/login'); die();}

include_once (__DIR__.'/header.php');

if (($types['webapp']['user_theme']??false) && file_exists(THEME_PATH.'/user-index.php')):
	
	include_once (THEME_PATH.'/user-index.php');

endif; ?>

<?php include_once (__DIR__.'/footer.php'); ?>