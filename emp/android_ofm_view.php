<?php
	include('dbconnect.php');
	$ofm_enq_id=$_GET['ofms_id'];
	$sql=mysqli_query($conn,"select * from tbl_ofm where `ofm_enqiry_number`='$ofm_enq_id'");
	$res=mysqli_fetch_array($sql);
$sql1=mysqli_query($conn,"select * from tbl_enquiry where `enq_no`='$ofm_enq_id'");
	$res1=mysqli_fetch_array($sql1);
$no=$res1['enq_alloted_to'];
$t="select * from tbl_user where `user_code`='$no'";
$sql2=mysqli_query($conn,$t);
	$res2=mysqli_fetch_array($sql2);
$ban=$res2['user_name'];
		$enq_nums    = $res['ofm_enqiry_number'];
		$price_lsts = $res['ofm_price_master'];
		$qrefs		= $res['ofm_quot_ref'];
		$qdates		= $res['ofm_quot_date'];
		$sap_cds	= $res['ofm_sap_code'];	
		$porefs		= $res['ofm_po_ref'];	
		$podates	= $res['ofm_po_date'];
		$from_prcs	= $res['ofm_from'];	
		$to_gems	= $res['ofm_to'];
		//form-2 

		$cfirst_names = $res['ofm_cus_name'];
		$c_address_line_1s = $res['ofm_cus_addr1'];
		$c_citys = $res['ofm_cus_city'];
		$c_pin_codes = $res['ofm_cus_pin_code'];
		$c_cst_nos= $res['ofm_cus_cst'];
		$c_pan_nos = $res['ofm_cus_pan_no'];
		$c_contact_nos = $res['ofm_cus_cont_no'];
		$c_address_line_2s = $res['ofm_cus_addr2'];
		$c_states = $res['ofm_cus_state'];
		$c_tin_nos = $res['ofm_cus_tin'];
		$c_ecc_nos = $res['ofm_cus_ecc'];
		$c_name_contact_persions = $res['ofm_cus_name_cp'];
		$c_emails = $res['ofm_cus_email'];
		//form-3

	$b_address_line_1s = $res['ofm_bill_addr1'];
$b_citys = $res['ofm_bill_city'];
$b_pin_codes = $res['ofm_bill_pin_code'];
$b_cst_nos = $res['ofm_bill_cst'];
$b_pan_nos = $res['ofm_bill_pan_no'];
$b_contact_nos = $res['ofm_bill_cont_no'];
$b_address_line_2s = $res['ofm_bill_addr2'];
$b_states = $res['ofm_bill_state'];
$b_tin_nos = $res['ofm_bill_tin'];
$b_ecc_nos = $res['ofm_bill_ecc'];
$b_name_contact_persions = $res['ofm_bill_name_cp'];
$b_emails = $res['ofm_bill_email'];
//form-4

$s_address_line_1s = $res['ofm_ship_addr1'];
$s_citys = $res['ofm_ship_city'];
$s_pin_codes = $res['ofm_ship_pin_code'];
$s_cst_nos = $res['ofm_ship_cst'];
$s_pan_nos = $res['ofm_ship_pan_no'];
$s_contact_nos = $res['ofm_ship_cont_no'];
$s_address_lines = $res['ofm_ship_addr2'];
$s_states = $res['ofm_ship_state'];
$s_tin_nos = $res['ofm_ship_tin'];
$s_ecc_nos = $res['ofm_ship_ecc'];
$s_name_contact_persions = $res['ofm_ship_name_cp'];
$s_emails = $res['ofm_ship_email'];
//form-5
$prd_pfs = $res['ofm_note_pf'];
$prd_pf_ttls = $res['ofm_pf_total'];
$prd_beds = $res['ofm_note_b_e_d'];
$prd_bed_ttls = $res['ofm_bed_total'];
$prd_vats = $res['ofm_note_vat_cst'];
$prd_vat_ttls = $res['ofm_vat_cst_total'];
$prd_grds = $res['ofm_note_gra_tot'];
$prd_nots = $res['ofm_note'];

//form-6

