<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quality_Assurance extends CI_Controller {

	public function index()
	{
		$data['content'] = 'quality_assurance';
		$this->load->view('template',$data);
	}
}
