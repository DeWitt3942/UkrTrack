<?php
/*$service = $_GET['service'];
	$id = $_GET['id'];
	$phone = $_GET['phone'];*/
		function make_nova_poshta_request($document_number, $phone_number){
		$body = "{
    \"apiKey\": \"e342972086bddf53baf9ddd864d079bb\",
    \"modelName\": \"TrackingDocument\",
    \"calledMethod\": \"getStatusDocuments\",
    \"methodProperties\": {
        \"Documents\": [
            {
                \"DocumentNumber\": \"".$document_number."\",
                \"Phone\":\"".$phone_number."\"
            }
        ]
    }
    
}";
	return $body;
	}


	function send_nova_poshta($document_id, $phone){
		$body = make_nova_poshta_request($document_id, $phone);
		$url = 'http://testapi.novaposhta.ua/v2.0/en/documentsTracking/json/';
		$data = array('key1' => 'value1', 'key2' => 'value2');

		$options = array(
		    'http' => array(
		        'header'  => "Content-type: application/json\r\n",
		        'method'  => 'POST',
		        'content' => $body
		    )
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		if ($result === FALSE) { /* Handle error */ }
		//echo($document_id);
		$obj = json_decode($result);
		$obj = $obj->{"data"}[0];
		return $obj;
	}

	function run_ukrposhta($id){
		file_put_contents('data.tx', $id);
		//$result = shell_exec('whoami');
		$result = shell_exec('python scrap.py');

		echo $result;
	}
	
/*		switch ($service) {
		case 'novaposhta':
			echo json_encode(send_nova_poshta($id, $phone));
			break;
		
		case 'ukrposhta':
			echo run_ukrposhta($document_id);
			break;
		default:
			echo "YOU ARE A DUMBASS";
			# code...
			break;
	}
*/
?>