$form_applicables = $res['ofm_form_app'];
$insurances = $res['ofm_insuranc'];
$freight_termss = $res['ofm_frei_terms'];
$payment_termss = $res['ofm_pay_terms'];
$other_payments = $res['ofm_others'];
$dayss = $res['ofm_creditday'];
$pbg_abgs		=$res['ofm_pbg_abg'];
$inspections = $res['ofm_pbg_abg'];
$ld_clauses = $res['ofm_ld_clause'];
$applicable_details =$res['ofm_app_des'];
$Permites = $res['ofm_permit'];
$Permits = $res['ofm_commis_to'];
$commission_permit_pers = $res['ofm_commisper'];
$commission_permit_values = $res['ofm_commis_value'];
$logistic_prefers = $res['ofm_logis_pref'];


//form-7

$despatch_contact_persons = $res['ofm_des_name_cp'];
$despatch_addrs = $res['ofm_des_addr1'];
$despatch_citys = $res['ofm_des_city'];
$despatch_pins = $res['ofm_des_pin_code'];
$despatch_commisssionings = $res['ofm_comiss_inst'];
$despatch_contacts = $res['ofm_des_cont_no'];
$despatch_addr2s = $res['ofm_des_addr2'];
$despatch_states = $res['ofm_des_saate'];
$despatch_spacials = $res['ofm_spec_inst'];
$despatch_notes = $res['ofm_spec_inst'];
 ?>
<html>
<head>
<script type="text/javascript" src="print/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
             $('#btnPrint').hide();
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=700,width=800');
            printWindow.document.write('<html><head><title></title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
            location.reload();
        });
    </script>

</head>
<body>
<div id="dvContainer">
<table style="width: 800px;height: 500px;border: 1px solid black;padding: 0px">
  <tr>
    <th rowspan="2" style="text-align: left;border: 1px solid black;padding: 0px">AS PER PRICE MASTER<br/>
	</th>
    <th rowspan="2" colspan="3" style="border: 1px solid black;padding: 0px">ORDER FORWARDING MEMO </th> 
    <th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">Q.REF:<?php echo $qrefs;?><br/>DATE:<?php echo $qdates;?></th>
  </tr>
  <tr>
   
    
    <th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">PO.REF:<?php echo $porefs;?><br/>
	DATE:<?php echo $podates;?></th>
  </tr>
  <tr>
    <th style="text-align: left;border: 1px solid black;padding: 0px">FROM</th>
    <td colspan="6" style="border: 1px solid black;padding: 0px"> <?php echo $from_prcs; ?></td>

  </tr>
  <tr>
    <th style="text-align: left;border: 1px solid black;padding: 0px">SAP CODE</th>
     <td colspan="6" style="border: 1px solid black;padding: 0px"> <?php echo $sap_cds; ?></td>
  </tr>
<tr>
    <th style="text-align: left;border: 1px solid black;padding: 0px">TO</th>
    <td colspan="6" style="border: 1px solid black;padding: 0px"> <?php echo $to_gems; ?></td>
    
