<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Cupro_Nickel_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'cupro_nickel_products/template';
		$this->load->view('template',$data);
	}

	public function Cupro_Nickel_Pipes_And_Tubes(){
		$data['content'] 			= 'cupro_nickel_products/cupro_nickel_pipes_and_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Cu_Ni_Pipe_Fitting(){
		$data['content'] 			= 'cupro_nickel_products/cu_ni_pipe_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Cu_Ni_Forged_Fitting(){
		$data['content'] 			= 'cupro_nickel_products/cu_ni_forged_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Cu_Ni_Flanges(){
		$data['content'] 			= 'cupro_nickel_products/cu_ni_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Cu_Ni_Bars(){
		$data['content'] 			= 'cupro_nickel_products/cu_ni_bars';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Cu_Ni_Sheets(){
		$data['content'] 			= 'cupro_nickel_products/cu_ni_sheets';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
}
 ?>