<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Super_Duplex_Steel_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'super_duplex_steel_products/template';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_UNS_S32750_Pipe(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_uns_s32750_pipe';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_UNS_S32760_Pipe(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_uns_s32760_pipe';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_UNS_S32750_Tubes(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_uns_s32750_tube';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}


	public function Super_Duplex_UNS_S32760_Tubes(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_uns_s32760_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_UNS_S32750_Fittings(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_uns_s32750_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_UNS_S32760_Fittings(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_uns_s32760_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_S32750_Forged_Fittings(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_s32750_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_S32760_Forged_Fittings(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_s32760_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_UNS_S32750_Flanges(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_s32750_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Super_Duplex_UNS_S32760_Flanges(){
		$data['content'] 			= 'super_duplex_steel_products/super_duplex_s32760_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
}
 ?>