</tr><tr>
	<th colspan="6" style="border: 1px solid black;padding: 0px">CUSTOMER DETAILS</th>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CUSTOMER NAME(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $cfirst_names; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ADDRESS LINE 1(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_address_line_1s; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ADDRESS LINE 2(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_address_line_2s; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CITY(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_citys; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">STATE(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_states; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">PIN CODE(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_pin_codes; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">TIN NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_tin_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CST NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_cst_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ECC NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_ecc_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">PAN NO(**)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_pan_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">NAME OF THE CONTACT PERSION</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_name_contact_persions; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CONTACT NO</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_contact_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">E-MAIL</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $c_emails; ?></td>
</tr>
<tr>
	<th colspan="6" style="border: 1px solid black;padding: 0px;text-align:center">BILLING ADDRESS </th>
</tr>

<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ADDRESS LINE 1(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_address_line_1s; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ADDRESS LINE 2(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_address_line_2s; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CITY(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_citys; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">STATE(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_states; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">PIN CODE(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_pin_codes; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">TIN NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_tin_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CST NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_cst_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ECC NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_ecc_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">PAN NO(**)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_pan_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">NAME OF THE CONTACT PERSION</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_name_contact_persions; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CONTACT NO</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_contact_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">E-MAIL</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $b_emails; ?></td>
</tr>
<tr>
	<th colspan="6" style="border: 1px solid black;padding: 0px;text-align:center">SHIPPING ADDRESS</th>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ADDRESS LINE 1(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_address_line_1s; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ADDRESS LINE 2(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_address_lines; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CITY(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_citys; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">STATE(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_states; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">PIN CODE(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_pin_codes; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">TIN NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_tin_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CST NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_cst_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">ECC NO(*)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_ecc_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">PAN NO(**)</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_pan_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">NAME OF THE CONTACT PERSION</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_name_contact_persions; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">CONTACT NO</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_contact_nos; ?></td>
</tr>
<tr>
	<th colspan="2" style="text-align: left;border: 1px solid black;padding: 0px">E-MAIL</th>
	<td colspan="4" style="border: 1px solid black;padding: 0px"/><?php echo $s_emails; ?></td>
</tr>
</table>

<table style="width: 800px;border: 1px solid black;border-collapse: collapse;padding: 3px">
  <tr>
    <th colspan="9" style="border: 1px solid black;border-collapse: collapse;padding: 3px;text-align:center">PRODUCT DETAILS</th>
  </tr>
  <tr>
    <th style="border: 1px solid black;border-collapse: collapse;padding: 3px">MODEL</th>
    <th style="border: 1px solid black;border-collapse: collapse;padding: 3px">SAP CODE</th>
	<th colspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 3px">DESCRIPTION</th>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">QTY</th>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">LIST PRICE</th>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">DISCOUNT(%)</th>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">ACTUAL<br>PRICE</th>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">REQUIRED<br>DATE</th>
  </tr>
 
  <tr>
  <?php
 $t="select * from tbl_quotation where quotation_no='$qrefs'";
	$sql=mysqli_query($conn,$t);
while($r=mysqli_fetch_array($sql)){
$model=$r['enq_product_model_no'];
 $qq=mysqli_query($conn,"select * from tbl_type_price where type_price_model_no='$model'"); 
						 $row=mysqli_fetch_array($qq);
	
$tsst= $r['enq_product_price'] / $r['enq_product_qty']; 	

$tss="select sum(enq_product_price) as ttt from tbl_quotation where quotation_no='$qrefs' group by quotation_no";
	$sqls=mysqli_query($conn,$tss);
$rs=mysqli_fetch_array($sqls);
$p=$r['enq_product_price']-$r['enq_product_price']*($r['enq_product_discount']/100);
 		 
  ?>
    <td style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $r['enq_product_model_no']; ?></td>
    <td style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $row['sapcode']; ?></td>
	<td colspan="2" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $row['description']; ?></td>
	<td style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $r['enq_product_qty']; ?></td>
	<td style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $tsst; ?></td>
	<td style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $r['enq_product_discount'];?></td>
	<td style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $p;?></td>
	<td style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $r['enq_required_date']; ?></td>
  </tr>
 <?php } ?>
</table>
<table style="width: 800px;border: 1px solid black;border-collapse: collapse;padding: 3px">
  <tr>
    <th rowspan="8" colspan="12"  style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px;width:230px">NOTE:<?php echo $prd_nots; ?></th>
  </tr>
  <tr>
    <th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px;" >TOTAL VALUE</th>
	<td  style="border: 1px solid black;border-collapse: collapse;padding: 3px;width:115px">Rs.<?php  echo $rs['ttt'];?></td>
  </tr>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">P&F(<?php echo $prd_pfs; ?>% )</th>
	<td colspan="" style="border: 1px solid black;border-collapse: collapse;padding: 3px;width:115px">Rs.<?php echo $prd_pf_ttls; ?></td> 
  </tr>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">B.E.D(<?php echo $prd_beds; ?>%)</th>
	<td colspan="" style="border: 1px solid black;border-collapse: collapse;padding: 3px;width:115px">Rs.<?php echo $prd_bed_ttls; ?></td>
  </tr>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">VAT/CST( <?php echo $prd_vats; ?>%)</th>
	<td colspan="" style="border: 1px solid black;border-collapse: collapse;padding: 3px;width:115px">Rs.<?php echo $prd_vat_ttls; ?></td>
  </tr>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">GRAND TOTAL</th>
	<td colspan="" style="border: 1px solid black;border-collapse: collapse;padding: 3px;width:115px">Rs.<?php echo $prd_grds; ?></td>
  </tr>
 </table>
 <table style="width: 800px;border: 1px solid black;border-collapse: collapse;padding: 3px">

  <tr>
    <th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">FORM APPLICABLE</th>
	<td colspan="12" style="border: 1px solid black;padding: 0px"/><?php echo $form_applicables; ?></td>
  </tr>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">INSURANCE</th>
	<td colspan="12" style="border: 1px solid black;padding: 0px"/><?php echo $insurances; ?></td>
  </tr>
  <tr>
	<th rowspan="2" style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">FREIGHT TERMS</th>
	<td  colspan="12" style="border: 1px solid black;padding: 0px"/><?php echo $freight_termss; ?></td>
  </tr>
  <tr></tr>
  <tr>
	<th rowspan="2" style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">PAYMENT TERMS</th>
	
<?php if($dayss=='0' && $other_payments==''){ ?>
	<td colspan="6" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $payment_termss; ?></td>
<?php } if($dayss!='0' && $other_payments==''){?>
	<td colspan="6" style="border: 1px solid black;border-collapse: collapse;padding: 3px">CREDIT DAYS:<?php echo $dayss; ?></td>
<?php } ?>



  </tr>
<tr>
<?php 
if($other_payments!='') { ?>
<th colspan="8" style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">OTHERS(PLS MENTION):<?php echo $other_payments; ?></th>
</tr>
 <?php } ?>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">PBG/ABG</th>
	<td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $pbg_abgs; ?></td>
	
  </tr>
  <tr>
  <th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">INSPECTION</th>
  <td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $inspections; ?></td>
	
  </tr>
  <tr>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">LD CLAUSE</th>
	<td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $ld_clauses; ?></td>
	
  </tr>
  <tr>
  	<th rowspan="1" style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">IF LD CLAUSE<br>APPLICABLE DESCRIBE<br>IN DETAIL</th>
	<td colspan="8" rowspan="1" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $applicable_details; ?></td>
  </tr>
  <tr>
  <th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">PERMIT</th>
  
  <td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $Permites; ?></td>
  </tr>
  <tr>
  <th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">COMMISSION TO</th>
 
  <td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $Permits; ?></td>
  </tr>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">COMMISSION</th>
	<td colspan="4" style="border: 1px solid black;border-collapse: collapse;padding: 3px">(<?php echo $commission_permit_pers; ?> %)</td>
	<td colspan="4" style="border: 1px solid black;border-collapse: collapse;padding: 3px">(<?php echo $commission_permit_values; ?>)</td>
  </tr>
  <tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">LOGISTICS PREFERED</th>
	<td colspan="9" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $logistic_prefers; ?></td>
  </tr>
 </table>
 <table style="width: 800px;border: 1px solid black;border-collapse: collapse;padding: 3px">
  <tr>
	<th colspan="15" style="border: 1px solid black;border-collapse: collapse;padding: 3px">DISPATCH DOCUMENTS TO BE SENT TO</th>
 </tr>
<tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">NAME OF THE CONTACT PERSION</th>
	<td colspan="13" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_contact_persons; ?></td>
</tr>
<tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">CONTACT NO</th>
	<td colspan="13" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_contacts; ?></td>
</tr>
<tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">ADDRESS LINE 1</th>
	<td colspan="13" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_addrs; ?></td>
</tr>
<tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">ADDRESS LINE 2</th>
	<td colspan="13" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_addr2s; ?></td>
</tr>
<tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">CITY</th>
	<td colspan="13" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_citys; ?></td>
</tr>
<tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">STATE</th>
	<td colspan="13" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_states; ?></td>
</tr>
<tr>
	<th style="text-align: left;border: 1px solid black;border-collapse: collapse;padding: 3px">PIN CODE</th>
	<td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_pins; ?></td>
	
</tr>
</table>
<table style="width: 800px;border: 1px solid black;border-collapse: collapse;padding: 3px">
<tr>
	<th style="text-align=left: ;border: 1px solid black;border-collapse: collapse;padding: 3px">COMMISSIONING <br>INSTRUCTION</th>
	<td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_commisssionings; ?></td>
</tr>
<tr>
	<th style="text-align=left: ;border: 1px solid black;border-collapse: collapse;padding: 3px">SPECIAL INSTRUCTIONS</th>
	<td colspan="8" style="border: 1px solid black;border-collapse: collapse;padding: 3px"><?php echo $despatch_spacials; ?></td>
</tr>
<tr>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">PREPARED BY:<?php echo $ban; ?>(<?php echo $no; ?>)</th>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">CHECKED:</th>
	<th style="border: 1px solid black;border-collapse: collapse;padding: 3px">APPROVED:</th>
</tr>

</table>

