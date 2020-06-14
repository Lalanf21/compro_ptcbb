<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Us extends CI_Controller {

	public function index()
	{
		$data['content'] = 'about_us';
		$this->load->view('template',$data);
	}
}
