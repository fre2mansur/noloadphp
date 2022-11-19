<?php 
function get_param($level = 1) {
	$param = explode('/', $_SERVER['REQUEST_URI']);
	return $param[$level];
}
function container() {
	return "<div id='content'></div>";
}

function noload_nav($route) {
	$active_class ="";
 	if($route == $_GET['page']) {
 		$active_class = 'active';
 	}
	echo "<span class='noload-nav nav-link $active_class text-capitalize' onclick='noload_route(`$route`)'>$route</span>";
}

function noload_action($action) { 
	echo "action=\"javascript:;\" onsubmit=\"noload_action(this, '".$action."')\" ";
 } 

function noload_flash($state, $msg) {
	return $_SESSION[$state] = $msg;
}
?>