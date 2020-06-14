<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carbon_Steel_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'carbon_steel_products/template';
		$this->load->view('template',$data);
	}
// Bagian method Carbon steel Pipes
	public function carbon_steel_seamless_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/carbon_steel_seamless_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function astm_a53_gr_a_seamless_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/astm_a53_gr_a_seamless_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function astm_a53_gr_b_seamless_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/astm_a53_gr_b_seamless_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function astm_a53_gr_c_seamless_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/astm_a53_gr_c_seamless_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function astm_a106_gr_b_seamless_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/astm_a106_gr_b_seamless_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function astm_a106_gr_c_seamless_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/astm_a106_gr_c_seamless_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function mild_steel_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/mild_steel_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function cs_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/cs_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function ibr_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_pipes/ibr_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
/*-------------------------------------------------------------------------------------------------------------*/	
// Bagian method Carbon steel erw pipes

	public function carbon_steel_erw_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_erw_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_is1239_part_1_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_is1239_part_1_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_is3589_fe330_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_is3589_fe330_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_is3589_fe410_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_is3589_fe410_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_a53_gr_b_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_a53_gr_b_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_astm_a671_welded_efw_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_astm_a671_welded_efw_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_astm_a672_welded_efw_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_astm_a672_welded_efw_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_bs_3059_gr_1_or_gr_2_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_bs_3059_gr_1_or_gr_2_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_bs_1387_galvanized_erw_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_bs_1387_galvanized_erw_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_din_17175_2391_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_din_17175_2391_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function carbon_steel_en_10217_welded_erw_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/carbon_steel_en_10217_welded_erw_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
/*--------------------------------controller API 5L Pipes--------------------------*/
	public function api_5l_pipes(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/api_5l_pipes/api_5l_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
	public function api_5l_x42_psl1(){
		$data['content'] 			= 'carbon_steel_products/carbon_steel_erw_pipes/api_5l_pipes/api_5l_x42_psl1';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);	
	}
}//penutup controllers
