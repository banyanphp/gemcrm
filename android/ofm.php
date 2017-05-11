<?php

$response = array();
require_once __DIR__ . '/db_connect.php';

$db = new DB_CONNECT();
	if(isset($_REQUEST['price_lst'])&& isset($_REQUEST['qref'])&& isset($_REQUEST['qdate'])&& isset($_REQUEST['sap_cd'])&& 
	isset($_REQUEST['poref'])&& isset($_REQUEST['podate'])&& isset($_REQUEST['from_prc']) && isset($_REQUEST['to_gem'])&&
	isset($_REQUEST['cfirst_name'])&& isset($_REQUEST['c_address_line_1'])&& 
	isset($_REQUEST['c_city'])&& isset($_REQUEST['c_pin_code'])&& isset($_REQUEST['c_cst_no'])
	&& isset($_REQUEST['c_pan_no'])&& isset($_REQUEST['c_contact_no'])&& isset($_REQUEST['c_last_name'])
	&& isset($_REQUEST['c_address_line_2'])&&  isset($_REQUEST['c_state'])&& isset($_REQUEST['c_tin_no'])
	&& isset($_REQUEST['c_ecc_no'])&&  isset($_REQUEST['c_name_contact_persion'])&& 
	isset($_REQUEST['c_email'])&& isset($_REQUEST['b_address_line_1'])&& isset($_REQUEST['b_city'])
	&& isset($_REQUEST['b_pin_code'])&& isset($_REQUEST['b_cst_no'])&& isset($_REQUEST['b_pan_no'])&&
	isset($_REQUEST['b_contact_no'])&& isset($_REQUEST['b_address_line_2'])&& isset($_REQUEST['b_state'])
	&& isset($_REQUEST['b_tin_no'])&& isset($_REQUEST['b_ecc_no'])&& isset($_REQUEST['b_name_contact_persion'])
	&& isset($_REQUEST['b_email'])&& isset($_REQUEST['s_address_line_1'])&& isset($_REQUEST['s_city'])&&
	isset($_REQUEST['s_pin_code'])&& isset($_REQUEST['s_cst_no'])&& isset($_REQUEST['s_pan_no'])&&
	 isset($_REQUEST['s_contact_no'])&& isset($_REQUEST['s_address_line'])&& isset($_REQUEST['s_state'])&& isset($_REQUEST['s_tin_no'])&&
	isset($_REQUEST['s_ecc_no'])&& isset($_REQUEST['s_name_contact_persion'])&& isset($_REQUEST['s_email'])&& isset($_REQUEST['form_applicable'])
	&&isset($_REQUEST['insurance'])&& isset($_REQUEST['freight_terms'])&&  isset($_REQUEST['payment_terms'])&& isset($_REQUEST['days'])
	&& isset($_REQUEST['other_payment'])&& isset($_REQUEST['pbg_abg'])&& isset($_REQUEST['inspection'])&&  isset($_REQUEST['ld_clause'])
	&& isset($_REQUEST['ldclause_applicable'])&& isset($_REQUEST['applicable_detail'])&& isset($_REQUEST['Permite'])&& isset($_REQUEST['Permit'])&& 
	isset($_REQUEST['commission_permit_per'])&& isset($_REQUEST['commission_permit_value'])&& isset($_REQUEST['logistic_prefer'])&& 
	isset($_REQUEST['despatch_contact_person']) && isset($_REQUEST['despatch_addr'])&& isset($_REQUEST['despatch_city'])&& isset($_REQUEST['despatch_pin'])&&
	isset($_REQUEST['despatch_commisssioning'])&& isset($_REQUEST['despatch_contact'])&& isset($_REQUEST['despatch_addr2'])&& 
	isset($_REQUEST['despatch_state'])&& isset($_REQUEST['despatch_spacial'])&& isset($_REQUEST['despatch_note']))
{
$price_lsts = $_REQUEST['price_lst'];
$qrefs = $_REQUEST['qref'];
$qdates = $_REQUEST['qdate'];
$sap_cds = $_REQUEST['sap_cd'];
$porefs = $_REQUEST['poref'];
$podates = $_REQUEST['podate'];
$from_prcs = $_REQUEST['from_prc'];
$to_gems = $_REQUEST['to_gem'];
$eq_no= $_REQUEST['eq_no'];
//form-2 

$cfirst_names = $_REQUEST['cfirst_name'];
$c_address_line_1s = $_REQUEST['c_address_line_1'];
$c_citys = $_REQUEST['c_city'];
$c_pin_codes = $_REQUEST['c_pin_code'];
$c_cst_nos = $_REQUEST['c_cst_no'];
$c_pan_nos = $_REQUEST['c_pan_no'];
$c_contact_nos = $_REQUEST['c_contact_no'];
$c_last_names = $_REQUEST['c_last_name'];
$c_address_line_2s = $_REQUEST['c_address_line_2'];
$c_states = $_REQUEST['c_state'];
$c_tin_nos = $_REQUEST['c_tin_no'];
$c_ecc_nos = $_REQUEST['c_ecc_no'];
$c_name_contact_persions = $_REQUEST['c_name_contact_persion'];
$c_emails = $_REQUEST['c_email'];
//form-3
//$chkPassports = $_REQUEST['chkPassport'];
//

$b_address_line_1s = $_REQUEST['b_address_line_1'];
$b_citys = $_REQUEST['b_city'];
$b_pin_codes = $_REQUEST['b_pin_code'];
$b_cst_nos = $_REQUEST['b_cst_no'];
$b_pan_nos = $_REQUEST['b_pan_no'];
$b_contact_nos = $_REQUEST['b_contact_no'];
//$b_last_names = $_REQUEST['b_last_name'];
$b_address_line_2s = $_REQUEST['b_address_line_2'];
$b_states = $_REQUEST['b_state'];
$b_tin_nos = $_REQUEST['b_tin_no'];
$b_ecc_nos = $_REQUEST['b_ecc_no'];
$b_name_contact_persions = $_REQUEST['b_name_contact_persion'];
$b_emails = $_REQUEST['b_email'];
//form-4
//$ship_addrs = $_REQUEST['ship_addr'];
///

$s_address_line_1s = $_REQUEST['s_address_line_1'];
$s_citys = $_REQUEST['s_city'];
$s_pin_codes = $_REQUEST['s_pin_code'];
$s_cst_nos = $_REQUEST['s_cst_no'];
$s_pan_nos = $_REQUEST['s_pan_no'];
$s_contact_nos = $_REQUEST['s_contact_no'];
//$s_last_names = $_REQUEST['s_last_name'];
$s_address_lines = $_REQUEST['s_address_line'];
$s_states = $_REQUEST['s_state'];
$s_tin_nos = $_REQUEST['s_tin_no'];
$s_ecc_nos = $_REQUEST['s_ecc_no'];
$s_name_contact_persions = $_REQUEST['s_name_contact_persion'];
$s_emails = $_REQUEST['s_email'];
//form-6

$form_applicables = $_REQUEST['form_applicable'];
$insurances = $_REQUEST['insurance'];
$freight_termss = $_REQUEST['freight_terms'];
$payment_termss = $_REQUEST['payment_terms'];
$dayss = $_REQUEST['days'];
$other_payments = $_REQUEST['other_payment'];
$pbg_abgs		=$_REQUEST['pbg_abg'];
$inspections = $_REQUEST['inspection'];
$ld_clauses = $_REQUEST['ld_clause'];
$ldclause_applicables = $_REQUEST['ldclause_applicable'];
$applicable_details =$_REQUEST['applicable_detail'];
$Permites = $_REQUEST['Permite'];
$Permits = $_REQUEST['Permit'];
$commission_permit_pers = $_REQUEST['commission_permit_per'];
$commission_permit_values = $_REQUEST['commission_permit_value'];
$logistic_prefers = $_REQUEST['logistic_prefer'];
//form-7

$despatch_contact_persons = $_REQUEST['despatch_contact_person'];
$despatch_addrs = $_REQUEST['despatch_addr'];
$despatch_citys = $_REQUEST['despatch_city'];
$despatch_pins = $_REQUEST['despatch_pin'];
$despatch_commisssionings = $_REQUEST['despatch_commisssioning'];
$despatch_contacts = $_REQUEST['despatch_contact'];
$despatch_addr2s = $_REQUEST['despatch_addr2'];
$despatch_states = $_REQUEST['despatch_state'];
$despatch_spacials = $_REQUEST['despatch_spacial'];
$despatch_notes = $_REQUEST['despatch_note'];
//OFM-enqNO 



//form5

$pf_percent= $_REQUEST['pf_percent'];
$pf_amount= $_REQUEST['pf_amount'];
$vat_amount= $_REQUEST['vat_amount'];

$vat_percent= $_REQUEST['vat_percent'];

$bed_percent= $_REQUEST['bed_percent'];
$bed_amount= $_REQUEST['bed_amount'];
$grand= $_REQUEST['grand_total'];
$sql=mysqli_query($db->connect(),"INSERT INTO `tbl_ofm`(`ofm_id`, `ofm_enqiry_number`, `ofm_price_master`, `ofm_quot_ref`, `ofm_quot_date`, `ofm_po_ref`, `ofm_po_date`, `ofm_from`, `ofm_sap_code`, `ofm_to`,
`ofm_cus_name`, `ofm_cus_addr1`, `ofm_cus_addr2`, `ofm_cus_city`, `ofm_cus_state`, `ofm_cus_pin_code`, `ofm_cus_tin`, `ofm_cus_cst`, `ofm_cus_ecc`, `ofm_cus_pan_no`, `ofm_cus_name_cp`, `ofm_cus_cont_no`, `ofm_cus_email`,
`ofm_bill_addr1`, `ofm_bill_addr2`, `ofm_bill_city`, `ofm_bill_state`, `ofm_bill_pin_code`, `ofm_bill_tin`, `ofm_bill_cst`, `ofm_bill_ecc`, `ofm_bill_pan_no`, `ofm_bill_name_cp`, `ofm_bill_cont_no`, `ofm_bill_email`,
 `ofm_ship_addr1`, `ofm_ship_addr2`, `ofm_ship_city`, `ofm_ship_state`, `ofm_ship_pin_code`, `ofm_ship_tin`, `ofm_ship_cst`, `ofm_ship_ecc`, `ofm_ship_pan_no`, `ofm_ship_name_cp`, `ofm_ship_cont_no`, `ofm_ship_email`,
 `ofm_form_app`, `ofm_insuranc`, `ofm_frei_terms`, `ofm_pay_terms`, `ofm_others`,`ofm_creditday`, `ofm_pbg_abg`, `ofm_inspect`, `ofm_ld_clause`, `ofm_app_des`, `ofm_permit`, `ofm_commis_to`, `ofm_commisper`,`ofm_commis_value`, `ofm_logis_pref`,
  `ofm_des_name_cp`, `ofm_des_cont_no`, `ofm_des_addr1`, `ofm_des_addr2`, `ofm_des_city`, `ofm_des_saate`, `ofm_des_pin_code`, `ofm_comiss_inst`, `ofm_spec_inst`, `ofm_checkedbycreator`, `ofm_checkedby_update`, `ofm_approvedat`,`ofm_note_pf`,`ofm_pf_total`,`ofm_note_b_e_d`,`ofm_bed_total`,`ofm_note_vat_cst`,`ofm_vat_cst_total`,`ofm_note_gra_tot`) 
 VALUES ('','$eq_no','$price_lsts','$qrefs','$qdates','$porefs','$podates','$from_prcs','$sap_cds','$to_gems',
 '$cfirst_names','$c_address_line_1s','$c_address_line_2s','$c_citys','$c_states','$c_pin_codes','$c_tin_nos','$c_cst_nos','$c_ecc_nos','$c_pan_nos','$c_name_contact_persions','$c_contact_nos','$c_emails',
 '$b_address_line_1s','$b_address_line_2s','$b_citys','$b_states','$b_pin_codes','$b_tin_nos','$b_cst_nos','$b_ecc_nos','$b_pan_nos','$b_name_contact_persions','$b_contact_nos','$b_emails',
 '$s_address_line_1s','$s_address_lines','$s_citys','$s_states','$s_pin_codes','$s_tin_nos','$s_cst_nos','$s_ecc_nos','$s_pan_nos','$s_name_contact_persions','$s_contact_nos','$s_emails',
 '$form_applicables','$insurances','$freight_termss','$payment_termss','$other_payments','$dayss','$pbg_abgs','$inspections','$ld_clauses','$applicable_details','$Permites','$Permits','$commission_permit_pers','$commission_permit_values','$logistic_prefers',
 '$despatch_contact_persons','$despatch_contacts','$despatch_addrs','$despatch_addr2s','$despatch_citys','$despatch_states','$despatch_pins','$despatch_commisssionings','$despatch_spacials','','','','$pf_percent','$pf_amount','$vat_percent','$vat_amount','$bed_percent','$bed_amount','$grand')");

$response['success']='1';

$dat=$_REQUEST['req_date'];
$ids=$_REQUEST['q_id'];	
$pricest=$_REQUEST['$price'];
		$updt =mysqli_query($db->connect(),"update tbl_quotation set `enq_required_date` = '$dat',`quotation_actual_price`='$pricest' where `quotation_id`='$ids'");

if($_REQUEST['req_date1']!=''){
$dat=$_REQUEST['req_date1'];
$ids=$_REQUEST['q_id1'];	
$pricest=$_REQUEST['$price1'];
		$updt =mysqli_query($db->connect(),"update tbl_quotation set `enq_required_date` = '$dat',`quotation_actual_price`='$pricest' where `quotation_id`='$ids'");
}

if($_REQUEST['req_date2']!=''){
$dat=$_REQUEST['req_date2'];
$ids=$_REQUEST['q_id2'];	
$pricest=$_REQUEST['$price2'];
		$updt =mysqli_query($db->connect(),"update tbl_quotation set `enq_required_date` = '$dat',`quotation_actual_price`='$pricest' where `quotation_id`='$ids'");
}

if($_REQUEST['req_date3']!=''){
$dat=$_REQUEST['req_date3'];
$ids=$_REQUEST['q_id3'];	
$pricest=$_REQUEST['$price3'];
		$updt =mysqli_query($db->connect(),"update tbl_quotation set `enq_required_date` = '$dat',`quotation_actual_price`='$pricest' where `quotation_id`='$ids'");
}

if($_REQUEST['req_date4']!=''){
$dat=$_REQUEST['req_date4'];
$ids=$_REQUEST['q_id4'];	
$pricest=$_REQUEST['$price4'];
		$updt =mysqli_query($db->connect(),"update tbl_quotation set `enq_required_date` = '$dat',`quotation_actual_price`='$pricest' where `quotation_id`='$ids'");
}

if($_REQUEST['req_date5']!=''){
$dat=$_REQUEST['req_date5'];
$ids=$_REQUEST['q_id5'];	
$pricest=$_REQUEST['$price5'];
		$updt =mysqli_query($db->connect(),"update tbl_quotation set `enq_required_date` = '$dat',`quotation_actual_price`='$pricest' where `quotation_id`='$ids'");
}
 $ids_query = mysqli_query($db->connect(),"select ofm_id from tbl_ofm order by ofm_id desc");
$ids_fetch=mysqli_fetch_array($ids_query);
 $ofm_id=$ids_fetch['ofm_id'];
		$updt =mysqli_query($db->connect(),"update tbl_enquiry set `ofm_id`= '$ofm_id' where enq_no='$eq_no'");
echo json_encode($response);
}
 else
	 {
		$response["success"] = 0;
		$response["notification"] = "Enquiry Creation Failure";
		echo json_encode($response);
		
	 }
?>