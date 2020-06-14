<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Duplex_Steel_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'duplex_steel_products/template';
		$this->load->view('template',$data);
	}

	public function Duplex_Steel_Pipe(){
		$data['content'] 			= 'duplex_steel_products/duplex_steel_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Duplex_Steel_Tube(){
		$data['content'] 			= 'duplex_steel_products/duplex_steel_tube';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Duplex_Steel_Pipe_Fitting(){
		$data['content'] 			= 'duplex_steel_products/duplex_steel_pipe_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Duplex_Steel_Forged_Fitting(){
		$data['content'] 			= 'duplex_steel_products/duplex_steel_forged_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Duplex_Steel_Flanges(){
		$data['content'] 			= 'duplex_steel_products/duplex_steel_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
}
 ?>