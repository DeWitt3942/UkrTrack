<?php 
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);





	function run_ukrposhta($id){
		file_put_contents('data.tx', $id);
		//$result = shell_exec('whoami');
		$result = shell_exec('python scrap.py');

		echo $result;
	}
	run_ukrposhta("0123456789123");
//	
?>
