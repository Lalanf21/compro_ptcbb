<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Monel_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'monel_products/template';
		$this->load->view('template',$data);
	}

	public function Monel_Pipes_And_Tubes(){
		$data['content'] 			= 'monel_products/monel_pipes_and_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Monel_Pipe_Fittings(){
		$data['content'] 			= 'monel_products/monel_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Monel_Forged_Fitting(){
		$data['content'] 			= 'monel_products/monel_forged_fitting';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Monel_Flanges(){
		$data['content'] 			= 'monel_products/monel_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Monel_Bars(){
		$data['content'] 			= 'monel_products/monel_bars';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Monel_Sheets(){
		$data['content'] 			= 'monel_products/monel_sheets';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Monel_Fasteners(){
		$data['content'] 			= 'monel_products/monel_fasteners';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
}
 ?>