<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hastelloy_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'hastelloy_products/template';
		$this->load->view('template',$data);
	}

	public function Hastelloy_Pipes_And_Tubes(){
		$data['content'] 			= 'hastelloy_products/hastelloy_pipes_and_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Hastelloy_Pipe_Fittings(){
		$data['content'] 			= 'hastelloy_products/hastelloy_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Hastelloy_Forged_Fitting(){
		$data['content'] 			= 'hastelloy_products/hastelloy_forged_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Hastelloy_Flanges(){
		$data['content'] 			= 'hastelloy_products/hastelloy_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Hastelloy_Bars(){
		$data['content'] 			= 'hastelloy_products/hastelloy_bars';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Hastelloy_Sheets(){
		$data['content'] 			= 'hastelloy_products/hastelloy_sheets';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Hastelloy_Fasteners(){
		$data['content'] 			= 'hastelloy_products/hastelloy_fasteners';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
}
 ?>