<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 		= 'home';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= TRUE;
// $route['Category_alloy/(:any)'] 	= 'Alloy_Steel_Products/$1';

/*Route Carbon Steel Products*/
/*------------------------------------------------------------------------------------------------------------*/
/*Carbon steel pipes*/
$route['carbon-steel-products-supplier-indonesia']			='Carbon_Steel_Products';
$route['carbon-steel-seamless-pipe-supplier-indonesia']   = 'Carbon_Steel_Products/carbon_steel_seamless_pipes';
$route['astm-a53-gr-a-seamless-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/astm_a53_gr_a_seamless_pipes';
$route['astm-a53-gr-b-seamless-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/astm_a53_gr_b_seamless_pipes';
$route['astm-a53-gr-c-seamless-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/astm_a53_gr_c_seamless_pipes';
$route['astm-a106-gr-b-seamless-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/astm_a106_gr_b_seamless_pipes';
$route['astm-a106-gr-c-seamless-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/astm_a106_gr_c_seamless_pipes';
$route['mild-steel-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/mild_steel_pipes';
$route['cs-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/cs_pipes';
$route['ibr-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/ibr_pipes';
/*------------------------------------------------------------------------------------------------------------*/
/*carbon steel erw pipes*/
$route['carbon-steel-erw-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_erw_pipes';
$route['carbon-steel-is1239-part-1-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_is1239_part_1_pipes';
$route['carbon-steel-is3589-fe330-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_is3589_fe330_pipes';
$route['carbon-steel-is3589-fe410-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_is3589_fe410_pipes';
$route['carbon-steel-a53-gr-b-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_a53_gr_b_pipes';
$route['carbon-steel-astm-a671-welded-efw-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_astm_a671_welded_efw_pipes';
$route['carbon-steel-astm-a672-welded-efw-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_astm_a672_welded_efw_pipes';
$route['carbon-steel-bs-3059-gr-1-or-gr-2-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_bs_3059_gr_1_or_gr_2_pipes';
$route['carbon-steel-bs-1387-galvanized-erw-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_bs_1387_galvanized_erw_pipes';
$route['carbon-steel-din-17175-2391-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_din_17175_2391_pipes';
$route['carbon-steel-en-10217-welded-erw-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/carbon_steel_en_10217_welded_erw_pipes';
/*--------------------------------------------------------------------------------*/
// api_5l_pipes
$route['api-5-pipes-supplier-indonesia'] = 'Carbon_Steel_Products/api_5l_pipes';
$route['api-5l-x42-psl1-supplier-indonesia'] = 'Carbon_Steel_Products/api_5l_x42_psl1';

// titanium product
$route['titanium-pipes-and-tubes-supplier-indonesia'] = 'titanium_Product/titanium_pipes_and_tubes';
$route['titanium-pipe-fittings-supplier-indonesia'] = 'titanium_Product/titanium_pipe_fittings';
$route['titanium-forged-fitting-supplier-indonesia'] = 'titanium_Product/titanium_forged_fitting';
$route['titanium-flanges-supplier-indonesia'] = 'titanium_Product/titanium_flanges';
$route['titanium-bars-supplier-indonesia'] = 'titanium_Product/titanium_bars';
$route['titanium-sheets-supplier-indonesia'] = 'titanium_Product/titanium_sheets';
$route['titanium-fasteners-supplier-indonesia'] = 'titanium_Product/titanium_fasteners';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/

// Cupro Products
$route['cupro-nickel-products-supplier-indonesia']			='Cupro_Nickel_Products';
$route['cupro-nickel-pipes-and-tubes-supplier-indonesia']   ='Cupro_Nickel_Products/cupro_nickel_pipes_and_tubes';
$route['cu-ni-pipe-fitting-supplier-indonesia']   ='Cupro_Nickel_Products/cu_ni_pipe_fitting';
$route['cu-ni-forged-fitting-supplier-indonesia']   ='Cupro_Nickel_Products/cu_ni_forged_fitting';
$route['cu-ni-flanges-supplier-indonesia']   ='Cupro_Nickel_Products/cu_ni_flanges';
$route['cu-ni-bars-supplier-indonesia']   ='Cupro_Nickel_Products/cu_ni_bars';
$route['cu-ni-sheets-supplier-indonesia']   ='Cupro_Nickel_Products/cu_ni_sheets';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/

// Alloy 20
$route['alloy-20-products-supplier-indonesia']			='Alloy_20_Products';
$route['alloy-20-pipes-and-tubes-supplier-indonesia']   ='Alloy_20_Products/alloy_20_pipes_and_tubes';
$route['alloy-20-pipe-fitting-supplier-indonesia']   ='Alloy_20_Products/alloy_20_pipe_fitting';
$route['alloy-20-forged-fitting-supplier-indonesia']   ='Alloy_20_Products/alloy_20_forged_fitting';
$route['alloy-20-flanges-supplier-indonesia']   ='Alloy_20_Products/alloy_20_flanges';
$route['alloy-20-bars-supplier-indonesia']   ='Alloy_20_Products/alloy_20_bars';
$route['alloy-20-sheets-supplier-indonesia']   ='Alloy_20_Products/alloy_20_sheets';
$route['alloy-20-fasteners-supplier-indonesia']   ='Alloy_20_Products/Alloy_20_Fasteners';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/

// Monel Products
$route['monel-products-supplier-indonesia'] = 'Monel_Products';
$route['monel-pipes-and-tubes-supplier-indonesia']   ='Monel_Products/monel_pipes_and_tubes';
$route['monel-pipe-fitting-supplier-indonesia']   ='Monel_Products/monel_pipe_fittings';
$route['monel-forged-fitting-supplier-indonesia']   ='Monel_Products/monel_forged_fitting';
$route['monel-flanges-supplier-indonesia']   ='Monel_Products/monel_flanges';
$route['monel-bars-supplier-indonesia']   ='Monel_Products/monel_bars';
$route['monel-sheets-supplier-indonesia']   ='Monel_Products/monel_sheets';
$route['monel-fasteners-supplier-indonesia']   ='Monel_Products/monel_fasteners';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/

// inconel Products
$route['inconel-products-supplier-indonesia'] = 'Inconel_Products';
$route['inconel-pipes-and-tubes-supplier-indonesia']   ='Inconel_Products/inconel_pipes_and_tubes';
$route['inconel-pipe-fitting-supplier-indonesia']   ='Inconel_Products/inconel_pipe_fittings';
$route['inconel-forged-fitting-supplier-indonesia']   ='Inconel_Products/inconel_forged_fitting';
$route['inconel-flanges-supplier-indonesia']   ='Inconel_Products/inconel_flanges';
$route['inconel-bars-supplier-indonesia']   ='Inconel_Products/inconel_bars';
$route['inconel-sheets-supplier-indonesia']   ='Inconel_Products/inconel_sheets';
$route['inconel-fasteners-supplier-indonesia']   ='Inconel_Products/inconel_fasteners';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/

// hastelloy Product
$route['hastelloy-products-supplier-indonesia'] = 'Hastelloy_Products';
$route['hastelloy-pipes-and-tubes-supplier-indonesia']   ='Hastelloy_Products/hastelloy_pipes_and_tubes';
$route['hastelloy-pipe-fitting-supplier-indonesia']   ='Hastelloy_Products/hastelloy_pipe_fittings';
$route['hastelloy-forged-fitting-supplier-indonesia']   ='Hastelloy_Products/hastelloy_forged_fitting';
$route['hastelloy-flanges-supplier-indonesia']   ='Hastelloy_Products/hastelloy_flanges';
$route['hastelloy-bars-supplier-indonesia']   ='Hastelloy_Products/hastelloy_bars';
$route['hastelloy-sheets-supplier-indonesia']   ='Hastelloy_Products/hastelloy_sheets';
$route['hastelloy-fasteners-supplier-indonesia']   ='Hastelloy_Products/hastelloy_fasteners';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/

// Duplex steel products
$route['duplex_steel_products-supplier-indonesia'] = 'Duplex_Steel_Products';
$route['duplex-steel-pipe-supplier-indonesia']   ='Duplex_Steel_Products/duplex_steel_pipe';
$route['duplex-steel-tube-supplier-indonesia']   ='Duplex_Steel_Products/duplex_steel_tube';
$route['duplex-steel-pipe-fitting-supplier-indonesia']   ='Duplex_Steel_Products/duplex_steel_pipe_fitting';
$route['duplex-steel-forged-fitting-supplier-indonesia']   ='Duplex_Steel_Products/duplex_steel_forged_fitting';
$route['duplex-steel-flanges-supplier-indonesia']   ='Duplex_Steel_Products/duplex_steel_flanges';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/

// super duplex steel products
$route['super_duplex_steel_products-supplier-indonesia'] = 'Super_Duplex_Steel_Products';
$route['super-duplex-uns-s32750-pipes-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_s32750_pipe';
$route['super_duplex-uns-s32760-pipes-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_s32760_pipe';
$route['super-duplex-uns-s32750-tubes-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_s32750_tubes';
$route['super-duplex-uns-s32760-tubes-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_s32760_tubes';
$route['super-duplex-uns-s32750-fittings-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_s32750_fittings';
$route['super-duplex-uns-s32760-fittings-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_s32760_fittings';
$route['super-duplex-s32750-forged-fittings-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_s32750_forged_fittings';
$route['super-duplex-s32760-forged-fittings-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_s32760_forged_fittings';
$route['super-duplex-s32750-flanges-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_S32750_flanges';
$route['super-duplex-s32760-flanges-supplier-indonesia']   ='Super_Duplex_Steel_Products/super_duplex_uns_s32760_flanges';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/


/* Stainless steel products */
// stainless steel pipe
$route['stainless_steel_products-supplier-indonesia'] = 'Stainless_Steel_Products';
$route['stainless-steel-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_pipes';
$route['stainless-steel-304-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304_pipes';
$route['stainless-steel-304L-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304L_pipes';
$route['stainless-steel-304H-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304H_pipes';
$route['stainless-steel-310S-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310S_pipes';
$route['stainless-steel-310H-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310H_pipes';
$route['stainless-steel-316/316L-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316_or_316L_pipes';
$route['stainless-steel-316h-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316H_pipes';
$route['stainless-steel-316Ti-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316Ti_pipes';
$route['stainless-steel-317/317L-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_317_or_317l_pipes';
$route['stainless-steel-321/321H-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_321_or_321H_pipes';
$route['stainless-steel-347/347H-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_347_or_347H_pipes';
$route['stainless-steel-904L-pipes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_904L_pipes';
/*--------------------------------------------------------------------------------*/
// Stainless Steel Tubes
$route['stainless-steel-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_tubes';
$route['stainless-steel-304-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304_tubes';
$route['stainless-steel-304L-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304L_tubes';
$route['stainless-steel-304H-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304h_tubes';
$route['stainless-steel-310S-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310s_tubes';
$route['stainless-steel-310H-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310h_tubes';
$route['stainless-steel-316/316L-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316_or_316l_tubes';
$route['stainless-steel-316h-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316h_tubes';
$route['stainless-steel-316Ti-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316Ti_tubes';
$route['stainless-steel-317/317L-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_317_or_317l_tubes';
$route['stainless-steel-321/321H-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_321_or_321h_tubes';
$route['stainless-steel-347/347H-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_347_or_347h_tubes';
$route['stainless-steel-904L-tubes-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_904l_tubes';
/*--------------------------------------------------------------------------------*/
// Stainless Steel Pipe Fittings
$route['stainless-steel-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_pipe_fittings';
$route['stainless-steel-304-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304_pipe_fittings';
$route['stainless-steel-304L-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304l_pipe_fittings';
$route['stainless-steel-304H-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/Stainless_Steel_304H_pipe_fittings';
$route['stainless-steel-310S-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310s_pipe_fittings';
$route['stainless-steel-310H-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310h_pipe_fittings';
$route['stainless-steel-316-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316_pipe_fittings';
$route['stainless-steel-316L-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/Stainless_Steel_316L_Pipe_Fittings';
$route['stainless-steel-316h-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316h_pipe_fittings';
$route['stainless-steel-316Ti-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316Ti_pipe_fittings';
$route['stainless-steel-317/317L-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_317_or_317l_pipe_fittings';
$route['stainless-steel-321/321H-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_321_or_321h_pipe_fittings';
$route['stainless-steel-347/347H-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_347_or_347h_pipe_fittings';
$route['stainless-steel-904L-pipe-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_904l_pipe_fittings';
/*--------------------------------------------------------------------------------*/
// Stainless steel forged fittings
$route['stainless-steel-forged-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_forged_fittings';
$route['stainless-steel-forged-304-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304_forged_fittings';
$route['stainless-steel-forged-304L-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304l_forged_fittings';
$route['stainless-steel-forged-304H-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304h_forged_fittings';
$route['stainless-steel-forged-310S-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310s_forged_fittings';
$route['stainless-steel-forged-310H-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310h_forged_fittings';
$route['stainless-steel-forged-316-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316_forged_fittings';
$route['stainless-steel-forged-316L-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316l_forged_fittings';
$route['stainless-steel-forged-316H-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316h_forged_fittings';
$route['stainless-steel-forged-316Ti-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316Ti_forged_fittings';
$route['stainless-steel-forged-317-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_317_forged_fittings';
$route['stainless-steel-forged-321-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_321_forged_fittings';
$route['stainless-steel-forged-347-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_347_forged_fittings';
$route['stainless-steel-forged-904L-fittings-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_904l_forged_fittings';
/*--------------------------------------------------------------------------------*/
// stainless steel Flanges
$route['stainless-steel-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_flanges';
$route['stainless-steel-304-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304_flanges';
$route['stainless-steel-304L-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304l_flanges';
$route['stainless-steel-304H-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_304h_flanges';
$route['stainless-steel-310S-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310s_flanges';
$route['stainless-steel-310H-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_310h_flanges';
$route['stainless-steel-316-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316_flanges';
$route['stainless-steel-316L-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316l_flanges';
$route['stainless-steel-316H-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316h_flanges';
$route['stainless-steel-316Ti-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_316Ti_flanges';
$route['stainless-steel-317-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_317_flanges';
$route['stainless-steel-321-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_321_flanges';
$route['stainless-steel-347-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_347_flanges';
$route['stainless-steel-904L-flanges-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_904l_flanges';
/*--------------------------------------------------------------------------------*/
// stainless steel sheets
$route['stainless-steel-sheets-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_sheets';
/*--------------------------------------------------------------------------------*/
// stainless steel bars
$route['stainless-steel-bars-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_bars';
/*----------------------------------------------------------------------------
----*/
// stainless steel fasteners
$route['stainless-steel-fasteners-supplier-indonesia']   ='Stainless_Steel_Products/stainless_steel_fasteners';
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/
/*--------------------------------------------------------------------------------*/


/*alloy steel product*/
// alloy pipes
$route['alloy-steel-products-supplier-indonesia'] = 'Alloy_Steel_Products';
$route['alloy-steel-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_pipes';
$route['alloy-steel-p1-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p1_pipes';
$route['alloy-steel-p5-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p5_pipes';
$route['alloy-steel-p9-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p9_pipes';
$route['alloy-steel-p11-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p11_pipes';
$route['alloy-steel-p12-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p12_pipes';
$route['alloy-steel-p22-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p22_pipes';
$route['alloy-steel-p91-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p91_pipes';
$route['alloy-steel-p92-pipes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_p92_pipes';
/*--------------------------------------------------------------------------------*/
// Alloy steel tubes
$route['alloy-steel-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_tubes';
$route['alloy-steel-t1-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t1_tubes';
$route['alloy-steel-t5-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t5_tubes';
$route['alloy-steel-t9-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t9_tubes';
$route['alloy-steel-t11-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t11_tubes';
$route['alloy-steel-t12-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t12_tubes';
$route['alloy-steel-t22-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t22_tubes';
$route['alloy-steel-t91-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t91_tubes';
$route['alloy-steel-t92-tubes-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_t92_tubes';
/*--------------------------------------------------------------------------------*/
// Alloy steel pipe fittings
$route['alloy-steel-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_pipes_fitting';
$route['alloy-steel-wp1-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_wp1_pipes_fitting';
$route['alloy-steel-wp5-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_wp5_pipes_fitting';
$route['alloy-steel-wp9-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_wp9_pipes_fitting';
$route['alloy-steel-wp11-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_wp11_pipes_fitting';
$route['alloy-steel-wp12-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_wp12_pipes_fitting';
$route['alloy-steel-wp22-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_wp22_pipes_fitting';
$route['alloy-steel-wp91-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_wp91_pipes_fitting';
/*--------------------------------------------------------------------------------*/
// alloy steel forged fittings
$route['alloy-steel-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_fitting';
$route['alloy-steel-f1-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_f1_fitting';
$route['alloy-steel-f5-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_f5_fitting';
$route['alloy-steel-f9-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_f9_fitting';
$route['alloy-steel-f11-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_f11_fitting';
$route['alloy-steel-f12-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_f12_fitting';
$route['alloy-steel-f22-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_f22_fitting';
$route['alloy-steel-f91-forged-fittings-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_forged_f91_fitting';
/*--------------------------------------------------------------------------------*/
// Alloy steel flanges
$route['alloy-steel-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_flanges';
$route['alloy-steel-f1-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_f1_flanges';
$route['alloy-steel-f5-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_f5_flanges';
$route['alloy-steel-f9-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_f9_flanges';
$route['alloy-steel-f11-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_f11_flanges';
$route['alloy-steel-f12-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_f12_flanges';
$route['alloy-steel-f22-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_f22_flanges';
$route['alloy-steel-f91-flanges-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_f91_flanges';
/*--------------------------------------------------------------------------------*/
// Alloy steel plates
$route['alloy-steel-plates-products-supplier-indonesia'] = 'Alloy_Steel_Products/alloy_steel_plates';
/*--------------------------------------------------------------------------------*/

















