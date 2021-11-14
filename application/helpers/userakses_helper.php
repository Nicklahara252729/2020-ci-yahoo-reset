<?php
if(!defined('BASEPATH')) exit('no file allowed');
function check_session(){
	$Ci =& get_instance();
	$session = $Ci->session->userdata('status_login');
	if($session!=TRUE){
		redirect(site_url('/'));
	}
}

function is_logged(){
	$Ci =& get_instance();
	$session = $Ci->session->userdata('status_login');
	if($session==TRUE){
		redirect(site_url('dashboard'));
	}
}