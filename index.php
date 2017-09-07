<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<meta name="description" content="" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
</head>
<body>
<div id="wrapper">
<?php require 'bloks/header.php'; ?>
<?php $service = $_GET['service'];
	require 'sandbox.php';
		$id = $_GET['id'];


?>

 <div class="content"> 
	<form action="#" type="get">
		<input type="text" name="id" placeholder="ID" />
		<input type="text" name="phone" placeholder="Mobile phone" />
		<select name="service" id="">
			<option value="novaposhta">Nova poshta</option>
			<option value="ukrposhta">Ukr poshta</option>
		</select>
		<input type="submit" value="kek" />

	</form>

	<div class="result">

		<?php 
			if ($service == "ukrposhta"){
			if ($id == '')		echo ''; 	else echo substr(run_ukrposhta($id), -1);}
		?>
		<?php 
			if ($service == "novaposhta"){
				$phone = $_GET['phone'];
				echo send_nova_poshta($id, $phone)->{"Status"};
			}
		 ?>

	
	</div>


  </div>


  
<?php require 'bloks/footer.php'; ?>
	
	

	
	<script>
	
	
	</script>
		