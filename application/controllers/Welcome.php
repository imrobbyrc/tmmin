<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_controller {
 
	public function index()
	{ 
		
		// Meta Desc
		$this->data_header['browser_title'] =  ucwords('Home') . ' | Report Automation';
		$this->data_header['meta_description'] = ucwords('Home') . ' | Report Automation';
		$this->data_header['meta_image'] = base_url('assets/files/logo.jpg');
		$this->data_header['stylesheets'][0] = 'custom';

		// Footer 
		$this->data_footer['scripts'][0] = 'custom';

		if($this->agent->is_mobile()){
			$this->load->view('template/header', $this->data_header);
			$this->load->view('welcome_message');
			$this->load->view('template/footer', $this->data_footer);
		}else{
			$this->load->view('template/header', $this->data_header);
			$this->load->view('welcome_message');
			$this->load->view('template/footer', $this->data_footer);
		} 
	}
}
