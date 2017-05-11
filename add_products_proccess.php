<?php  
include ("dbconnect.php");
$action        = $_REQUEST['gem'];
$view          = $action;
$redirect_page = 0;
switch($action)
{	
case '2KW' :
$pro_mdl		= mysqli_real_escape_string($conn,$_POST['kw_prd_model']);
$kdsap = mysqli_real_escape_string($conn,$_POST['kw_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['kw_descrp']);
$kw_ac_r134		= mysqli_real_escape_string($conn,$_POST['kw_ac_r134']);
$kw_cap			= mysqli_real_escape_string($conn,$_POST['kw_cap']);
$wrk_press		= mysqli_real_escape_string($conn,$_POST['kw_wrk_pressure']);
$kw_ac_io		= mysqli_real_escape_string($conn,$_POST['kw_ac_io']);
$pwr_cons		= mysqli_real_escape_string($conn,$_POST['kw_pwr_cons']);
$kw_delv		= mysqli_real_escape_string($conn,$_POST['kw_delivery_times']);
$kw_ec230v		= mysqli_real_escape_string($conn,$_POST['kw_ec_230v']);
$kw_ec415v		= mysqli_real_escape_string($conn,$_POST['kw_ec_415v']);
$kw_wrnty_doc	= mysqli_real_escape_string($conn,$_POST['kw_warnty_doc']);
$kw_wrnty_doi	= mysqli_real_escape_string($conn,$_POST['kw_warnty_doi']);
$kw_weight		= mysqli_real_escape_string($conn,$_POST['kw_weght']);
//$kw_discunt		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_2kw`(`2kw_id`, `product_model`,`sap_code`,`description`, `2kw_air_cooled_r134`, `2kw_capacity`, `2kw_working_pressure`, `2kw_air_connection_in_out`, `2kw_power_consumption`, `2kw_delivery_terms`, `2kw_electric_230v`, `2kw_electric_415v`, `2kw_warrenet_doc`, `2kw_warrenty_doi`, `2kw_weight`) VALUES ('','$pro_mdl','$kdsap','$kddesc','$kw_ac_r134','$kw_cap','$wrk_press','$kw_ac_io','$pwr_cons','$kw_delv','$kw_ec230v','$kw_ec415v','$kw_wrnty_doc','$kw_wrnty_doi','$kw_weight')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'AT' :
$a_t_Prd_model			= mysqli_real_escape_string($conn,$_POST['at_Prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['at_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['at_descrp']);
$a_t_cap				= mysqli_real_escape_string($conn,$_POST['at_cap']);
$a_t_model_var			= mysqli_real_escape_string($conn,$_POST['at_model_var']);
$a_t_model_var_accesrs	= mysqli_real_escape_string($conn,$_POST['at_model_var_accesrs']);
$a_t_shell				= mysqli_real_escape_string($conn,$_POST['at_shell']);
$a_t_io_out				= mysqli_real_escape_string($conn,$_POST['at_io_out']);
$a_t_delivry			= mysqli_real_escape_string($conn,$_POST['at_delivry']);
$a_t_hnd_hol			= mysqli_real_escape_string($conn,$_POST['at_hnd_hol']);
$a_t_warranty_doc		= mysqli_real_escape_string($conn,$_POST['at_warranty_doc']);
$a_t_warranty_doi		= mysqli_real_escape_string($conn,$_POST['at_warranty_doi']);
$a_t_moc				= mysqli_real_escape_string($conn,$_POST['at_moc_coc']);
$a_t_wght				= mysqli_real_escape_string($conn,$_POST['at_wght']);
//$pro_cost	= mysqli_real_escape_string($conn,$_POST['product_cost']);
//$dis		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_at`(`at_id`,`product_model`,`sap_code`,`description`, `at_capacity`, `at_mv_bar`, `at_mv_accessories`, `at_shell_thick`, `at_in_out_connection`, `at_delevery_trm`, `at_hand_hole`, `at_warenty_doc`, `at_warenty_doi`, `at_moc`, `at_weight`) VALUES ('','$a_t_Prd_model','$kdsap','$kddesc','$a_t_cap','$a_t_model_var','$a_t_model_var_accesrs','$a_t_shell','$a_t_io_out','$a_t_delivry','$a_t_hnd_hol','$a_t_warranty_doc','$a_t_warranty_doi','$a_t_moc','$a_t_wght')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case '2KD':
$kdprd_model	= mysqli_real_escape_string($conn,$_POST['kdprd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['kd_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['kd_descrp']);
$kdac_r134	= mysqli_real_escape_string($conn,$_POST['kdac_r134']);
$kdac_r404c	= mysqli_real_escape_string($conn,$_POST['kdac_r404c']);
$kdac_r407c	= mysqli_real_escape_string($conn,$_POST['kdac_r407cs']);
$kdcap	= mysqli_real_escape_string($conn,$_POST['kdcap']);
$kdwrk_pressure	= mysqli_real_escape_string($conn,$_POST['kdwrk_pressure']);
$kdac_io	= mysqli_real_escape_string($conn,$_POST['kdac_io']);
$kdrate_pwr_kw		= mysqli_real_escape_string($conn,$_POST['kdrate_pwr_kw']);
$kddelivery_terms	= mysqli_real_escape_string($conn,$_POST['kddelivery_terms']);
$kdec_220v	= mysqli_real_escape_string($conn,$_POST['kdec_220v']);
$kdec_415v	= mysqli_real_escape_string($conn,$_POST['kdec_415v']);
$kdwarranty_doc	= mysqli_real_escape_string($conn,$_POST['kdwarranty_doc']);
$kdwarranty_doi	= mysqli_real_escape_string($conn,$_POST['kdwarranty_doi']);
$kdweight		= mysqli_real_escape_string($conn,$_POST['kdweight']);
//$pro_cost	= mysqli_real_escape_string($conn,$_POST['product_cost']);
//$dis		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_2kd`(`2kd_id`, `product_model`,`sap_code`,`description`, `2kd_ac_r134a`, `2kd_ac_r404a`, `2kd_ac_r407c`, `2kd_capty_cfm`, `2kd_wrk_pressure`, `2kd_ac_in_out`, `2kd_rat_pwr`, `2kd_delvry_term`, `2kd_ec_220v`, `2kd_ec_415v`,`2kd_wrnt_doc`, `2kd_wrnt_doi`, `weight`) VALUES ('','$kdprd_model','$kdsap','$kddesc','$kdac_r134','$kdac_r404c','$kdac_r407c','$kdcap','$kdwrk_pressure','$kdac_io','$kdrate_pwr_kw','$kddelivery_terms','$kdec_220v','$kdec_415v','$kdwarranty_doc','$kdwarranty_doi','$kdweight')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case '2KD7':
$kd7_prd_models		= mysqli_real_escape_string($conn,$_POST['kd7_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['kd7_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['kd7_descrp']);
$kd7_ac_r134s		= mysqli_real_escape_string($conn,$_POST['kd7_ac_r134']);
$kd7_caps			= mysqli_real_escape_string($conn,$_POST['kd7_cap']);
$kd7_wrk_pressures	= mysqli_real_escape_string($conn,$_POST['kd7_wrk_pressure']);
$kd7_ac_ios			= mysqli_real_escape_string($conn,$_POST['kd7_ac_io']);
$kd7_pwr_conss		= mysqli_real_escape_string($conn,$_POST['kd7_pwr_cons']);
$kd7_delivery_timess= mysqli_real_escape_string($conn,$_POST['kd7_delivery_times']);
$kd7_ec_230vs		= mysqli_real_escape_string($conn,$_POST['kd7_ec_230v']);
$kw_ec_415vs		= mysqli_real_escape_string($conn,$_POST['kd7_ec_415v']);
$kd7_warnty_docs	= mysqli_real_escape_string($conn,$_POST['kd7_warnty_doc']);
$kd7_warnty_dois	= mysqli_real_escape_string($conn,$_POST['kd7_warnty_doi']);
$kd7_weghts			= mysqli_real_escape_string($conn,$_POST['kd7_weght']);
$kd7_airs			= mysqli_real_escape_string($conn,$_POST['kd7_air']);
$kd7_dews			= mysqli_real_escape_string($conn,$_POST['kd7_dew']);
$kd7_ambientss		= mysqli_real_escape_string($conn,$_POST['kd7_ambient']);
//$kw_discunt		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_2kd7`(`kd7_id`, `product_model`,`sap_code`,`description`, `kd7_acr134a`, `kd7_capcty`, `kd7_wrkpressur`, `kd7_ac_inout`, `kd7_rate_pwr`, `kd7_delvr`, `kd7_elec_230v`, `kd7_elec_415v`, `kd7_warenty_doc`, `kd7_warenty_doi`, `kd7_weigt`, `kd7_air_inlet`, `kd7_dew_pt`, `kd7_ambinet`) VALUES ('','$kd7_prd_models','$kdsap','$kddesc','$kd7_ac_r134s','$kd7_caps','$kd7_wrk_pressures','$kd7_ac_ios','$kd7_pwr_conss','$kd7_delivery_timess','$kd7_ec_230vs','$kw_ec_415vs','$kd7_warnty_docs','$kd7_warnty_dois','$kd7_weghts','$kd7_airs','$kd7_dews','$kd7_ambientss')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'HLN':
$hln_prd_models				= mysqli_real_escape_string($conn,$_POST['hln_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['hln_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['hln_descrp']);
$hln_is2825s				= mysqli_real_escape_string($conn,$_POST['hln_is2825']);
$hln_activated_65s			= mysqli_real_escape_string($conn,$_POST['hln_activated_65']);
$hln_airflowss				= mysqli_real_escape_string($conn,$_POST['hln_airflows']);
$hln_inlets					= mysqli_real_escape_string($conn,$_POST['hln_inlet']);
$hld_airflss				= mysqli_real_escape_string($conn,$_POST['hln_desicant_qty']);
$hln_delvrys				= mysqli_real_escape_string($conn,$_POST['hln_delvry']);
$hln_wrnty_docs				= mysqli_real_escape_string($conn,$_POST['hln_wrenty_doc']);
$hln_wrnty_dois				= mysqli_real_escape_string($conn,$_POST['hln_wrenty_doi']);
$hln_wrk_press				= mysqli_real_escape_string($conn,$_POST['hln_wrk_pres']);
$hln_rate_conditioninlets	= mysqli_real_escape_string($conn,$_POST['hln_rate_conditioninlet']);
$hln_rate_conditiontemps	= mysqli_real_escape_string($conn,$_POST['hln_rate_conditiontemp']);
$hln_wights					= mysqli_real_escape_string($conn,$_POST['hln_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_hln`(`hln_id`, `product_model`,`sap_code`,`description`, `hln_daa_is2825_price`, `hln_dms_is2825_price`, `hln_airflow_cfm`, `hln_in_out_flg`, `hln_dessiccant_qty`, `hln_delivery_trm`, `hln_wrnty_doc`, `hln_wrnty_doi`, `hln_wrk_pressure`, `hn_inlet_temp`, `hn_admos_dew_pt`, `hln_weight`) VALUES ('','$hln_prd_models','$kdsap','$kddesc','$hln_is2825s','$hln_activated_65s','$hln_airflowss','$hln_inlets','$hld_airflss','$hln_delvrys','$hln_wrnty_docs','$hln_wrnty_dois','$hln_wrk_press','$hln_rate_conditioninlets','$hln_rate_conditiontemps','$hln_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'HLD':
$hld_prd_models					= mysqli_real_escape_string($conn,$_POST['hld_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['hld_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['hld_descrp']);
$hld_desiccantalumina_50s		= mysqli_real_escape_string($conn,$_POST['hld_desiccantalumina_50']);
$hld_Construction_prices		= mysqli_real_escape_string($conn,$_POST['hld_construction_price']);
$hld_is2825s					= mysqli_real_escape_string($conn,$_POST['hld_is2825']);
$hld_molecular_constructs		= mysqli_real_escape_string($conn,$_POST['hld_molecular_construct']);
$hld_airfls						= mysqli_real_escape_string($conn,$_POST['hld_airfl']);
$hld_inlets						= mysqli_real_escape_string($conn,$_POST['hld_inlet']);
$hld_qtys						= mysqli_real_escape_string($conn,$_POST['hld_qty']);
$hld_delvrys					= mysqli_real_escape_string($conn,$_POST['hld_delvry']);
$hld_wrkngpres					= mysqli_real_escape_string($conn,$_POST['hld_wrkngpres']);
$hld_warnty_docs				= mysqli_real_escape_string($conn,$_POST['hld_warenty_doc']);
$hld_warnty_dois				= mysqli_real_escape_string($conn,$_POST['hld_warnty_doi']);
$hld_wights						= mysqli_real_escape_string($conn,$_POST['hld_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_hld`(`hld_id`, `product_model`,`sap_code`,`description`, `hld_daa_is2825cc`, `hld_daa_asme_cc`, `hld_dms_is2825_cc`, `hld_dms_asme_cc`, `hld_air_flow_cfm`, `hld_inlet_outlet_flg`, `hld_desiccant_qty`, `hld_warnty_doc`, `hld_warenty_doi`, `hld_wrk_pressure`, `hld_delivery_trm`, `hld_weight`) VALUES ('','$hld_prd_models','$kdsap','$kddesc','$hld_desiccantalumina_50s','$hld_Construction_prices','$hld_is2825s','$hld_molecular_constructs','$hld_airfls','$hld_inlets','$hld_qtys','$hld_delvrys',
'$hld_wrkngpres','$hld_warnty_docs','$hld_warnty_dois','$hld_wights')");
if($sql){
echo '1' ;
}
else {
echo '2';
}	
break;
case 'SPD':
$spd_prd_models	= mysqli_real_escape_string($conn,$_POST['spd_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['spd_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['spd_descrp']);
$spd_mss    	= mysqli_real_escape_string($conn,$_POST['spd_ms']);
$spd_airs		= mysqli_real_escape_string($conn,$_POST['spd_air']);
$spd_inlet_outs	= mysqli_real_escape_string($conn,$_POST['spd_inlet_out']);
$spd_delis		= mysqli_real_escape_string($conn,$_POST['spd_deli']);
$spd_wrnt_docs	= mysqli_real_escape_string($conn,$_POST['spd_wrnt_doc']);
$spd_wrnt_dois	= mysqli_real_escape_string($conn,$_POST['spd_wrnt_doi']);
$spd_ins		= mysqli_real_escape_string($conn,$_POST['spd_in']);
$spd_atmos		= mysqli_real_escape_string($conn,$_POST['spd_atmo']);
$spd_accs		= mysqli_real_escape_string($conn,$_POST['spd_acc']);
$spd_wrkprss	= mysqli_real_escape_string($conn,$_POST['spd_wrkprs']);
$spd_wgts		= mysqli_real_escape_string($conn,$_POST['spd_wgt']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_spd`(`spd_id`, `product_model`,`sap_code`,`description`, `spd_moleculer_sieve_pric`, `spd_air_flow`, `spd_inlet_outlet`, `spd_delivery_trm`, `spd_warnty_doc`, `spd_warnty_doi`, `spd_inlet_temp`, `spd_atmospheric_dew_pt`, `spd_access`,`spd_wrk_pressure`,`spd_weight`) VALUES ('','$spd_prd_models','$kdsap','$kddesc','$spd_mss','$spd_airs','$spd_inlet_outs','$spd_delis','$spd_wrnt_docs','$spd_wrnt_dois','$spd_ins','$spd_atmos','$spd_accs','$spd_wrkprss','$spd_wgts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'NXG':
$nxg_prdt_models= mysqli_real_escape_string($conn,$_POST['nxg_prdt_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['nxg_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['nxg_descrp']);
$nxg_ac_r134as	= mysqli_real_escape_string($conn,$_POST['nxg_ac_r134a']);
$nxg_ac_r404as	= mysqli_real_escape_string($conn,$_POST['nxg_ac_r404a']);
$nxg_ac_r407cs	= mysqli_real_escape_string($conn,$_POST['nxg_ac_r407c']);
$nxg_caps		= mysqli_real_escape_string($conn,$_POST['nxg_cap']);
$nxg_wrk_press	= mysqli_real_escape_string($conn,$_POST['nxg_wrk_pres']);
$nxg_ac_ios		= mysqli_real_escape_string($conn,$_POST['nxg_ac_io']);
$nxg_rp_kws		= mysqli_real_escape_string($conn,$_POST['nxg_rp_kw']);
$nxg_delis		= mysqli_real_escape_string($conn,$_POST['nxg_deli']);
$nxg_ec_220vs	= mysqli_real_escape_string($conn,$_POST['nxg_ec_220v']);
$nxg_ec_415vs	= mysqli_real_escape_string($conn,$_POST['nxg_ec_415v']);
$nxg_wrnt_docs	= mysqli_real_escape_string($conn,$_POST['nxg_wrnt_doc']);
$nxg_wrnt_dois	= mysqli_real_escape_string($conn,$_POST['nxg_wrnt_doi']);
$nxg_wghts		= mysqli_real_escape_string($conn,$_POST['nxg_wght']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_nxg_nex_gen`(`nxg_id`, `product_model`,`sap_code`,`description`, `nxg_air_cooled_r134a`, `nxg_air_cooled_r404a`, `nxg_air_cooled_r407c`, `nxg_capacity_cfm`, `nxg_working_pressure`, `nxg_air_connection_in_out`, `nxg_rate_power_kw`, `nxg_delivery_terms`, `nxg_electrical_connection_220v`, `nxg_electrical_connection_415v`, `nxg_warrenty_doc`, `nxg_warrenty_doi`, `nxg_weight`) VALUES ('','$nxg_prdt_models','$kdsap','$kddesc','$nxg_ac_r134as','$nxg_ac_r404as','$nxg_ac_r407cs','$nxg_caps','$nxg_wrk_press','$nxg_ac_ios','$nxg_rp_kws','$nxg_delis','$nxg_ec_220vs','$nxg_ec_415vs','$nxg_wrnt_docs','$nxg_wrnt_dois','$nxg_wghts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'RAD' :
$rad_prd_models	= mysqli_real_escape_string($conn,$_POST['rad_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['rad_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['rad_descrp']);
$rad_wcr_r407s	= mysqli_real_escape_string($conn,$_POST['rad_wcr_r407']);
$rad_caps		= mysqli_real_escape_string($conn,$_POST['rad_cap']);
$rad_ios		= mysqli_real_escape_string($conn,$_POST['rad_io']);
$rad_rpec_415s	= mysqli_real_escape_string($conn,$_POST['rad_rpec_415']);
$rad_delis		= mysqli_real_escape_string($conn,$_POST['rad_deli']);
$rad_wrk_press	= mysqli_real_escape_string($conn,$_POST['rad_wrk_pres']);
$rad_wrnt_docs	= mysqli_real_escape_string($conn,$_POST['rad_wrnt_doc']);
$rad_wrnt_dois	= mysqli_real_escape_string($conn,$_POST['rad_wrnt_doi']);
$rad_wgts		= mysqli_real_escape_string($conn,$_POST['rad_wgt']);
//$kw_discunt		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_rad`(`rad_id`, `product_model`, `sap_code`, `description`, `rad_mv_water_cooled_ref_r407c`, `rad_mv_capacity`, `rad_mv_in_out`, `rad_mv_rate_pow_ele_conn_415_3a`, `rad_delivery_terms`, `rad_wrk_pressur`, `rad_warrenty_doc`, `rad_warrenty_doi`, `rad_weight`) VALUES ('','$rad_prd_models','$kdsap','$kddesc','$rad_wcr_r407s','$rad_caps','$rad_ios','$rad_rpec_415s','$rad_delis','$rad_wrk_press','$rad_wrnt_docs','$rad_wrnt_dois','$rad_wgts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'CHT MINI' :
$cht_prd_models			= mysqli_real_escape_string($conn,$_POST['cht_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['cht_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['cht_descrp']);
$cht_1_3acr22s			= mysqli_real_escape_string($conn,$_POST['cht_1_3acr22']);
$cht_1_3acphes			= mysqli_real_escape_string($conn,$_POST['cht_1_3acphe']);
$cht_caps				= mysqli_real_escape_string($conn,$_POST['cht_cap']);
$cht_heats				= mysqli_real_escape_string($conn,$_POST['cht_heat']);
$cht_heat_kws			= mysqli_real_escape_string($conn,$_POST['cht_heat_kw']);
$aht_water_flws			= mysqli_real_escape_string($conn,$_POST['aht_water_flw']);
$cht_water_pumps		= mysqli_real_escape_string($conn,$_POST['cht_water_pump']);
$cht_coolingfans		= mysqli_real_escape_string($conn,$_POST['cht_coolingfan']);
$cht_in_outs			= mysqli_real_escape_string($conn,$_POST['cht_in_out']);
$cht_delivrys			= mysqli_real_escape_string($conn,$_POST['cht_delivry']);
$cht_warrnty_docs		= mysqli_real_escape_string($conn,$_POST['cht_warrnty_doc']);
$cht_warrnty_dois		= mysqli_real_escape_string($conn,$_POST['cht_warrnty_doi']);
$cht_wghts				= mysqli_real_escape_string($conn,$_POST['cht_wght']);
//$pro_cost	= mysqli_real_escape_string($conn,$_POST['product_cost']);
//$dis		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_cht_mini`(`cht_mini_id`, `product_model`,`sap_code`,`description`, `cht_mini_bar_ac_r22`, `cht_mini_bar_ac_r22_phe`, `cht_mini_capacity`, `cht_mini_heatload_kw`, `cht_mini_heatload_kcal`, `cht_mini_waterpump_absorbed`, `cht_mini_waterpump_flow`, `cht_mini_cooling_fan`, `cht_mini_in_out_water`, `cht_mini_delivery`, `cht_mini_warenty_doc`, `cht_mini_warenty_doi`, `cht_mini_weight`) VALUES ('','$cht_prd_models','$kdsap','$kddesc','$cht_1_3acr22s','$cht_1_3acphes','$cht_caps','$cht_heat_kws','$cht_heats','$cht_water_pumps','$aht_water_flws','$cht_coolingfans','$cht_in_outs','$cht_delivrys','$cht_warrnty_docs','$cht_warrnty_dois','$cht_wghts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'CHT NEXTGEN LH' :
$pro_mdls			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['cht_lh_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['cht_nexlh_descrp']);
$hig_tempacs			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_lowtemp_ac']);
$high_tempwaters			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_lowtemp_water']);
$nxtgen_lh_cap			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_cap']);
$nxtgen_lh_heatkcal		= mysqli_real_escape_string($conn,$_POST['cht_nexlh_heatkcal']);
$nxtgen_lh_heatkw		= mysqli_real_escape_string($conn,$_POST['cht_nexlh_heatkw']);
$water_pump_1pm			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_water_flow']);
$nxt_genlh_waterpump_power	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_water_abrob']);
$nxt_gen_lh_cooling		= mysqli_real_escape_string($conn,$_POST['cht_nexlh_coolfan']);
$nxt_gen_lh_io			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_inout']);
$nxt_gen_lh_delivry_terms	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_delivr']);
$nxt_gen_lh_warranty_doc	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_warnt_doc']);
$nxt_gen_lh_warranty_doi	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_warnty_doi']);
$nxt_gen_lh_weight			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_wight']);
//$pro_cost	= mysqli_real_escape_string($conn,$_POST['product_cost']);
//$dis		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_cht_nexgen_lh`(`cht_id`, `product_model`,`sap_code`,`description`, `cht_low_temp_air_cooled_a`, `cht_low_temp_water_cooled_b`, `cht_capacity`, `cht_heat_load_kcal_h`, `cht_heat_load_kw`, `cht_water_pump_flow_rate_lpm`, `cht_water_pump_absobed_pow_kw`, `cht_cooling_fan`, `cht_input_output_water`, `cht_delivery_terms`, `cht_warranty_doc`, `cht_warranty_doi`, `cht_weight`) VALUES ('','$pro_mdls','$kdsap','$kddesc','$hig_tempacs','$high_tempwaters','$nxtgen_lh_cap','$nxtgen_lh_heatkcal','$nxtgen_lh_heatkw','$water_pump_1pm','$nxt_genlh_waterpump_power','$nxt_gen_lh_cooling','$nxt_gen_lh_io','$nxt_gen_lh_delivry_terms','$nxt_gen_lh_warranty_doc','$nxt_gen_lh_warranty_doi','$nxt_gen_lh_weight')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'CHT NEXTGEN HH':
$pro_mdl					= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_descrp']);
$hig_tempac					= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_hig_tempac']);
$high_tempwater				= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_high_tempwater']);
$nxtgen_hh_cap				= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_cap']);
$nxtgen_hh_heatkcal			= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_heatkcal']);
$nxtgen_hh_heatkw			= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_heatkw']);
$water_pump_1pm				= mysqli_real_escape_string($conn,$_POST['water_pump_1pm']);
$nxt_genhh_waterpump_power	= mysqli_real_escape_string($conn,$_POST['nxt_genhh_waterpump_power']);
$nxt_gen_hh_cooling			= mysqli_real_escape_string($conn,$_POST['nxt_gen_hh_cooling']);
$nxt_gen_hh_io				= mysqli_real_escape_string($conn,$_POST['nxt_gen_hh_io']);
$nxt_gen_hh_delivery_terms	= mysqli_real_escape_string($conn,$_POST['nxt_gen_hh_delivery_terms']);
$nxt_gen_hh_warranty_doc	= mysqli_real_escape_string($conn,$_POST['nxt_gen_hh_warranty_doc']);
$nxt_gen_hh_warranty_doi	= mysqli_real_escape_string($conn,$_POST['nxt_gen_hh_warranty_doi']);
$nxt_gen_hh_weight			= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_wight']);
//$pro_cost	= mysqli_real_escape_string($conn,$_POST['product_cost']);
//$dis		= mysqli_real_escape_string($conn,$_POST['discount']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_cht_nexgen_hh`(`cht_hh_id`, `product_model`,`sap_code`,`description`, `cht_hh_high_temp_air_cooled_a`, `cht_hh_high_temp_water_cooled_b`, `cht_hh_capacity`, `cht_hh_heat_load_kcal_h`, `cht_hh_heat_load_kw`, `cht_hh_water_pump_flow_rate_lpm`, `cht_hh_water_pump_absorbed_pw_kw`, `cht_hh_cooling_fan`, `cht_hh_input_output_water`, `cht_hh_delivery_terms`, `cht_hh_warranty_doc`, `cht_hh_warranty_doi`, `cht_hh_weight`) VALUES ('','$pro_mdl','$kdsap','$kddesc','$hig_tempac','$high_tempwater','$nxtgen_hh_cap','$nxtgen_hh_heatkcal','$nxtgen_hh_heatkw','$water_pump_1pm','$nxt_genhh_waterpump_power','$nxt_gen_hh_cooling','$nxt_gen_hh_io','$nxt_gen_hh_delivery_terms','$nxt_gen_hh_warranty_doc','$nxt_gen_hh_warranty_doi','$nxt_gen_hh_weight')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'SCT' :
$sct_prd_models	= mysqli_real_escape_string($conn,$_POST['sct_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['sct_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['sct_descrp']);
$sct_lows	    = mysqli_real_escape_string($conn,$_POST['sct_low']);
$sct_highs		= mysqli_real_escape_string($conn,$_POST['sct_high']);
$sct_ios		= mysqli_real_escape_string($conn,$_POST['sct_io']);
$sct_wfrs		= mysqli_real_escape_string($conn,$_POST['sct_wfr']);
$sct_motos		= mysqli_real_escape_string($conn,$_POST['sct_moto']);
$sct_delis		= mysqli_real_escape_string($conn,$_POST['sct_deli']);
$sct_out_waters	= mysqli_real_escape_string($conn,$_POST['sct_out_water']);
$sct_wrnt_docs	= mysqli_real_escape_string($conn,$_POST['sct_wrnt_doc']);
$sct_wrnt_dois	= mysqli_real_escape_string($conn,$_POST['sct_wrnt_doi']);
$sct_wgts		= mysqli_real_escape_string($conn,$_POST['sct_wgt']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_sct`(`sct_id`, `product_model`,`sap_code`,`description`, `sct_low_temp_price`, `sct_high_temp_price`, `sct_in_out_size`,`sct_water_rate`, `sct_motor`, `sct_delvery_trm`, `sct_outlet_temp`, `sct_warenty_doc`, `sct_warenty_doi`, `sct_weight`) VALUES ('','$sct_prd_models','$kdsap','$kddesc','$sct_lows','$sct_highs','$sct_ios','$sct_wfrs','$sct_motos','$sct_delis','$sct_out_waters','$sct_wrnt_docs','$sct_wrnt_dois','$sct_wgts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'SCB' :
$scb_prd_models	= mysqli_real_escape_string($conn,$_POST['scb_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['scb_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['scb_descrp']);
$scb_lows	    = mysqli_real_escape_string($conn,$_POST['scb_low']);
$scb_highs		= mysqli_real_escape_string($conn,$_POST['scb_high']);
$scb_motos		= mysqli_real_escape_string($conn,$_POST['scb_moto']);
$scb_ios		= mysqli_real_escape_string($conn,$_POST['scb_io']);
$scb_wfrs		= mysqli_real_escape_string($conn,$_POST['scb_wfr']);
$scb_delis		= mysqli_real_escape_string($conn,$_POST['scb_deli']);
$scb_out_waters	= mysqli_real_escape_string($conn,$_POST['scb_out_water']);
$scb_wrnt_docs	= mysqli_real_escape_string($conn,$_POST['scb_wrnt_doc']);
$scb_wrnt_dois	= mysqli_real_escape_string($conn,$_POST['scb_wrnt_doi']);
$scb_wgts		= mysqli_real_escape_string($conn,$_POST['scb_wgt']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_scb`(`scb_id`, `product_model`,`sap_code`,`description`, `scb_low_temp`, `scb_high_temp`, `scb_motor`, `scb_in_out_size`, `scb_water_flow`, `scb_delivery_trm`, `scb_outlet_temp`, `scb_warenty_doc`, `scb_warenty_doi`, `scb_weight`) VALUES ('','$scb_prd_models','$kdsap','$kddesc','$scb_lows','$scb_highs','$scb_motos','$scb_ios','$scb_wfrs','$scb_delis','$scb_out_waters','$scb_wrnt_docs','$scb_wrnt_dois','$scb_wgts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'ECT' :
$ect_prd_models			= mysqli_real_escape_string($conn,$_POST['ect_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['ect_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['ect_descrp']);
$ect_coilrows			= mysqli_real_escape_string($conn,$_POST['ect_coilrow']);
$ect_motorhps			= mysqli_real_escape_string($conn,$_POST['ect_motorhp']);
$ect_inouts				= mysqli_real_escape_string($conn,$_POST['ect_inout']);
$ect_delvrys			= mysqli_real_escape_string($conn,$_POST['ect_delvry']);
$ect_warnty_docs		= mysqli_real_escape_string($conn,$_POST['ect_wrnty_doc']);
$ect_warnty_dois		= mysqli_real_escape_string($conn,$_POST['ect_wrnty_doi']);
$ect_outlet_temps		= mysqli_real_escape_string($conn,$_POST['ect_outlt_temp']);
$ect_wights				= mysqli_real_escape_string($conn,$_POST['ect_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_ect`(`ect_id`, `product_model`,`sap_code`,`description`, `ect_coil_2_rows`, `ect_motor_hp`, `ect_in_out_bsp`, `ect_delivery_terms`, `ect_warnty_doc`, `ect_warnty_doi`, `ect_outlet_temp`, `ect_weight`) VALUES ('','$ect_prd_models','$kdsap','$kddesc','$ect_coilrows','$ect_motorhps','$ect_inouts','$ect_delvrys','$ect_warnty_docs','$ect_warnty_dois','$ect_outlet_temps','$ect_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'VXS' :
$vxs_prd_models			= mysqli_real_escape_string($conn,$_POST['vxs_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['vxs_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['vxs_descrp']);
$vxs_vartexdrains		= mysqli_real_escape_string($conn,$_POST['vxs_vartexdrain']);
$vxs_pipes				= mysqli_real_escape_string($conn,$_POST['vxs_pipe']);
$vxs_line_pressurs		= mysqli_real_escape_string($conn,$_POST['vxs_line_pressur']);
$vxs_caps				= mysqli_real_escape_string($conn,$_POST['vxs_cap']);
$vxs_inouts				= mysqli_real_escape_string($conn,$_POST['vxs_inout']);
$vxs_delivrys			= mysqli_real_escape_string($conn,$_POST['vxs_delivry']);
$vxs_warnty_docs		= mysqli_real_escape_string($conn,$_POST['vxs_warnty_doc']);
$vxs_warnty_dois		= mysqli_real_escape_string($conn,$_POST['vxs_warnty_doi']);
$vxs_wrk_prssurs		= mysqli_real_escape_string($conn,$_POST['vxs_wrk_prssur']);
$vxs_wights				= mysqli_real_escape_string($conn,$_POST['vxs_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_vxs`(`vxs_id`, `product_model`,`sap_code`,`description`, `vxs_vartex_separator`, `vxs_pipe_size`, `vxs_line_weight`, `vxs_capacity`, `vxs_in_out`, `vxs_delivery_trm`, `vxs_warenty_doc`, `vxs_warenty_doi`, `vxs_wrk_presure`, `vxs_weight`) VALUES ('','$vxs_prd_models','$kdsap','$kddesc','$vxs_vartexdrains','$vxs_pipes','$vxs_line_pressurs','$vxs_caps','$vxs_inouts','$vxs_delivrys','$vxs_warnty_docs','$vxs_warnty_dois','$vxs_wrk_prssurs','$vxs_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'VAR' :
$var_prd_models			= mysqli_real_escape_string($conn,$_POST['var_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['var_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['var_descrp']);
$var_modal_varis		= mysqli_real_escape_string($conn,$_POST['var_modal_vari']);
$var_wrkpressurs		= mysqli_real_escape_string($conn,$_POST['var_wrkpressur']);
$var_prcs				= mysqli_real_escape_string($conn,$_POST['var_prc']);
$var_caps				= mysqli_real_escape_string($conn,$_POST['var_cap']);
$var_shells				= mysqli_real_escape_string($conn,$_POST['var_shell']);
$var_inouts				= mysqli_real_escape_string($conn,$_POST['var_inout']);
$var_hands				= mysqli_real_escape_string($conn,$_POST['var_hand']);
$var_delivrs			= mysqli_real_escape_string($conn,$_POST['var_delivr']);
$var_warnty_docs		= mysqli_real_escape_string($conn,$_POST['var_warnty_doc']);
$var_warnty_dois		= mysqli_real_escape_string($conn,$_POST['var_warnty_doi']);
$var_mocs				= mysqli_real_escape_string($conn,$_POST['var_moc']);
$var_wights				= mysqli_real_escape_string($conn,$_POST['var_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_var`(`var_id`, `product_model`,`sap_code`,`description`, `var_ar_model_var`, `var_ar_wrk_pressure`, `var_ar_price`, `var_ar_capacity`, `var_ar_shell_thick`, `var_ar_in_out`, `var_ar_hand`, `var_ar_delivery_trm`, `var_warenty_doc`, `var_warenty_doi`, `var_moc`, `var_weight`) VALUES ('','$var_prd_models','$kdsap','$kddesc','$var_modal_varis','$var_wrkpressurs','$var_prcs','$var_caps','$var_shells','$var_inouts','$var_hands','$var_delivrs','$var_warnty_docs','$var_warnty_dois','$var_mocs','$var_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'HP FILTER ELEMENT' :
$hp_ele_prdt_models		= mysqli_real_escape_string($conn,$_POST['hp_ele_prdt_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['hp_ele_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['hp_ele_descrp']);
$hp_ele_gen_purs		= mysqli_real_escape_string($conn,$_POST['hp_ele_gen_pur']);
$hp_ele_mic_oils		= mysqli_real_escape_string($conn,$_POST['hp_ele_mic_oil']);
$hp_ele_sub_mic_oils	= mysqli_real_escape_string($conn,$_POST['hp_ele_sub_mic_oil']);
$hp_ele_act_carbons		= mysqli_real_escape_string($conn,$_POST['hp_ele_act_carbon']);
$hp_ele_delis			= mysqli_real_escape_string($conn,$_POST['hp_ele_deli']);
$hp_ele_wrnt_docs		= mysqli_real_escape_string($conn,$_POST['hp_ele_wrnt_doc']);
$hp_ele_wrnt_dois		= mysqli_real_escape_string($conn,$_POST['hp_ele_wrnt_doi']);
$hp_ele_wrk_press		= mysqli_real_escape_string($conn,$_POST['hp_ele_wrk_pres']);
$hp_ele_wgts			= mysqli_real_escape_string($conn,$_POST['hp_ele_wgt']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_hp_filter_element`(`hp_filter_ele_id`, `product_model`,`sap_code`,`description`, `hp_filter_ele_gpe`, `hp_filter_ele_zpe`, `hp_filter_ele_zoe`, `hp_filter_ele_zce`, `hp_filter_ele_delivery_trm`, `hp_filter_ele_warenty_doc`, `hp_filter_ele_warenty_doi`, `hp_filter_ele_wrk_presure`, `hp_filter_ele_weight`) VALUES ('','$hp_ele_prdt_models','$kdsap','$kddesc','$hp_ele_gen_purs','$hp_ele_mic_oils','$hp_ele_sub_mic_oils','$hp_ele_act_carbons','$hp_ele_delis','$hp_ele_wrnt_docs','$hp_ele_wrnt_dois','$hp_ele_wrk_press','$hp_ele_wgts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'GFV':
$gzf_prd_models		= mysqli_real_escape_string($conn,$_POST['gzf_prd_modelm']);
$kdsap= mysqli_real_escape_string($conn,$_POST['gzf_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['gzf_descrp']);
$gzf_prcs			= mysqli_real_escape_string($conn,$_POST['gzf_prc']);
$gzf_valveopens		= mysqli_real_escape_string($conn,$_POST['gzf_valveopen']);
$gzf_valvedischrgs	= mysqli_real_escape_string($conn,$_POST['gzf_valvedischrg']);
$gzf_pwrcons			= mysqli_real_escape_string($conn,$_POST['gzf_pwrcon']);
$gzf_max_temps		= mysqli_real_escape_string($conn,$_POST['gzf_max_temp']);
$gzf_max_opers		= mysqli_real_escape_string($conn,$_POST['gzf_max_oper']);
$gzf_inout_ports		= mysqli_real_escape_string($conn,$_POST['gzf_inout_port']);
$gzf_warranty_docs	= mysqli_real_escape_string($conn,$_POST['gzf_warranty_doc']);
$gzf_warranty_dois	= mysqli_real_escape_string($conn,$_POST['gzf_warranty_doi']);
$gzf_delivrs			= mysqli_real_escape_string($conn,$_POST['gzf_delivr']);
$gzf_wights			= mysqli_real_escape_string($conn,$_POST['gzf_wght']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_gz_gfv`(`gz_gfv_id`, `product_model`,`sap_code`,`description`, `gz_gfv_price`, `gz_gfv_valve_opn_intervel`, `gz_gfv_valve_dischrg`, `gz_gfv_pwr_consum`, `gz_gfv_max_opt_temp`, `gz_gfv_max_opt_presure`, `gz_gfv_io_ports`, `gz_gfv_warenty_doc`, `gz_gfv_warenty_doi`, `gz_gfv_deliver_trm`, `gz_gfv_weight`) VALUES ('','$gzf_prd_models','$kdsap','$kddesc','$gzf_prcs','$gzf_valveopens','$gzf_valvedischrgs','$gzf_pwrcons','$gzf_max_temps','$gzf_max_opers','$gzf_inout_ports','$gzf_warranty_docs','$gzf_warranty_dois','$gzf_delivrs','$gzf_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'GZ':
$gz_prd_models		= mysqli_real_escape_string($conn,$_POST['gz_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['gz_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['gz_descrp']);
$gz_prcs			= mysqli_real_escape_string($conn,$_POST['gz_prc']);
$gz_valveopens		= mysqli_real_escape_string($conn,$_POST['gz_valveopen']);
$gz_valvedischrgs	= mysqli_real_escape_string($conn,$_POST['gz_valvedischrg']);
$gz_pwrcons			= mysqli_real_escape_string($conn,$_POST['gz_pwrcon']);
$gz_max_temps		= mysqli_real_escape_string($conn,$_POST['gz_max_temp']);
$gz_max_opers		= mysqli_real_escape_string($conn,$_POST['gz_max_oper']);
$gz_inout_ports		= mysqli_real_escape_string($conn,$_POST['gz_inout_port']);
$gz_warranty_docs	= mysqli_real_escape_string($conn,$_POST['gz_warranty_doc']);
$gz_warranty_dois	= mysqli_real_escape_string($conn,$_POST['gz_warranty_doi']);
$gz_delivrs			= mysqli_real_escape_string($conn,$_POST['gz_delivr']);
$gz_wights			= mysqli_real_escape_string($conn,$_POST['gz_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_gz_gfv`(`gz_gfv_id`, `product_model`,`sap_code`,`description`, `gz_gfv_price`, `gz_gfv_valve_opn_intervel`, `gz_gfv_valve_dischrg`, `gz_gfv_pwr_consum`, `gz_gfv_max_opt_temp`, `gz_gfv_max_opt_presure`, `gz_gfv_io_ports`, `gz_gfv_warenty_doc`, `gz_gfv_warenty_doi`, `gz_gfv_deliver_trm`, `gz_gfv_weight`) VALUES ('','$gz_prd_models','$kdsap','$kddesc','$gz_prcs','$gz_valveopens','$gz_valvedischrgs','$gz_pwrcons','$gz_max_temps','$gz_max_opers','$gz_inout_ports','$gz_warranty_docs','$gz_warranty_dois','$gz_delivrs','$gz_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'MST':
$mst_prdt_models	= mysqli_real_escape_string($conn,$_POST['mst_prdt_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['mst_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['mst_descrp']);
$mst_baffs			= mysqli_real_escape_string($conn,$_POST['mst_baff']);
$mst_dems			= mysqli_real_escape_string($conn,$_POST['mst_dem']);
$mst_delis			= mysqli_real_escape_string($conn,$_POST['mst_deli']);
$mst_wrnt_docs		= mysqli_real_escape_string($conn,$_POST['mst_wrnt_doc']);
$mst_wrnt_dois		= mysqli_real_escape_string($conn,$_POST['mst_wrnt_doi']);
$mst_wrk_press		= mysqli_real_escape_string($conn,$_POST['mst_wrk_pres']);
$mst_wgts			= mysqli_real_escape_string($conn,$_POST['mst_wgt']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_mst`(`mst_id`,`product_model`,`sap_code`,`description`,`mst_mv_baffle`,`mst_demister`,`mst_delivery_trm`, `mst_warenty_doc`,`mst_warenty_doi`,`mst_wrk_presure`,`mst_weight`) VALUES ('','$mst_prdt_models','$kdsap','$kddesc','$mst_baffs','$mst_dems','$mst_delis','$mst_wrnt_docs','$mst_wrnt_dois','$mst_wrk_press','$mst_wgts')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'GZF':
$gzf_prd_models		= mysqli_real_escape_string($conn,$_POST['gzf_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['gzff_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['gzff_descrp']);
$gzf_grds			= mysqli_real_escape_string($conn,$_POST['gzf_grd']);
$gzf_costs			= mysqli_real_escape_string($conn,$_POST['gzf_cost']);
$gzf_particls		= mysqli_real_escape_string($conn,$_POST['gzf_particl']);
$gzf_oilremovls		= mysqli_real_escape_string($conn,$_POST['gzf_oilremovl']);
$gzf_maxopr_pres	= mysqli_real_escape_string($conn,$_POST['gzf_maxopr_pre']);
$gzf_effecs			= mysqli_real_escape_string($conn,$_POST['gzf_effec']);
$gzf_caps			= mysqli_real_escape_string($conn,$_POST['gzf_cap']);
$gzf_ac_bsps		= mysqli_real_escape_string($conn,$_POST['gzf_ac_bsp']);
$gzf_delvs			= mysqli_real_escape_string($conn,$_POST['gzf_delv']);
$gzf_warnty_docs	= mysqli_real_escape_string($conn,$_POST['gzf_warnty_doc']);
$gzf_warnty_dois	= mysqli_real_escape_string($conn,$_POST['gzf_warnty_doi']);
$gzf_wights			= mysqli_real_escape_string($conn,$_POST['gzf_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_gzf`(`gzf_id`, `product_model`,`sap_code`,`description`, `gzf_grade`, `gzf_price`, `gzf_practical_removal`, `gzf_oil_removal`, `gzf_max_operating`, `gzf_effeciency`, `gzf_capacity`, `gzf_air_connection`, `gzf_delivery_trm`,`gzf_warenty_doc`, `gzf_warenty_doi`,`gzf_weight`) VALUES ('','$gzf_prd_models','$kdsap','$kddesc','$gzf_grds','$gzf_costs','$gzf_particls','$gzf_oilremovls','$gzf_maxopr_pres','$gzf_effecs','$gzf_caps','$gzf_ac_bsps','$gzf_delvs','$gzf_warnty_docs','$gzf_warnty_dois','$gzf_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'GZF CATRIDGES' :
$gzf_cart_prd_models		= mysqli_real_escape_string($conn,$_POST['gzf_cart_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['gzfcat_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['gzfcat_descrp']);
$gzf_cart_genralfilters		= mysqli_real_escape_string($conn,$_POST['gzf_cart_genralfilter']);
$gzf_cart_microils			= mysqli_real_escape_string($conn,$_POST['gzf_cart_microil']);
$gzf_cart_sub_microils		= mysqli_real_escape_string($conn,$_POST['gzf_cart_sub_microil']);
$gzf_cart_activatedcarbs	= mysqli_real_escape_string($conn,$_POST['gzf_cart_activatedcarb']);
$gzf_cart_caps				= mysqli_real_escape_string($conn,$_POST['gzf_cart_cap']);
$gzf_cart_delvrs			= mysqli_real_escape_string($conn,$_POST['gzf_cart_delvr']);
$gzf_cart_warnty_docs		= mysqli_real_escape_string($conn,$_POST['gzf_cart_warnty_doc']);
$gzf_cart_warnty_dois		= mysqli_real_escape_string($conn,$_POST['gzf_cart_warnty_doi']);
$gzf_cart_wights			= mysqli_real_escape_string($conn,$_POST['gzf_cart_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_gzf_cartridges`(`gzf_cartridges_id`, `product_model`,`sap_code`,`description`, `gzf_cartridges_mv_gpe`, `gzf_cartridges_mv_zpe`, `gzf_cartridges_mv_zoe`, `gzf_cartridges_mv_zce`, `gzf_cartridges_capacity`, `gzf_cartridges_delivery_trm`, `gzf_cartridges_warenty_doc`, `gzf_cartridges_warenty_doi`, `gzf_cartridges_weight`) VALUES ('','$gzf_cart_prd_models','$kdsap','$kddesc','$gzf_cart_genralfilters','$gzf_cart_microils','$gzf_cart_sub_microils','$gzf_cart_activatedcarbs','$gzf_cart_caps','$gzf_cart_delvrs','$gzf_cart_warnty_docs','$gzf_cart_warnty_dois','$gzf_cart_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'HP FILTER' :
$hp_prd_modls		= mysqli_real_escape_string($conn,$_POST['hp_prd_modl']);
$kdsap= mysqli_real_escape_string($conn,$_POST['hp_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['hp_descrp']);
$hp_gnrl_filters	= mysqli_real_escape_string($conn,$_POST['hp_gnrl_filter']);
$hp_gndrl_oils		= mysqli_real_escape_string($conn,$_POST['hp_gndrl_oil']);
$hp_sub_gndrl_oils	= mysqli_real_escape_string($conn,$_POST['hp_sub_gndrl_oil']);
$hp_active_cars		= mysqli_real_escape_string($conn,$_POST['hp_active_car']);
$hp_dlevirs			= mysqli_real_escape_string($conn,$_POST['hp_dlevir']);
$hp_warnty_docs		= mysqli_real_escape_string($conn,$_POST['hp_warnty_doc']);
$hp_warnty_dois		= mysqli_real_escape_string($conn,$_POST['hp_warnty_doi']);
$hp_wrk_prsurs		= mysqli_real_escape_string($conn,$_POST['hp_wrk_prsur']);
$hp_wghts			= mysqli_real_escape_string($conn,$_POST['hp_wght']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_hp_filter`(`hp_filter_id`, `product_model`,`sap_code`,`description`, `hp_filter_gp`, `hp_filter_zp`, `hp_filter_zo`, `hp_filter_zc`, `hp_filter_delivery_trm`, `hp_filter_warenty_doc`, `hp_filter_warenty_doi`, `hp_filter__wrk_pressure`, `hp_filter_weight`) VALUES ('','$hp_prd_modls','$kdsap','$kddesc','$hp_gnrl_filters','$hp_gndrl_oils','$hp_sub_gndrl_oils',
'$hp_active_cars','$hp_dlevirs','$hp_warnty_docs','$hp_warnty_dois','$hp_wrk_prsurs','$hp_wghts')");	
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}	
break;
case 'ACC':
$ac_Prd_model			= mysqli_real_escape_string($conn,$_POST['acc_Prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['acc_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['acc_descrp']);
$ac_without_var_price	= mysqli_real_escape_string($conn,$_POST['acc_without_var_price']);
$ac_cap					= mysqli_real_escape_string($conn,$_POST['acc_cap']);
$ac_wrk_presure			= mysqli_real_escape_string($conn,$_POST['acc_wrk_presure']);
$ac_io_bsp				= mysqli_real_escape_string($conn,$_POST['acc_io_bsp']);
$ac_rate_pwr			= mysqli_real_escape_string($conn,$_POST['acc_rate_pwr']);
$ac_ec_r220v			= mysqli_real_escape_string($conn,$_POST['acc_ec_r220v']);
$ac_ec_r415v			= mysqli_real_escape_string($conn,$_POST['acc_ec_r415v']);
$ac_waranty_doc			= mysqli_real_escape_string($conn,$_POST['acc_waranty_doc']);
$ac_Warranty_doi		= mysqli_real_escape_string($conn,$_POST['acc_Warranty_doi']);
$ac_delivery_term		= mysqli_real_escape_string($conn,$_POST['acc_delivery_term']);
$ac_weght				= mysqli_real_escape_string($conn,$_POST['acc_weght']);
PRINT_R(mysqli_real_escape_string($conn,$_POST);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_acc`(`acc_id`, `product_model`,`sap_code`,`description`, `acc_wthout_vertax`, `acc_capacity`, `acc_wrk_pressure`, `acc_ac_bsp`, `acc_rate_power`, `acc_ec_220v`, `acc_ec_415v`, `acc_warenty_doc`, `acc_warenty_doi`, `acc_delivery`, `acc_weight`) VALUES ('','$ac_Prd_model','$kdsap','$kddesc','$ac_without_var_price','$ac_cap','$ac_wrk_presure','$ac_io_bsp','$ac_rate_pwr','$ac_ec_r220v','$ac_ec_r415v','$ac_waranty_doc','$ac_Warranty_doi','$ac_delivery_term','$ac_weght')");
if($sql){
echo '1' ;
}
else {
echo '2';
}	
break;
case 'GAS':
$gas_prd_models		= mysqli_real_escape_string($conn,$_POST['gas_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['gas_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['gas_descrp']);
$gas_modl_varis		= mysqli_real_escape_string($conn,$_POST['gas_modl_vari']);
$gas_pricess		= mysqli_real_escape_string($conn,$_POST['gas_prices']);
$gas_conct_pwrs		= mysqli_real_escape_string($conn,$_POST['gas_conct_pwr']);
$gas_water_ins		= mysqli_real_escape_string($conn,$_POST['gas_water_in']);
$gas_fan_dias		= mysqli_real_escape_string($conn,$_POST['gas_fan_diae']);
$gas_motr_quls		= mysqli_real_escape_string($conn,$_POST['gas_motr_qul']);
$gas_head_pips		= mysqli_real_escape_string($conn,$_POST['gas_head_pip']);
$gas_head_pips		= mysqli_real_escape_string($conn,$_POST['gas_head_pip']);
$gas_delvrs			= mysqli_real_escape_string($conn,$_POST['gas_delvr']);
$gas_Configus		= mysqli_real_escape_string($conn,$_POST['gas_Configu']);
$gas_wrnt_docs		= mysqli_real_escape_string($conn,$_POST['gas_wrnt_doc']);
$gas_wrnt_dois		= mysqli_real_escape_string($conn,$_POST['gas_wrnt_doi']);
$gas_outlet_waters	= mysqli_real_escape_string($conn,$_POST['gas_outlet_water']);
$gas_wights			= mysqli_real_escape_string($conn,$_POST['gas_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_gas`(`gas_id`, `product_model`,`sap_code`,`description`, `gas_model_variance`, `gas_price`, `gas_total_connect_powr`, `gas_water_in_out`, `gas_fan_dia`, `gas_motor_qty`, `gas_header_pip_flg`, `gas_delivery_trm`, `gas_config`, `gas_warenty_doc`, `gas_warenty_doi`, `gas_outlet_temp`, `gas_weight`) VALUES ('','$gas_prd_models','$kdsap','$kddesc','$gas_modl_varis','$gas_pricess','$gas_conct_pwrs','$gas_water_ins','$gas_fan_dias','$gas_motr_quls','$gas_head_pips','$gas_delvrs','$gas_Configus','$gas_wrnt_docs','$gas_wrnt_dois','$gas_outlet_waters','$gas_wights')");
if($sql){
echo 'Enter Successfully' ;
}
else {
echo '2';
}	
break;
case 'GCT_ECHO' :
$gcteco_prd_models		= mysqli_real_escape_string($conn,$_POST['gcteco_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['gcteco_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['gcteco_descrp']);
$gcteco_lowcosts		= mysqli_real_escape_string($conn,$_POST['gcteco_lowcost']);
$gcteco_highcosts		= mysqli_real_escape_string($conn,$_POST['gcteco_highcost']);
$gcteco_ec_prices		= mysqli_real_escape_string($conn,$_POST['gcteco_ec_price']);
$gcteco_caps			= mysqli_real_escape_string($conn,$_POST['gcteco_cap']);
$gcteco_motors			= mysqli_real_escape_string($conn,$_POST['gcteco_motor']);
$gcteco_powrconss		= mysqli_real_escape_string($conn,$_POST['gcteco_powrcons']);
$gcteco_waters			= mysqli_real_escape_string($conn,$_POST['gcteco_water']);
$gcteco_inouts			= mysqli_real_escape_string($conn,$_POST['gcteco_inout']);
$gcteco_basincaps		= mysqli_real_escape_string($conn,$_POST['gcteco_basincap']);
$gcteco_delvrys			= mysqli_real_escape_string($conn,$_POST['gcteco_delvry']);
$gcteco_wrnty_docs		= mysqli_real_escape_string($conn,$_POST['gcteco_wrnty_doc']);
$gcteco_wrnty_dois		= mysqli_real_escape_string($conn,$_POST['gcteco_wrnty_doi']);
$gcteco_wights			= mysqli_real_escape_string($conn,$_POST['gcteco_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_gct_eco`(`gct_id`, `product_model`, `gct_low_price`, `gct_high_price`, `gct_recommended_erection_charges`, `gct_capacity`, `gct_motor`, `gct_power_consumed`, `gct_water_flow_rate`, `gct_in_out_size`, `gct_basin_holding_capacity`, `gct_delivery_terms`, `gct_wrnty_doc`, `gct_wrnty_doi`,`gct_weight`) VALUES ('','$gcteco_prd_models','$kdsap','$kddesc','$gcteco_lowcosts','$gcteco_highcosts','$gcteco_ec_prices','$gcteco_caps','$gcteco_motors','$gcteco_powrconss','$gcteco_waters','$gcteco_inouts','$gcteco_basincaps','$gcteco_delvrys','$gcteco_wrnty_docs','$gcteco_wrnty_dois','$gcteco_wights')");
if($sql){
echo 'Enter success fully' ;
}
else {
echo '2';
}
case 'WAH':
$wah_prd_models		= mysqli_real_escape_string($conn,$_POST['wah_prd_model']);
$kdsap= mysqli_real_escape_string($conn,$_POST['wah_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['wah_descrp']);
$wah_moistures		= mysqli_real_escape_string($conn,$_POST['wah_moisture']);
$wah_capacitys		= mysqli_real_escape_string($conn,$_POST['wah_capacty']);
$wah_aircons		= mysqli_real_escape_string($conn,$_POST['wah_aircon']);
$wah_coolngs		= mysqli_real_escape_string($conn,$_POST['wah_coolng']);
$wah_water_rates	= mysqli_real_escape_string($conn,$_POST['wah_water_rate']);
$wah_shelldias		= mysqli_real_escape_string($conn,$_POST['wah_sheldia']);
$wah_delivrytrms	= mysqli_real_escape_string($conn,$_POST['wah_delivrytrm']);
$wah_warranty_docs	= mysqli_real_escape_string($conn,$_POST['wah_warranty_doc']);
$wah_warranty_dois	= mysqli_real_escape_string($conn,$_POST['wah_warranty_doi']);
$wah_wrkpressurs	= mysqli_real_escape_string($conn,$_POST['wah_wrkpressur']);
$wah_wights			= mysqli_real_escape_string($conn,$_POST['wah_wight']);
PRINT_R(mysqli_real_escape_string($conn,$_POST);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_wah`(`wah_id`, `product_model`,`sap_code`,`description`, `wah_with_moisture`, `wah_capacity`, `wah_ac_bsp`, `wah_cooling_water`, `wah_water_flow_lpm`, `wah_shelldia`, `wah_delivery_trm`, `wah_warenty_doc`, `wah_warenty_doi`, `wah_wrk_pressure`, `wah_weight`) VALUES ('','$wah_prd_models','$kdsap','$kddesc','$wah_moistures','$wah_capacitys','$wah_aircons','$wah_coolngs','$wah_water_rates','$wah_shelldias','$wah_delivrytrms','$wah_warranty_docs','$wah_warranty_dois','$wah_wrkpressurs','$wah_wights')");
if($sql){
echo 'Enter Successfully' ;
}
else {
echo '2';
}	
break;
case 'DCT' :
$dct_prd_modls			= mysqli_real_escape_string($conn,$_POST['dct_prd_modl']);
$kdsap= mysqli_real_escape_string($conn,$_POST['dct_sapcode']);
$kddesc= mysqli_real_escape_string($conn,$_POST['dct_descrp']);
$dct_prcs				= mysqli_real_escape_string($conn,$_POST['dct_prc']);
$dct_motr_pwrs			= mysqli_real_escape_string($conn,$_POST['dct_motr_pwr']);
$dct_fan_quls			= mysqli_real_escape_string($conn,$_POST['dct_fan_qul']);
$dct_header_flgs		= mysqli_real_escape_string($conn,$_POST['dct_header_flg']);
$dct_contact_fans		= mysqli_real_escape_string($conn,$_POST['dct_contact_fan']);
$dct_delivrys			= mysqli_real_escape_string($conn,$_POST['dct_delivry']);
$dct_warnty_docs		= mysqli_real_escape_string($conn,$_POST['dct_warnty_doc']);
$dct_warnty_dois		= mysqli_real_escape_string($conn,$_POST['dct_warnty_doi']);
$dct_wights				= mysqli_real_escape_string($conn,$_POST['dct_wight']);
$sql=mysqli_query($conn,"INSERT INTO `tbl_product_dct`(`dct_id`, `product_model`,`sap_code`,`description`, `dct_price`, `dct_motor_power`, `dct_fan_qty`, `dct_header_pipe`, `dct_fan_dia`, `dct_delivery_trm`, `dct_warenty_doc`, `dct_warenty_doi`, `dct_weight`) VALUES ('','$dct_prd_modls','$kdsap','$kddesc','$dct_prcs','$dct_motr_pwrs','$dct_fan_quls','$dct_header_flgs','$dct_contact_fans','$dct_delivrys','$dct_warnty_docs','$dct_warnty_dois','$dct_wights')");
if($sql){
echo 'Enter Successfully' ;
}
else {
echo '2';
}	
break;
}