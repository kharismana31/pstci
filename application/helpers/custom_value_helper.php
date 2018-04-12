<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	function custom_status_broadcasting($val){
		if($val === 'a'){
			return 'Sending By Admin';
		}
		elseif($val === 'm'){
			return 'Sending By Member';
		}
		else{
			return 'Sending By Public';
		}
	}
	
	function custom_status_inbox($val){
		if($val === 'a'){
			return 'Admin';
		}
		elseif($val === 'm'){
			return 'Member';
		}
		else{
			return 'Public';
		}
	}		