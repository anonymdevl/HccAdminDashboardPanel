<?php
$conn = mysqli_connect('localhost','root','','hcc_startup');

if (!$conn){
	$err_msg = "Database Connection failed-".mysqli_connect_error();
	//echo $err_msg;
	//echo json_encode($err_msg);
}

	else {
		echo "connection successful";
	}


	//exit;

?>