<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/etc/common.php";

	$out = array();

	if(empty($_POST)){
		$out['status'] = "error";
		$out['msg'] = "No \$_POST was given.";
	} else{
		if($_POST['action'] == "update"){
			#
		} elseif($_POST['action'] == "window"){
			#
		} else{
			#
		}
	}

	echo json_encode($out);
?>