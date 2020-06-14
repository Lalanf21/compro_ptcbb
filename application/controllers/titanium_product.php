<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Titanium_Product extends CI_Controller {

	public function index()
	{
		$data['content'] = 'titanium_Product/template';
		$this->load->view('template',$data);
	}

	public function titanium_pipes_and_tubes()
	{
		$data['content'] = 'titanium_Product/titanium_pipes_and_tubes';
		$data['sidebar'] = 'sidebar';
		$this->load->view('template',$data);
	}

	public function titanium_pipe_fittings()
	{
		$data['content'] = 'titanium_Product/titanium_pipe_fittings';
		$data['sidebar'] = 'sidebar';
		$this->load->view('template',$data);
	}

	public function titanium_forged_fitting()
	{
		$data['content'] = 'titanium_Product/titanium_forged_fitting';
		$data['sidebar'] = 'sidebar';
		$this->load->view('template',$data);
	}


	public function titanium_flanges()
	{
		$data['content'] = 'titanium_Product/titanium_flanges';
		$data['sidebar'] = 'sidebar';
		$this->load->view('template',$data);
	}

	public function titanium_bars()
	{
		$data['content'] = 'titanium_Product/titanium_bars';
		$data['sidebar'] = 'sidebar';
		$this->load->view('template',$data);
	}

	public function titanium_sheets()
	{
		$data['content'] = 'titanium_Product/titanium_sheets';
		$data['sidebar'] = 'sidebar';
		$this->load->view('template',$data);
	}

	public function titanium_fasteners()
	{
		$data['content'] = 'titanium_Product/titanium_fasteners';
		$data['sidebar'] = 'sidebar';
		$this->load->view('template',$data);
	}
	
}
