<?php  


include ("dbconnect.php");
$action    = $_REQUEST['gem'];

$view          = $action;
$redirect_page = 0;
switch($action)
{	
		
 case '2KD':
	
		$kdprd_model= mysqli_real_escape_string($conn,$_POST['kdprd_model']);
		$kdsap= mysqli_real_escape_string($conn,$_POST['kd_sapcode']);
		$kddesc= mysqli_real_escape_string($conn,$_POST['kd_descrp']);
		$kdac_r134	= mysqli_real_escape_string($conn,$_POST['kdac_r134']);
		$kdac_r404c	= mysqli_real_escape_string($conn,$_POST['kdac_r404c']);
		$kdac_r407c	= mysqli_real_escape_string($conn,$_POST['kdac_r407cs']);
		$kdcap	= mysqli_real_escape_string($conn,$_POST['kdcap']);
		$kdwrk_pressure	= mysqli_real_escape_string($conn,$_POST['kdwrk_pressure']);
		$kdac_io	= mysqli_real_escape_string($conn,$_POST['kdac_io']);
		$kdrate_pwr_kw	= mysqli_real_escape_string($conn,$_POST['kdrate_pwr_kw']);
		$kddelivery_terms	= mysqli_real_escape_string($conn,$_POST['kddelivery_terms']);
		$kdec_220v	= mysqli_real_escape_string($conn,$_POST['kdec_220v']);
		$kdec_415v	= mysqli_real_escape_string($conn,$_POST['kdec_415v']);
		$kdwarranty_doc	= mysqli_real_escape_string($conn,$_POST['kdwarranty_doc']);
		$kdwarranty_doi	= mysqli_real_escape_string($conn,$_POST['kdwarranty_doi']);
		$kdweight		= mysqli_real_escape_string($conn,$_POST['kdweight']);
		//$pro_cost	= mysqli_real_escape_string($conn,$_POST['product_cost']);
		//$dis		= mysqli_real_escape_string($conn,$_POST['discount']);
		
		      $price=$kdac_r134;
		      $price.=",";
		      $price.=$kdac_r404c;
			  $price.=",";
		      $price.=$kdac_r407c;
			    
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_2kd` SET `sap_code`='$kdsap',`description`='$kddesc',`2kd_ac_r134a`='$kdac_r134',`2kd_ac_r404a`='$kdac_r404c',`2kd_ac_r407c`='$kdac_r407c',`2kd_capty_cfm`='$kdcap',`2kd_wrk_pressure`='$kdwrk_pressure',`2kd_ac_in_out`='$kdac_io',`2kd_rat_pwr`='$kdrate_pwr_kw',`2kd_delvry_term`='$kddelivery_terms',`2kd_ec_220v`='$kdec_220v',`2kd_ec_415v`='$kdec_415v',`weight`='$kdweight',`2kd_wrnt_doc`='$kdwarranty_doc',`2kd_wrnt_doi`='$kdwarranty_doi' WHERE  `product_model`='$kdprd_model'");
		     	$querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$kdprd_model'");
        if($query){ 
		echo "1";
}

 else {
	 echo "2";
 }
	
 break;
       case '2KW':
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
		       $price=$kw_ac_r134;
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_2kw` SET `sap_code`='$kdsap',`description`='$kddesc',`2kw_air_cooled_r134`='$kw_ac_r134',`2kw_capacity`='$kw_cap',`2kw_working_pressure`='$wrk_press',`2kw_air_connection_in_out`='$kw_ac_io',`2kw_power_consumption`='$pwr_cons',`2kw_delivery_terms`='$kw_delv',`2kw_electric_230v`='$kw_ec230v',`2kw_electric_415v`='$kw_ec415v',`2kw_warrenet_doc`='$kw_wrnty_doc',`2kw_warrenty_doi`='$kw_wrnty_doi',`2kw_weight`='$kw_weight' WHERE `product_model`='$pro_mdl'");
				     	$querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$pro_mdl'");

           if($query){
			   		echo '1';
}

 else {
	echo'2';
 }
 break;
  case 'ACC':

        $ac_Prd_models			= mysqli_real_escape_string($conn,$_POST['acc_Prd_model']);
		$kdsap= mysqli_real_escape_string($conn,$_POST['acc_sapcode']);
		$kddesc= mysqli_real_escape_string($conn,$_POST['acc_descrp']);
		$ac_without_var_prices	= mysqli_real_escape_string($conn,$_POST['acc_without_var_price']);
		$ac_caps				= mysqli_real_escape_string($conn,$_POST['acc_cap']);
		$ac_wrk_presures		= mysqli_real_escape_string($conn,$_POST['acc_wrk_presure']);
		$ac_io_bsps				= mysqli_real_escape_string($conn,$_POST['acc_io_bsp']);
		$ac_rate_pwrs			= mysqli_real_escape_string($conn,$_POST['acc_rate_pwr']);
		$ac_ec_r220vs			= mysqli_real_escape_string($conn,$_POST['acc_ec_r220v']);
		$ac_ec_r415vs			= mysqli_real_escape_string($conn,$_POST['acc_ec_r415v']);
		$ac_waranty_docs		= mysqli_real_escape_string($conn,$_POST['acc_waranty_doc']);
		$ac_Warranty_dois		= mysqli_real_escape_string($conn,$_POST['acc_Warranty_doi']);
		$ac_delivery_terms		= mysqli_real_escape_string($conn,$_POST['acc_delivery_term']);
		$ac_weghts				= mysqli_real_escape_string($conn,$_POST['acc_weght']);
	 $price=$ac_without_var_prices;
	
		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_acc` SET `sap_code`='$kdsap',`description`='$kddesc',`acc_wthout_vertax`='$ac_without_var_prices',`acc_capacity`='$ac_caps',`acc_wrk_pressure`='$ac_wrk_presures',`acc_ac_bsp`='$ac_io_bsps',`acc_rate_power`='$ac_rate_pwrs',`acc_ec_220v`='$ac_ec_r220vs',`acc_ec_415v`='$ac_ec_r415vs',`acc_warenty_doc`='$ac_waranty_docs',`acc_warenty_doi`='$ac_Warranty_dois',`acc_delivery`='$ac_delivery_terms',`acc_weight`='$ac_weghts' WHERE  `product_model`='$ac_Prd_models'");
		     	$querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$ac_Prd_models'");

 if($query){
			   		echo '1';
}

 else {
	echo'2';
 }
		
	break;	
	
	
  case 'HP_Filter':
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

		 $price=$hp_gnrl_filters;
		 $price.=",";
		 $price.=$hp_gndrl_oils;
		 $price.=",";
		 $price.=$hp_sub_gndrl_oils;
		 $price.=",";
		 $price.=$hp_active_cars;
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_hp_filter` SET `sap_code`='$kdsap',`description`='$kddesc', `hp_filter_gp`='$hp_gnrl_filters',`hp_filter_zp`='$hp_gndrl_oils',`hp_filter_zo`='$hp_sub_gndrl_oils',`hp_filter_zc`='$hp_active_cars',`hp_filter_delivery_trm`='$hp_dlevirs',`hp_filter_warenty_doc`='$hp_warnty_docs',`hp_filter_warenty_doi`='$hp_warnty_dois',`hp_filter__wrk_pressure`='$hp_wrk_prsurs',`hp_filter_weight`='$hp_wghts' WHERE `product_model`='$hp_prd_modls'");
		     	$querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$hp_prd_modls'");

		 if($query){
	echo '1';
}

 else {
	echo'2';
 }
break;
	
	 case 'HP_FILTER_ELEMENT':
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

	
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_hp_filter_element` SET `sap_code`='$kdsap',`description`='$kddesc',`hp_filter_ele_gpe`='$hp_ele_gen_purs',`hp_filter_ele_zpe`='$hp_ele_mic_oils',`hp_filter_ele_zoe`='$hp_ele_sub_mic_oils',`hp_filter_ele_zce`='$hp_ele_act_carbons',`hp_filter_ele_delivery_trm`='$hp_ele_delis',`hp_filter_ele_warenty_doc`='$hp_ele_wrnt_docs',`hp_filter_ele_warenty_doi`='$hp_ele_wrnt_dois',`hp_filter_ele_wrk_presure`='$hp_ele_wrk_press',`hp_filter_ele_weight`='$hp_ele_wgts' WHERE `product_model`='$hp_ele_prdt_models'");
		
		$price= $hp_ele_gen_purs;
		$price.=",";
		$price.= $hp_ele_mic_oils;
		$price.=",";
		$price.= $hp_ele_sub_mic_oils;
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$hp_ele_prdt_models'");

		 if($query){
	echo '1';
}

 else {
	echo'2';
 }

break;	
		
  case 'VAR':
	   $var_prd_models			= mysqli_real_escape_string($conn,$_POST['var_prd_model']);
	   		$kdsap= mysqli_real_escape_string($conn,$_POST['kd_sapcode']);
		$kddesc= mysqli_real_escape_string($conn,$_POST['kd_descrp']);
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
		
		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_var` SET `sap_code`='$kdsap',`description`='$kddesc',`var_ar_model_var`='$var_modal_varis',`var_ar_wrk_pressure`='$var_wrkpressurs',`var_ar_price`='$var_prcs',`var_ar_capacity`='$var_caps',`var_ar_shell_thick`='$var_shells',`var_ar_in_out`='$var_inouts',`var_ar_hand`='$var_hands',`var_ar_delivery_trm`='$var_delivrs',`var_warenty_doc`='$var_warnty_docs',`var_warenty_doi`='$var_warnty_dois',`var_moc`='$var_mocs',`var_weight`='$var_wights' WHERE `product_model`='$var_prd_models'");
		
		$price= $var_prcs;
		
		$querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$var_prd_models'");

		 if($query){
	echo '1';
}

 else {
	echo'2';
 }
break;	
	
	
	 case 'VXS':
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_vxs` SET `sap_code`='$kdsap',`description`='$kddesc',`vxs_vartex_separator`='$vxs_vartexdrains',`vxs_pipe_size`='$vxs_pipes',`vxs_line_weight`='$vxs_line_pressurs',`vxs_capacity`='$vxs_caps',`vxs_in_out`='$vxs_inouts',`vxs_delivery_trm`='$vxs_delivrys',`vxs_warenty_doc`='$vxs_warnty_docs',`vxs_warenty_doi`='$vxs_warnty_dois',`vxs_wrk_presure`='$vxs_wrk_prssurs',`vxs_weight`='$vxs_wights' WHERE `product_model`='$vxs_prd_models'");
		
		$price= $vxs_vartexdrains;
		
		$querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$vxs_prd_models'");
		 if($query){
	echo '1';
}

 else {
	echo'2';
 }
break;	
	
	case 'AT':
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
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_at` SET `sap_code`='$kdsap',`description`='$kddesc',`at_capacity`='$a_t_cap',`at_mv_bar`='$a_t_model_var',`at_mv_accessories`='$a_t_model_var_accesrs',`at_shell_thick`='$a_t_shell',`at_in_out_connection`='$a_t_io_out',`at_delevery_trm`='$a_t_delivry',`at_hand_hole`='$a_t_hnd_hol',`at_warenty_doc`='$a_t_warranty_doc',`at_warenty_doi`='$a_t_warranty_doi',`at_moc`='$a_t_moc',`at_weight`='$a_t_wght' WHERE  `product_model`='$a_t_Prd_model'");
		
		$price= $a_t_model_var;
		$price.=",";
		$price.= $a_t_model_var_accesrs;
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$a_t_Prd_model'");
	
	 if($query){
	echo '1';
}

 else {
	echo'2';
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_mst` SET `sap_code`='$kdsap',`description`='$kddesc',`mst_mv_baffle`='$mst_baffs',`mst_demister`='$mst_dems',`mst_delivery_trm`='$mst_delis',`mst_warenty_doc`='$mst_wrnt_docs',`mst_warenty_doi`='$mst_wrnt_dois',`mst_wrk_presure`='$mst_wrk_press',`mst_weight`='$mst_wgts' WHERE `product_model`='$mst_prdt_models'");
		
		$price= $mst_baffs;
		$price.=",";
		$price.= $mst_dems;
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$mst_prdt_models'");
	 if($query){
	echo '1';
}

 else {
	echo'2';
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_hln` SET `sap_code`='$kdsap',`description`='$kddesc',`hln_daa_is2825_price`='$hln_is2825s',`hln_dms_is2825_price`='$hln_activated_65s',`hln_airflow_cfm`='$hln_airflowss',`hln_in_out_flg`='$hln_inlets',`hln_dessiccant_qty`='$hld_airflss',`hln_delivery_trm`='$hln_delvrys',`hln_wrnty_doc`='$hln_wrnty_docs',`hln_wrnty_doi`='$hln_wrnty_dois',`hln_wrk_pressure`='$hln_wrk_press',`hn_inlet_temp`='$hln_rate_conditioninlets',`hn_admos_dew_pt`='$hln_rate_conditiontemps',`hln_weight`='$hln_wights' WHERE  `product_model`='$hln_prd_models'");
		
		$price= $hln_is2825s;
		$price.=",";
		$price.= $hln_activated_65s;
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$hln_prd_models'");
	 if($query){
	echo '1';
}

 else {
	echo'2';
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
		$hld_warnty_docs				= mysqli_real_escape_string($conn,$_POST['hld_warenty_doc']);
		$hld_warnty_dois				= mysqli_real_escape_string($conn,$_POST['hld_warnty_doi']);
		$hld_wrk_press					= mysqli_real_escape_string($conn,$_POST['gzf_wrk_press']);
		$hld_wights						= mysqli_real_escape_string($conn,$_POST['hld_wight']);

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_hld` SET `sap_code`='$kdsap',`description`='$kddesc',`hld_daa_is2825cc`='$hld_desiccantalumina_50s',`hld_daa_asme_cc`='$hld_Construction_prices',`hld_dms_is2825_cc`='$hld_is2825s',`hld_dms_asme_cc`='$hld_molecular_constructs',`hld_air_flow_cfm`='$hld_airfls',`hld_inlet_outlet_flg`='$hld_inlets',`hld_desiccant_qty`='$hld_qtys',`hld_warnty_doc`='$hld_warnty_docs',`hld_warenty_doi`='$hld_warnty_dois',`hld_wrk_pressure`='$hld_wrk_press',`hld_delivery_trm`='$hld_delvrys',`hld_weight`='$hld_wights' WHERE `product_model`='$hld_prd_models'");
		
		$price= $hld_desiccantalumina_50s;
		$price.=",";
		$price.= $hld_Construction_prices;
		$price.=",";
		$price.= $hld_is2825s;
		$price.=",";
		$price.= $hld_molecular_constructs;
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$hld_prd_models'");

	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
	case 'RAD':
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

	
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_rad` SET `sap_code`='$kdsap',`description`='$kddesc', `rad_mv_water_cooled_ref_r407c`='$rad_wcr_r407s',`rad_mv_capacity`='$rad_caps',`rad_mv_in_out`='$rad_ios',`rad_mv_rate_pow_ele_conn_415_3a`='$rad_rpec_415s',`rad_delivery_terms`='$rad_delis',`rad_wrk_pressur`='$rad_wrk_press',`rad_warrenty_doc`='$rad_wrnt_docs',`rad_warrenty_doi`='$rad_wrnt_dois',`rad_weight`='$rad_wgts' WHERE `product_model`='$rad_prd_models'");
		
		$price= $rad_wcr_r407s;
		
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$rad_prd_models'");

	 if($query){
	echo '1';
}

 else {
	echo'2';
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_nxg_nex_gen` SET `sap_code`='$kdsap',`description`='$kddesc',`nxg_air_cooled_r134a`='$nxg_ac_r134as',`nxg_air_cooled_r404a`='$nxg_ac_r404as',`nxg_air_cooled_r407c`='$nxg_ac_r407cs',`nxg_capacity_cfm`='$nxg_caps',`nxg_working_pressure`='$nxg_wrk_press',`nxg_air_connection_in_out`='$nxg_ac_ios',`nxg_rate_power_kw`='$nxg_rp_kws',`nxg_delivery_terms`='$nxg_delis',`nxg_electrical_connection_220v`='$nxg_ec_220vs',`nxg_electrical_connection_415v`='$nxg_ec_415vs',`nxg_warrenty_doc`='$nxg_wrnt_docs',`nxg_warrenty_doi`='$nxg_wrnt_dois',`nxg_weight`='$nxg_wghts' WHERE `product_model`='$nxg_prdt_models'");
		
		$price= $nxg_ac_r134as;
		$price.=",";
		$price.= $nxg_ac_r404as;
		$price.=",";
		$price.= $nxg_ac_r407cs;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$nxg_prdt_models'");

	 if($query){
	echo '1';
}

 else {
	echo'2';
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

       	$query	= mysqli_query($conn,"UPDATE `tbl_product_spd` SET `sap_code`='$kdsap',`description`='$kddesc',`spd_moleculer_sieve_pric`='$spd_mss',`spd_air_flow`='$spd_airs',`spd_inlet_outlet`='$spd_inlet_outs',`spd_delivery_trm`='$spd_delis',`spd_warnty_doc`='$spd_wrnt_docs',`spd_warnty_doi`='$spd_wrnt_dois',`spd_inlet_temp`='$spd_ins',`spd_atmospheric_dew_pt`='$spd_atmos',`spd_access`='$spd_accs',`spd_wrk_pressure`='$spd_wrkprss',`spd_weight`='$spd_wgts' WHERE `product_model`='$spd_prd_models'");
		
		$price= $spd_mss;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$spd_prd_models'");

	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
	case 'CHT NEXTGEN HH':
	$hh_pro_mdl					= mysqli_real_escape_string($conn,$_POST['nxtgen_hh_prd_model']);
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
		//$nxt_gen_hh_product_cost	= mysqli_real_escape_string($conn,$_POST['nxt_gen_hh_product_cost']);
		//$nxt_gen_hh_discount		= mysqli_real_escape_string($conn,$_POST['discount']);
		    
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_cht_nexgen_hh` SET `sap_code`='$kdsap',`description`='$kddesc', `cht_hh_high_temp_air_cooled_a`='$hig_tempac',`cht_hh_high_temp_water_cooled_b`='$high_tempwater',`cht_hh_capacity`='$nxtgen_hh_cap',`cht_hh_heat_load_kcal_h`='$nxtgen_hh_heatkcal',`cht_hh_heat_load_kw`='$nxtgen_hh_heatkw',`cht_hh_water_pump_flow_rate_lpm`='$water_pump_1pm',`cht_hh_water_pump_absorbed_pw_kw`='$nxt_genhh_waterpump_power',`cht_hh_cooling_fan`='$nxt_gen_hh_cooling',`cht_hh_input_output_water`='$nxt_gen_hh_io',`cht_hh_delivery_terms`='$nxt_gen_hh_delivery_terms',`cht_hh_warranty_doc`='$nxt_gen_hh_warranty_doc',`cht_hh_warranty_doi`='$nxt_gen_hh_warranty_doi',`cht_hh_weight`='$nxt_gen_hh_weight' WHERE `product_model`='$hh_pro_mdl'");
		
		$price= $hig_tempac;
		$price.=",";
		$price.= $high_tempwater;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$hh_pro_mdl'");

	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
	case 'CHT NEXTGEN LH':
  	   		$pro_mdls			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_prd_model']);
			$kdsap= mysqli_real_escape_string($conn,$_POST['cht_nexlh_sapcode']);
				$kddesc= mysqli_real_escape_string($conn,$_POST['cht_nexlh_descrp']);
		$hig_tempacs			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_lowtemp_ac']);
		$high_tempwaters	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_lowtemp_water']);
		$nxtgen_lh_cap			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_cap']);
		$nxtgen_lh_heatkcal		= mysqli_real_escape_string($conn,$_POST['cht_nexlh_heatkcal']);
		$nxtgen_lh_heatkw		= mysqli_real_escape_string($conn,$_POST['cht_nexlh_heatkw']);
		$nxg_lh_water_pump_1pm			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_water_flow']);
		$nxt_genlh_waterpump_power	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_water_abrob']);
		$nxt_gen_lh_cooling		= mysqli_real_escape_string($conn,$_POST['cht_nexlh_coolfan']);
		$nxt_gen_lh_io			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_inout']);
		$nxt_gen_lh_delivry_terms	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_delivr']);
		$nxt_gen_lh_warranty_doc	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_warnt_doc']);
		$nxt_gen_lh_warranty_doi	= mysqli_real_escape_string($conn,$_POST['cht_nexlh_warnty_doi']);
		$nxt_gen_lh_weight			= mysqli_real_escape_string($conn,$_POST['cht_nexlh_wight']);
		      
		     
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_cht_nexgen_lh`  SET `sap_code`='$kdsap',`description`='$kddesc',`cht_low_temp_air_cooled_a`='$hig_tempacs',`cht_low_temp_water_cooled_b`='$high_tempwaters',`cht_capacity`='$nxtgen_lh_cap',`cht_heat_load_kcal_h`
='$nxtgen_lh_heatkcal',`cht_heat_load_kw`='$nxtgen_lh_heatkw',`cht_water_pump_flow_rate_lpm`='$nxg_lh_water_pump_1pm',`cht_water_pump_absobed_pow_kw`='$nxt_genlh_waterpump_power',`cht_cooling_fan`='$nxt_gen_lh_cooling',`cht_input_output_water`='$nxt_gen_lh_io',`cht_delivery_terms`='$nxt_gen_lh_delivry_terms',`cht_warranty_doc`='$nxt_gen_lh_warranty_doc',`cht_warranty_doi`='$nxt_gen_lh_warranty_doi',`cht_weight`='$nxt_gen_lh_weight' WHERE `product_model`='$pro_mdls'");

		$price= $hig_tempacs;
		$price.=",";
		$price.= $high_tempwaters;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$pro_mdls'");
				
	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
		case 'SCB':
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_scb` SET `sap_code`='$kdsap',`description`='$kddesc', `scb_low_temp`='$scb_lows',`scb_high_temp`='$scb_highs',`scb_motor`='$scb_motos',`scb_in_out_size`='$scb_ios',`scb_water_flow`='$scb_wfrs',`scb_delivery_trm`='$scb_delis',`scb_outlet_temp`='$scb_out_waters',`scb_warenty_doc`='$scb_wrnt_docs',`scb_warenty_doi`='$scb_wrnt_dois',`scb_weight`='$scb_wgts' WHERE `product_model`='$scb_prd_models'");
		
		$price= $scb_lows;
		$price.=",";
		$price.= $scb_highs;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$scb_prd_models'");


	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
	
		case 'SCT':
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_sct` SET `sap_code`='$kdsap',`description`='$kddesc',`sct_low_temp_price`='$sct_lows',`sct_high_temp_price`='$sct_highs',`sct_in_out_size`='$sct_ios',`sct_water_rate`='$sct_wfrs',`sct_motor`='$sct_motos',`sct_delvery_trm`='$sct_delis',`sct_outlet_temp`='$sct_out_waters',`sct_warenty_doc`='$sct_wrnt_docs',`sct_warenty_doi`='$sct_wrnt_dois',`sct_weight`='$sct_wgts' WHERE `product_model`='$sct_prd_models'");
		
			$price= $sct_lows;
		$price.=",";
		$price.= $sct_highs;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$sct_prd_models'");



	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_wah` SET `sap_code`='$kdsap',`description`='$kddesc',`wah_with_moisture`='$wah_moistures',`wah_capacity`='$wah_capacitys',`wah_ac_bsp`='$wah_aircons',`wah_cooling_water`='$wah_coolngs',`wah_water_flow_lpm`='$wah_water_rates',`wah_shelldia`='$wah_shelldias',`wah_delivery_trm`='$wah_delivrytrms',`wah_warenty_doc`='$wah_warranty_docs',`wah_warenty_doi`='$wah_warranty_dois',`wah_wrk_pressure`='$wah_wrkpressurs',`wah_weight`='$wah_wights' WHERE `product_model`='$wah_prd_models'");
		
		$price= $wah_moistures;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$wah_prd_models'");



	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
	
	case 'ECT':
	    $ect_prd_models			= mysqli_real_escape_string($conn,$_POST['ect_prd_model']);
		$kdsap= mysqli_real_escape_string($conn,$_POST['ect_sapcode']);
				$kddesc= mysqli_real_escape_string($conn,$_POST['ect_descrp']);
		$ect_coilrows			= mysqli_real_escape_string($conn,$_POST['ect_coilrow']);
		$ect_motorhps			= mysqli_real_escape_string($conn,$_POST['ect_motorhp']);
		$ect_inouts				= mysqli_real_escape_string($conn,$_POST['ect_inout']);
		$ect_delvrys			= mysqli_real_escape_string($conn,$_POST['ect_delvry']);
		$ect_warnty_docs		= mysqli_real_escape_string($conn,$_POST['ect_wrnty_doc']);
		$ect_warnty_dois		= mysqli_real_escape_string($conn,$_POST['ect_wrnty_doi']);
		$ect_outlet_temps		= mysqli_real_escape_string($conn,$_POST['ect_outlet_temp']);
		$ect_wights				= mysqli_real_escape_string($conn,$_POST['ect_wight']);
	
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_ect` SET `sap_code`='$kdsap',`description`='$kddesc',`ect_coil_2_rows`='$ect_coilrows',`ect_motor_hp`='$ect_motorhps',`ect_in_out_bsp`='$ect_inouts',`ect_delivery_terms`='$ect_delvrys',`ect_warnty_doc`='$ect_warnty_docs',`ect_warnty_doi`='$ect_warnty_dois',`ect_outlet_temp`='$ect_outlet_temps',`ect_weight`='$ect_wights' WHERE `product_model`='$ect_prd_models'");
		
		$price= $ect_coilrows;
	
		
		
		        $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$ect_prd_models'");
		
	 if($query){
	echo '1';
}

 else {
	echo'2';
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
		$gas_delvrs			= mysqli_real_escape_string($conn,$_POST['gas_delvr']);
		$gas_Configus		= mysqli_real_escape_string($conn,$_POST['gas_Configu']);
		$gas_wrnt_docs		= mysqli_real_escape_string($conn,$_POST['gas_wrnt_doc']);
		$gas_wrnt_dois		= mysqli_real_escape_string($conn,$_POST['gas_wrnt_doi']);
		$gas_outlet_waters	= mysqli_real_escape_string($conn,$_POST['gas_outlet_water']);
		$gas_wights			= mysqli_real_escape_string($conn,$_POST['gas_wight']);
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_gas` SET `sap_code`='$kdsap',`description`='$kddesc',`gas_model_variance`='$gas_modl_varis',`gas_price`='$gas_pricess',`gas_total_connect_powr`='$gas_conct_pwrs',`gas_water_in_out`='$gas_water_ins',`gas_fan_dia`='$gas_fan_dias',`gas_motor_qty`='$gas_motr_quls',`gas_header_pip_flg`='$gas_head_pips',`gas_delivery_trm`='$gas_delvrs',`gas_config`='$gas_Configus',`gas_warenty_doc`='$gas_wrnt_docs',`gas_warenty_doi`='$gas_wrnt_dois',`gas_outlet_temp`='$gas_outlet_waters',`gas_weight`='$gas_wights' WHERE `product_model`='$gas_prd_models'");
		
			$price= $gas_pricess;
	
		
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$gas_prd_models'");
		
	 if($query){
	echo '1';
}

 else {
	echo'2';
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

	
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_gz_gfv` SET `sap_code`='$kdsap',`description`='$kddesc',`gz_gfv_price`='$gz_prcs',`gz_gfv_valve_opn_intervel`='$gz_valveopens',`gz_gfv_valve_dischrg`='$gz_valvedischrgs',`gz_gfv_pwr_consum`='$gz_pwrcons',`gz_gfv_max_opt_temp`='$gz_max_temps',`gz_gfv_max_opt_presure`='$gz_max_opers',`gz_gfv_io_ports`='$gz_inout_ports',`gz_gfv_warenty_doc`='$gz_warranty_docs',`gz_gfv_warenty_doi`='$gz_warranty_dois',`gz_gfv_deliver_trm`='$gz_delivrs',`gz_gfv_weight`='$gz_wights' WHERE `product_model`='$gz_prd_models'");
	
	$price= $gz_prcs;
	
		
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$gz_prd_models'");
	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
	case 'DCT':
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
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_dct` SET `sap_code`='$kdsap',`description`='$kddesc',`dct_price`='$dct_prcs',`dct_motor_power`='$dct_motr_pwrs',`dct_fan_qty`='$dct_fan_quls',`dct_header_pipe`='$dct_header_flgs',`dct_fan_dia`='$dct_contact_fans',`dct_delivery_trm`='$dct_delivrys',`dct_warenty_doc`='$dct_warnty_docs',`dct_warenty_doi`='$dct_warnty_dois',`dct_weight`='$dct_wights' WHERE `product_model`='$dct_prd_modls'");
		
		
		
		
		
		
			$price= $dct_prcs;
	
		
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$dct_prd_modls'");
	
	 if($query){
	echo '1';
}

 else {
	echo'2';
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
		    
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_2kd7` SET  `sap_code`='$kdsap',`description`='$kddesc',`kd7_acr134a`='$kd7_ac_r134s',`kd7_capcty`='$kd7_caps',`kd7_wrkpressur`='$kd7_wrk_pressures',`kd7_ac_inout`='$kd7_ac_ios',`kd7_rate_pwr`='$kd7_pwr_conss',`kd7_delvr`='$kd7_delivery_timess',`kd7_elec_230v`='$kd7_ec_230vs',`kd7_elec_415v`='$kw_ec_415vs',`kd7_warenty_doc`='$kd7_warnty_docs',`kd7_warenty_doi`='$kd7_warnty_dois',`kd7_weigt`='$kd7_weghts',`kd7_air_inlet`='$kd7_airs',`kd7_dew_pt`='$kd7_dews',`kd7_ambinet`='$kd7_ambientss' WHERE `product_model`='$kd7_prd_models'");
		
		$price= $kd7_ac_r134s;
	
		
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$kd7_prd_models'");
	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	case 'GCT_ECHO':
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
		    
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_gct_eco` SET `sap_code`='$kdsap',`description`='$kddesc', `gct_low_price`='$gcteco_lowcosts',`gct_high_price`='$gcteco_highcosts',`gct_recommended_erection_charges`='$gcteco_ec_prices',`gct_capacity`='$gcteco_caps',`gct_motor`='$gcteco_motors',`gct_power_consumed`='$gcteco_powrconss',`gct_water_flow_rate`='$gcteco_waters',`gct_in_out_size`='$gcteco_inouts',`gct_basin_holding_capacity`='$gcteco_basincaps',`gct_delivery_terms`='$gcteco_delvrys',`gct_wrnty_doc`='$gcteco_wrnty_docs',`gct_wrnty_doi`='$gcteco_wrnty_dois',`gct_weight`='$gcteco_wights' WHERE `product_model`='$gcteco_prd_models'");
		
		$price= $gcteco_lowcosts;
		$price.=",";
		$price.= $gcteco_highcosts;
		$price.=",";
		$price.= $gcteco_ec_prices;
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$gcteco_prd_models'");
	
	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	case 'CHT_MINI':
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
	
		   
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_cht_mini` SET `sap_code`='$kdsap',`description`='$kddesc',`cht_mini_bar_ac_r22`='$cht_1_3acr22s',`cht_mini_bar_ac_r22_phe`='$cht_1_3acphes',`cht_mini_capacity`='$cht_caps',`cht_mini_heatload_kw`='$cht_heats',`cht_mini_heatload_kcal`='$cht_heat_kws',`cht_mini_waterpump_absorbed`='$aht_water_flws',`cht_mini_waterpump_flow`='$cht_water_pumps',`cht_mini_cooling_fan`='$cht_coolingfans',`cht_mini_in_out_water`='$cht_in_outs',`cht_mini_delivery`='$cht_delivrys',`cht_mini_warenty_doc`='$cht_warrnty_docs',`cht_mini_warenty_doi`='$cht_warrnty_dois',`cht_mini_weight`='$cht_wghts' WHERE `product_model`='$cht_prd_models'");
		
		$price= $cht_1_3acr22s;
		$price.=",";
		$price.= $cht_1_3acphes;
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$cht_prd_models'");
	
	 if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
		case'GFV':
	
	    $gzf_prd_models		= mysqli_real_escape_string($conn,$_POST['gzf_prd_model']);
		$kdsap= mysqli_real_escape_string($conn,$_POST['gzf_sapcode']);
				$kddesc= mysqli_real_escape_string($conn,$_POST['gzf_descrp']);
		$gzf_prcs			= mysqli_real_escape_string($conn,$_POST['gzf_prc']);
		$gzf_valveopens		= mysqli_real_escape_string($conn,$_POST['gzf_valveopen']);
		$gzf_valvedischrgs	= mysqli_real_escape_string($conn,$_POST['gzf_valvedischrg']);
		$gzf_pwrcons		= mysqli_real_escape_string($conn,$_POST['gff_pwrcon']);
		$gzf_max_temps		= mysqli_real_escape_string($conn,$_POST['gzf_max_temp']);
		$gzf_max_opers		= mysqli_real_escape_string($conn,$_POST['gzf_max_oper']);
		$gzf_inout_ports	= mysqli_real_escape_string($conn,$_POST['gzf_inout_port']);
		$gzf_warranty_docs	= mysqli_real_escape_string($conn,$_POST['gzf_warranty_doc']);
		$gzf_warranty_dois	= mysqli_real_escape_string($conn,$_POST['gzf_warranty_doi']);
		$gzf_delivrs		= mysqli_real_escape_string($conn,$_POST['gzf_delivr']);
		$gzf_wights			= mysqli_real_escape_string($conn,$_POST['gzf_wght']);
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_gz_gfv` SET `sap_code`='$kdsap',`description`='$kddesc',`gz_gfv_price`='$gzf_prcs',`gz_gfv_valve_opn_intervel`='$gzf_valveopens',`gz_gfv_valve_dischrg`='$gzf_valvedischrgs',`gz_gfv_pwr_consum`='$gzf_pwrcons',`gz_gfv_max_opt_temp`='$gzf_max_temps',`gz_gfv_max_opt_presure`='$gzf_max_opers',`gz_gfv_io_ports`='$gzf_inout_ports',`gz_gfv_warenty_doc`='$gzf_warranty_docs',`gz_gfv_warenty_doi`='$gzf_warranty_dois',`gz_gfv_deliver_trm`='$gzf_delivrs',`gz_gfv_weight`='$gzf_wights' WHERE `product_model`='$gzf_prd_models'");
		
		$price= $gzf_prcs;
	
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$kdsap',`price`='$price',description='$kddesc' WHERE  `type_price_model_no`='$gzf_prd_models'");
		
		if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
case'GZF CATRIDGES':
	
	    $gzf_cart_prd_models		= $_POST['gzf_cart_prd_model'];
		$gzf_cart_genralfilters		= $_POST['gzf_cart_genralfilter'];
		$gzf_cart_microils			= $_POST['gzf_cart_microil'];
		$gzf_cart_sub_microils		= $_POST['gzf_cart_sub_microil'];
		$gzf_cart_activatedcarbs	= $_POST['gzf_cart_activatedcarb'];
		$gzf_cart_caps				= $_POST['gzf_cart_cap'];
		$gzf_cart_delvrs			= $_POST['gzf_cart_delvr'];
		$gzf_cart_warnty_docs		= $_POST['gzf_cart_warnty_doc'];
		$gzf_cart_warnty_dois		= $_POST['gzf_cart_warnty_doi'];
		$gzf_cart_wights			= $_POST['gzf_cart_wight'];
		$gzf_cart_sapcode			= $_POST['gzf_cart_sapcode'];
		$gzf_cart_descrp			= $_POST['gzf_cart_descrp'];

		
		
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_gzf_cartridges` SET `gzf_cartridges_mv_gpe`='$gzf_cart_genralfilters',`gzf_cartridges_mv_zpe`='$gzf_cart_microils',`gzf_cartridges_mv_zoe`='$gzf_cart_sub_microils',`gzf_cartridges_mv_zce`='$gzf_cart_activatedcarbs',`gzf_cartridges_capacity`='$gzf_cart_caps',`gzf_cartridges_delivery_trm`='$gzf_cart_delvrs',`gzf_cartridges_warenty_doc`='$gzf_cart_warnty_docs',`gzf_cartridges_warenty_doi`='$gzf_cart_warnty_dois',`gzf_cartridges_weight`='$gzf_cart_wights',`sap_code`='$gzf_cart_sapcode',`description`='$gzf_cart_descrp' WHERE `product_model`='$gzf_cart_prd_models'");
		
		$price= $gzf_cart_microils;
		
		    $querys	= mysqli_query($conn,"UPDATE `tbl_type_price` SET `sapcode`='$gzf_cart_sapcode',`price`='$price',description='$gzf_cart_descrp' WHERE  `type_price_model_no`='$gzf_cart_prd_models'");
		if($query){
	echo '1';
}

 else {
	echo'2';
 }
	break;
	
}








