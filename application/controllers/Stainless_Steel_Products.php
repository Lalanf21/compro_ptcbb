<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

class Stainless_Steel_Products extends CI_Controller {

	public function index()
	{
		$data['content'] = 'stainless_steel_products/template';
		$this->load->view('template',$data);
	}

	// pipes products
	public function Stainless_Steel_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_304_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304L_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_304l_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304H_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_304h_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	

	public function Stainless_Steel_310S_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_310s_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	

	public function Stainless_Steel_310H_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_310h_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	

	public function Stainless_Steel_316_Or_316L_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_Steel_316_or_316L_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	

	public function Stainless_Steel_316H_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_316h_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	

	public function Stainless_Steel_316Ti_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_316ti_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	

	public function Stainless_Steel_317_Or_317L_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_317_or_317l_Pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	

	public function Stainless_Steel_321_Or_321H_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_321_or_321h_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	


	public function Stainless_Steel_347_Or_347H_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_347_or_347h_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	


	public function Stainless_Steel_904L_Pipes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipes/stainless_steel_904l_pipes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}	
	/*--------------------------------------------------------------------------------*/

	// Tubes Products
	public function Stainless_Steel_tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_304_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304L_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel__304l_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304H_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_304h_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310S_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_310s_steel_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310H_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_310h_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316_Or_316L_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_316_or_316l_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316H_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_316h_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316Ti_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_316Ti_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_317_Or_317L_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_317_or_317l_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_321_Or_321H_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_321_or_321h_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_347_Or_347H_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_347_or_347h_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_904L_Tubes(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_tubes/stainless_steel_904l_tubes';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
	/*--------------------------------------------------------------------------------*/

	// stainles stell pipe fittings
	public function Stainless_Steel_pipe_fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_304_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304L_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_304l_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304H_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_304h_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310S_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_310s_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310H_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_310h_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_316_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316L_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_316l_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316H_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_316h_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316Ti_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_316Ti_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_317_Or_317L_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_317_or_317l_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_321_Or_321H_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_321_or_321h_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_347_Or_347H_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_347_or_347h_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_904L_Pipe_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_pipe_fittings/stainless_steel_904l_pipe_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
	/*--------------------------------------------------------------------------------*/

	// Stainless Stell Forged Fittings
	public function Stainless_Steel_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_304_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304L_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel304l_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304H_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_304h_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310S_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_310s_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310H_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_310h_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_316_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316L_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_316l_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316H_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_316h_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316Ti_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_316Ti_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_317_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_317_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_321_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_321_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_347_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_347_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_904L_Forged_Fittings(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_forged_fittings/stainless_steel_904l_forged_fittings';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
	/*--------------------------------------------------------------------------------*/

	// Stainless Steel Flanges
	public function Stainless_Steel_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_304_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304L_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_304l_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_304H_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_304h_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310S_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_310s_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_310H_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_310h_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_316_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316L_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_316l_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}

	public function Stainless_Steel_316H_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_316h_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}


	public function Stainless_Steel_316Ti_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_316Ti_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}


	public function Stainless_Steel_317_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_317_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}


	public function Stainless_Steel_321_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_321_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}


	public function Stainless_Steel_347_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_347_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}


	public function Stainless_Steel_904L_Flanges(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_flanges/stainless_steel_904l_flanges';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
	/*--------------------------------------------------------------------------------*/

	// Stainless Steel Sheets
	public function Stainless_Steel_Sheets(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_sheets/stainless_steel_sheets';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
	/*--------------------------------------------------------------------------------*/

	// stainless steel bars
	public function Stainless_Steel_Bars(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_bars/stainless_steel_bars';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
	/*--------------------------------------------------------------------------------*/

	// stainless Steel fasteners
	public function Stainless_Steel_Fasteners(){
		$data['content'] 			= 'stainless_steel_products/stainless_steel_fasteners/stainless_steel_fasteners';
		$data['sidebar'] 			= 'sidebar';
		$data['for_quotes_product'] = 'for_quotes_product';
		$this->load->view('template',$data);
	}
	/*--------------------------------------------------------------------------------*/

}
 ?>