<?php
include('dbconnect.php');
	
$price_lsts = $_POST['price_lst'];
$qrefs = $_POST['qref'];
$qdates = $_POST['qdate'];
$sap_cds = $_POST['sap_cd'];
$porefs = $_POST['poref'];
$podates = $_POST['podate'];
$from_prcs = $_POST['from_prc'];
$to_gems = $_POST['to_gem'];
//form-2 

$cfirst_names = $_POST['cfirst_name'];
$c_address_line_1s = $_POST['c_address_line_1'];
$c_citys = $_POST['c_city'];
$c_pin_codes = $_POST['c_pin_code'];
$c_cst_nos = $_POST['c_cst_no'];
$c_pan_nos = $_POST['c_pan_no'];
$c_contact_nos = $_POST['c_contact_no'];
$c_last_names = $_POST['c_last_name'];
$c_address_line_2s = $_POST['c_address_line_2'];
$c_states = $_POST['c_state'];
$c_tin_nos = $_POST['c_tin_no'];
$c_ecc_nos = $_POST['c_ecc_no'];
$c_name_contact_persions = $_POST['c_name_contact_persion'];
$c_emails = $_POST['c_email'];
//form-3
//$chkPassports = $_POST['chkPassport'];
//

$b_address_line_1s = $_POST['b_address_line_1'];
$b_citys = $_POST['b_city'];
$b_pin_codes = $_POST['b_pin_code'];
$b_cst_nos = $_POST['b_cst_no'];
$b_pan_nos = $_POST['b_pan_no'];
$b_contact_nos = $_POST['b_contact_no'];
//$b_last_names = $_POST['b_last_name'];
$b_address_line_2s = $_POST['b_address_line_2'];
$b_states = $_POST['b_state'];
$b_tin_nos = $_POST['b_tin_no'];
$b_ecc_nos = $_POST['b_ecc_no'];
$b_name_contact_persions = $_POST['b_name_contact_persion'];
$b_emails = $_POST['b_email'];
//form-4
//$ship_addrs = $_POST['ship_addr'];
///

$s_address_line_1s = $_POST['s_address_line_1'];
$s_citys = $_POST['s_city'];
$s_pin_codes = $_POST['s_pin_code'];
$s_cst_nos = $_POST['s_cst_no'];
$s_pan_nos = $_POST['s_pan_no'];
$s_contact_nos = $_POST['s_contact_no'];
//$s_last_names = $_POST['s_last_name'];
$s_address_lines = $_POST['s_address_line'];
$s_states = $_POST['s_state'];
$s_tin_nos = $_POST['s_tin_no'];
$s_ecc_nos = $_POST['s_ecc_no'];
$s_name_contact_persions = $_POST['s_name_contact_persion'];
$s_emails = $_POST['s_email'];
//form-6

$form_applicables = $_POST['form_applicable'];
$insurances = $_POST['insurance'];
$freight_termss = $_POST['freight_terms'];
$payment_termss = $_POST['payment_terms'];
$dayss = $_POST['days'];
$other_payments = $_POST['other_payment'];
$pbg_abgs		=$_POST['pbg_abg'];
$inspections = $_POST['inspection'];
$ld_clauses = $_POST['ld_clause'];
$ldclause_applicables = $_POST['ldclause_applicable'];
$applicable_details =$_POST['applicable_detail'];
$Permites = $_POST['Permite'];
$Permits = $_POST['Permit'];
$commission_permit_pers = $_POST['commission_permit_per'];
$commission_permit_values = $_POST['commission_permit_value'];
$logistic_prefers = $_POST['logistic_prefer'];
//form-7

