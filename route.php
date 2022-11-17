<?php include_once('functions.php');
$check = $_GET['page'];
switch ($check) {
	case 'about':
		include_once('pages/about.php');
		break;
	case 'contact':
		include_once('pages/contact.php');
		break;
	case 'home':
		include_once('pages/home.php');
		break;
	default:
		include_once('pages/home.php');
		break;
}

?>