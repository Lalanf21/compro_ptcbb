<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Us extends CI_Controller {

	public function index()
	{
		$data['content'] = 'contact_us';
		$this->load->view('template',$data);
	}
}
