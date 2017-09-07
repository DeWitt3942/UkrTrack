<?php
	$id = $_GET['id'];
	require 'sandbox.php';
	if ($id == '')
		echo '';
	else
		echo run_ukrposhta($id);
?>