$despatch_contact_persons = $_POST['despatch_contact_person'];
$despatch_addrs = $_POST['despatch_addr'];
$despatch_citys = $_POST['despatch_city'];
$despatch_pins = $_POST['despatch_pin'];
$despatch_commisssionings = $_POST['despatch_commisssioning'];
$despatch_contacts = $_POST['despatch_contact'];
$despatch_addr2s = $_POST['despatch_addr2'];
$despatch_states = $_POST['despatch_state'];
$despatch_spacials = $_POST['despatch_spacial'];
$despatch_notes = $_POST['despatch_note'];
//OFM-enqNO 

 
$sql=mysqli_query($conn,"INSERT INTO `tbl_ofm`(`ofm_id`, `ofm_enqiry_number`, `ofm_price_master`, `ofm_quot_ref`, `ofm_quot_date`, `ofm_po_ref`, `ofm_po_date`, `ofm_from`, `ofm_sap_code`, `ofm_to`,
`ofm_cus_name`, `ofm_cus_addr1`, `ofm_cus_addr2`, `ofm_cus_city`, `ofm_cus_state`, `ofm_cus_pin_code`, `ofm_cus_tin`, `ofm_cus_cst`, `ofm_cus_ecc`, `ofm_cus_pan_no`, `ofm_cus_name_cp`, `ofm_cus_cont_no`, `ofm_cus_email`,
`ofm_bill_addr1`, `ofm_bill_addr2`, `ofm_bill_city`, `ofm_bill_state`, `ofm_bill_pin_code`, `ofm_bill_tin`, `ofm_bill_cst`, `ofm_bill_ecc`, `ofm_bill_pan_no`, `ofm_bill_name_cp`, `ofm_bill_cont_no`, `ofm_bill_email`,
 `ofm_ship_addr1`, `ofm_ship_addr2`, `ofm_ship_city`, `ofm_ship_state`, `ofm_ship_pin_code`, `ofm_ship_tin`, `ofm_ship_cst`, `ofm_ship_ecc`, `ofm_ship_pan_no`, `ofm_ship_name_cp`, `ofm_ship_cont_no`, `ofm_ship_email`,
 `ofm_form_app`, `ofm_insuranc`, `ofm_frei_terms`, `ofm_pay_terms`, `ofm_others`,`ofm_creditday`, `ofm_pbg_abg`, `ofm_inspect`, `ofm_ld_clause`, `ofm_app_des`, `ofm_permit`, `ofm_commis_to`, `ofm_commisper`,`ofm_commis_value`, `ofm_logis_pref`,
  `ofm_des_name_cp`, `ofm_des_cont_no`, `ofm_des_addr1`, `ofm_des_addr2`, `ofm_des_city`, `ofm_des_saate`, `ofm_des_pin_code`, `ofm_comiss_inst`, `ofm_spec_inst`, `ofm_checkedbycreator`, `ofm_checkedby_update`, `ofm_approvedat`) 
 VALUES ('','1001','$price_lsts','$qrefs','$qdates','$porefs','$podates','$from_prcs','$sap_cds','$to_gems',
 '$cfirst_names','$c_address_line_1s','$c_address_line_2s','$c_citys','$c_states','$c_pin_codes','$c_tin_nos','$c_cst_nos','$c_ecc_nos','$c_pan_nos','$c_name_contact_persions','$c_contact_nos','$c_emails',
 '$b_address_line_1s','$b_address_line_2s','$b_citys','$b_states','$b_pin_codes','$b_tin_nos','$b_cst_nos','$b_ecc_nos','$b_pan_nos','$b_name_contact_persions','$b_contact_nos','$b_emails',
 '$s_address_line_1s','$s_address_lines','$s_citys','$s_states','$s_pin_codes','$s_tin_nos','$s_cst_nos','$s_ecc_nos','$s_pan_nos','$s_name_contact_persions','$s_contact_nos','$s_emails',
 '$form_applicables','$insurances','$freight_termss','$payment_termss','$other_payments','$dayss','$pbg_abgs','$inspections','$ld_clauses','$applicable_details','$Permites','$Permits','$commission_permit_pers','$commission_permit_values','$logistic_prefers',
 '$despatch_contact_persons','$despatch_contacts','$despatch_addrs','$despatch_addr2s','$despatch_citys','$despatch_states','$despatch_pins','$despatch_commisssionings','$despatch_spacials','','','')");
if($sql){
	echo '1';
}else{
	echo '2';}
?>