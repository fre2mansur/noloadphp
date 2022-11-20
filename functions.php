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

function set_flash($state, $msg) {
	return $_SESSION['flash_msg'] = array('state'=>$state, 'msg'=>$msg);
}

function get_flash() {
	$msg = $_SESSION['flash_msg'];
	$res = json_encode($msg);
	echo $res;
	//echo "<div class=''>".$msg."</div>";
}

function show_flash() {
	return "<div id='showFlash' class='alert'></div>";
}

?>