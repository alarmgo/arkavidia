<?php

$session = 1;

if($session==0) {
	$this->load->view('_parts/navbar_guest');
}else{
	$this->load->view('_parts/navbar_user');
}
