<?php 

$data = '{"firstName":"John", "lastName":"Doe"}';

if (isset($_POST['packet'])) {
	//echo "Packet received with data: ".$_POST['packet'];	
	echo $data;
}


?>