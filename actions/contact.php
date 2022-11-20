<?php
//print_r($_REQUEST);
//set flash as your condition
if($_REQUEST['firstName'] && $_REQUEST['username']) {
	//do your things
	set_flash('success', 'Submission success');
} else {
	set_flash('error', 'Couldnt submit the form');
}

//return flash response
get_flash();

 ?>
