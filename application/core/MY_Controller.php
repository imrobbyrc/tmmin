<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = array();
	protected $data_header = array();
	protected $data_footer = array();

	function __construct() {
		parent::__construct(); 
		$this->load->library('user_agent');
	}
  
}

class Public_controller extends MY_Controller {
 
	function __construct() { 
		parent::__construct();  
	}
}
