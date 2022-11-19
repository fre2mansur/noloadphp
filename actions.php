<?php

$action = $_REQUEST['action'];
switch ($action) {
	case 'contact':
		include_once('actions/contact.php');
		break;
	
	default:
		# code...
		break;
}
 ?>