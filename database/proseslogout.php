<?php
	session_start();
	session_destroy();

	$url = 'http://'.$_SERVER['SERVER_NAME'].'/toko_online';
	header("Location: ".$url);
	
?>