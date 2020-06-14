<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inconel_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'inconel_products/template';
		$this->load->view('template',$data);
	}

	public function Inconel_Pipes_And_Tubes(){
		$data['content'] 			= 'inconel_products/inconel_pipes_and_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Inconel_Pipe_Fittings(){
		$data['content'] 			= 'inconel_products/inconel_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Inconel_Forged_Fitting(){
		$data['content'] 			= 'inconel_products/inconel_forged_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Inconel_Flanges(){
		$data['content'] 			= 'inconel_products/inconel_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Inconel_Bars(){
		$data['content'] 			= 'inconel_products/inconel_bars';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Inconel_Sheets(){
		$data['content'] 			= 'inconel_products/inconel_sheets';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Inconel_Fasteners(){
		$data['content'] 			= 'inconel_products/inconel_fasteners';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
}
 ?>