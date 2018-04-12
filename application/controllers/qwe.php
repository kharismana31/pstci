<?php 
	class qwe extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('date');
		}
		
		function index(){
			echo shortdate_indo(date('Y-m-d'));
			echo "<br/>";
			echo date_indo(date('Y-m-d'));
			echo "<br/>";
			echo mediumdate_indo(date('Y-m-d'));
			echo "<br/>";
			echo longdate_indo(date('Y-m-d')).date(" h:m:s");
		}
	}			