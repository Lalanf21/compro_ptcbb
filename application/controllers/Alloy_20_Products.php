<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Alloy_20_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'alloy_20_products/template';
		$this->load->view('template',$data);
	}

	public function Alloy_20_Pipes_And_Tubes(){
		$data['content'] 			= 'alloy_20_products/alloy_20_pipes_and_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Alloy_20_Pipe_Fitting(){
		$data['content'] 			= 'alloy_20_products/alloy_20_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Alloy_20_Forged_Fitting(){
		$data['content'] 			= 'alloy_20_products/alloy_20_forged_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Alloy_20_Flanges(){
		$data['content'] 			= 'alloy_20_products/alloy_20_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Alloy_20_Bars(){
		$data['content'] 			= 'alloy_20_products/alloy_20_bars';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Alloy_20_Sheets(){
		$data['content'] 			= 'alloy_20_products/alloy_20_sheets';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Alloy_20_Fasteners(){
		$data['content'] 			= 'alloy_20_products/Alloy_20_Fasteners';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
}
 ?>