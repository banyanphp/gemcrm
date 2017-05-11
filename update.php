<!-- 2kd -->
<?php
 if(isset($_POST['update']))
      {     
		$kdprd_model	= $_POST['2kdprd_model'];
		$kdac_r134	= $_POST['2kdac_r134'];
		$kdac_r404c	= $_POST['2kdac_r404c'];
		$kdac_r407c	= $_POST['2kdac_r407cs'];
		$kdcap	= $_POST['2kdcap'];
		$kdwrk_pressure	= $_POST['2kdwrk_pressure'];
		$kdac_io	= $_POST['2kdac_io'];
		$kdrate_pwr_kw		= $_POST['2kdrate_pwr_kw'];
		$kddelivery_terms			= $_POST['2kddelivery_terms'];
		$kdec_220v	= $_POST['2kdec_220v'];
		$kdec_415v	= $_POST['2kdec_415v'];
		$kdwarranty_doc	= $_POST['2kdwarranty_doc'];
		$kdwarranty_doi	= $_POST['2kdwarranty_doi'];
		$kdweight		= $_POST['2kdweight'];
		//$pro_cost	= $_POST['product_cost'];
		//$dis		= $_POST['discount'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_product_2kd` SET `2kd_ac_r134a`='$kdac_r134',`2kd_ac_r404a`='$kdac_r404c',`2kd_ac_r407c`='$kdac_r407c',`2kd_capty_cfm`='$kdcap',`2kd_wrk_pressure`='$kdwrk_pressure',`2kd_ac_in_out`='$kdac_io',`2kd_rat_pwr`='$kdrate_pwr_kw',`2kd_delvry_term`='$kddelivery_terms',`2kd_ec_220v`='$kdec_220v',`2kd_ec_415v`='$kdec_415v',`weight`='$kdweight',`2kd_wrnt_doc`='$kdwarranty_doc',`2kd_wrnt_doi`='$kdwarranty_doi' WHERE  `product_model`='$prd_mdl'");
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row1=mysqli_fetch_array($query))

		
		{
	?>
		<?php /*************************  end with }} ************************************************/?>
	
	
	
	
	
<!-- 2kw -->	
<?php
		 if(isset($_POST['update']))
      {     
		$pro_mdl		= $_POST['2kw_prd_model'];
		$kw_ac_r134		= $_POST['2kw_ac_r134'];
		$kw_cap			= $_POST['2kw_cap'];
		$wrk_press		= $_POST['2kw_wrk_pressure'];
		$kw_ac_io		= $_POST['2kw_ac_io'];
		$pwr_cons		= $_POST['2kw_pwr_cons'];
		$kw_delv		= $_POST['2kw_delivery_times'];
		$kw_ec230v		= $_POST['kw_ec_230v'];
		$kw_ec415v		= $_POST['kw_ec_415v'];
		$kw_wrnty_doc	= $_POST['2kw_warnty_doc'];
		$kw_wrnty_doi	= $_POST['2kw_warnty_doi'];
		$kw_weight		= $_POST['2kw_weght'];
		//$kw_discunt		= $_POST['discount'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_2kw` SET `2kw_air_cooled_r134`='$kw_ac_r134',`2kw_capacity`='$kw_cap',`2kw_working_pressure`='$wrk_press',`2kw_air_connection_in_out`='$kw_ac_io',`2kw_power_consumption`='$pwr_cons',`2kw_delivery_terms`='$kw_delv',`2kw_electric_230v`='$kw_ec230v',`2kw_electric_415v`='$kw_ec415v',`2kw_warrenet_doc`='$kw_wrnty_doc',`2kw_warrenty_doi`='$kw_wrnty_doi',`2kw_weight`='$kw_weight' WHERE `product_model`='$prd_mdl'");
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row2=mysqli_fetch_array($query))

		
		{
	?>
<!-- acc --->
<?php
 if(isset($_POST['update']))
      {     
		$ac_Prd_models			= $_POST['acc_Prd_model'];
		$ac_without_var_prices	= $_POST['acc_without_var_price'];
		$ac_caps				= $_POST['acc_cap'];
		$ac_wrk_presures		= $_POST['acc_wrk_presure'];
		$ac_io_bsps				= $_POST['acc_io_bsp'];
		$ac_rate_pwrs			= $_POST['acc_rate_pwr'];
		$ac_ec_r220vs			= $_POST['acc_ec_r220v'];
		$ac_ec_r415vs			= $_POST['acc_ec_r415v'];
		$ac_waranty_docs		= $_POST['acc_waranty_doc'];
		$ac_Warranty_dois		= $_POST['acc_Warranty_doi'];
		$ac_delivery_terms		= $_POST['acc_delivery_term'];
		$ac_weghts				= $_POST['acc_weght'];
		//$pro_cost	= $_POST['product_cost'];
		//$dis		= $_POST['discount'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_acc` SET `acc_wthout_vertax`='$ac_without_var_prices',`acc_capacity`='$ac_caps',`acc_wrk_pressure`='$ac_wrk_presures',`acc_ac_bsp`='$ac_io_bsps',`acc_rate_power`='$ac_rate_pwrs',`acc_ec_220v`='$ac_ec_r220vs',`acc_ec_415v`='$ac_ec_r415vs',`acc_warenty_doc`='$ac_waranty_docs',`acc_warenty_doi`='$ac_Warranty_dois',`acc_delivery`='$ac_delivery_terms',`acc_weight`='$ac_weghts' WHERE  `product_model`='$prd_mdl'");
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row3=mysqli_fetch_array($query))
	
		
		{
	?>

	<!-- AT -->
	<?php
	
		 if(isset($_POST['update']))
      {     
		$a_t_Prd_model			= $_POST['at_Prd_model'];
		$a_t_cap				= $_POST['at_cap'];
		$a_t_model_var			= $_POST['at_model_var'];
		$a_t_model_var_accesrs	= $_POST['at_model_var_accesrs'];
		$a_t_shell				= $_POST['at_shell'];
		$a_t_io_out				= $_POST['at_io_out'];
		$a_t_delivry			= $_POST['at_delivry'];
		$a_t_hnd_hol			= $_POST['at_hnd_hol'];
		$a_t_warranty_doc		= $_POST['at_warranty_doc'];
		$a_t_warranty_doi		= $_POST['at_warranty_doi'];
		$a_t_moc				= $_POST['at_moc_coc'];
		$a_t_wght				= $_POST['at_wght'];
		//$pro_cost	= $_POST['product_cost'];
		//$dis		= $_POST['discount'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_at` SET `at_capacity`='$a_t_cap',`at_mv_bar`='$a_t_model_var',`at_mv_accessories`='$a_t_model_var_accesrs',`at_shell_thick`='$a_t_shell',`at_in_out_connection`='$a_t_io_out',`at_delevery_trm`='$a_t_delivry',`at_hand_hole`='$a_t_hnd_hol',`at_warenty_doc`='$a_t_warranty_doc',`at_warenty_doi`='$a_t_warranty_doi',`at_moc`='$a_t_moc',`at_weight`='$a_t_wght' WHERE  `product_model`='$prd_mdl'");
	
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row4=mysqli_fetch_array($query))
	
		
		{
	?>
	
	<!--cht_mini -->
	<?php 
	 if(isset($_POST['update']))
      {     
		$cht_prd_models			= $_POST['cht_prd_model'];
		$cht_1_3acr22s			= $_POST['cht_1_3acr22'];
		$cht_1_3acphes			= $_POST['cht_1_3acphe'];
		$cht_caps				= $_POST['cht_cap'];
		$cht_heats				= $_POST['cht_heat'];
		$cht_heat_kws			= $_POST['cht_heat_kw'];
		$aht_water_flws			= $_POST['aht_water_flw'];
		$cht_water_pumps		= $_POST['cht_water_pump'];
		$cht_coolingfans		= $_POST['cht_coolingfan'];
		$cht_in_outs			= $_POST['cht_in_out'];
		$cht_delivrys			= $_POST['cht_delivry'];
		$cht_warrnty_docs		= $_POST['cht_warrnty_doc'];
		$cht_warrnty_dois		= $_POST['cht_warrnty_doi'];
		$cht_wghts				= $_POST['cht_wght'];
		//$pro_cost	= $_POST['product_cost'];
		//$dis		= $_POST['discount'];
		      print_r($_POST);
       	$query	= mysqli_query($conn,"UPDATE `tbl_cht_mini` SET `cht_mini_bar_ac_r22`='$cht_1_3acr22s',`cht_mini_bar_ac_r22_phe`='$cht_1_3acphes',`cht_mini_capacity`='$cht_caps',`cht_mini_heatload_kw`='$cht_heats',`cht_mini_heatload_kcal`='$cht_heat_kws',`cht_mini_waterpump_absorbed`='$aht_water_flws',`cht_mini_waterpump_flow`='$cht_water_pumps',`cht_mini_cooling_fan`='$cht_coolingfans',`cht_mini_in_out_water`='$cht_in_outs',`cht_mini_delivery`='$cht_delivrys',`cht_mini_warenty_doc`='$cht_warrnty_docs',`cht_mini_warenty_doi`='$cht_warrnty_dois',`cht_mini_weight`='$cht_wghts' WHERE `product_model`='$prd_mdl'");
	
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row5=mysqli_fetch_array($query))
	
		
		{
	?>
	<!-- nxtgen_hh -->
	<?php 
	
		 if(isset($_POST['update']))
      {     
		$hh_pro_mdl					= $_POST['nxtgen_hh_prd_model'];
		$hig_tempac					= $_POST['nxtgen_hh_hig_tempac'];
		$high_tempwater				= $_POST['nxtgen_hh_high_tempwater'];
		$nxtgen_hh_cap				= $_POST['nxtgen_hh_cap'];
		$nxtgen_hh_heatkcal			= $_POST['nxtgen_hh_heatkcal'];
		$nxtgen_hh_heatkw			= $_POST['nxtgen_hh_heatkw'];
		$water_pump_1pm				= $_POST['water_pump_1pm'];
		$nxt_genhh_waterpump_power	= $_POST['nxt_genhh_waterpump_power'];
		$nxt_gen_hh_cooling			= $_POST['nxt_gen_hh_cooling'];
		$nxt_gen_hh_io				= $_POST['nxt_gen_hh_io'];
		$nxt_gen_hh_delivery_terms	= $_POST['nxt_gen_hh_delivery_terms'];
		$nxt_gen_hh_warranty_doc	= $_POST['nxt_gen_hh_warranty_doc'];
		$nxt_gen_hh_warranty_doi	= $_POST['nxt_gen_hh_warranty_doi'];
		$nxt_gen_hh_weight			= $_POST['nxtgen_hh_wight'];
		//$nxt_gen_hh_product_cost	= $_POST['nxt_gen_hh_product_cost'];
		//$nxt_gen_hh_discount		= $_POST['discount'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_cht_nexgen_hh` SET `cht_hh_high_temp_air_cooled_a`='$hig_tempac',`cht_hh_high_temp_water_cooled_b`='$high_tempwater',`cht_hh_capacity`='$nxtgen_hh_cap',`cht_hh_heat_load_kcal_h`='$nxtgen_hh_heatkcal',`cht_hh_heat_load_kw`='$nxtgen_hh_heatkw',`cht_hh_water_pump_flow_rate_lpm`='$water_pump_1pm',`cht_hh_water_pump_absorbed_pw_kw`='$nxt_genhh_waterpump_power',`cht_hh_cooling_fan`='$nxt_gen_hh_cooling',`cht_hh_input_output_water`='$nxt_gen_hh_io',`cht_hh_delivery_terms`='$nxt_gen_hh_delivery_terms',`cht_hh_warranty_doc`='$nxt_gen_hh_warranty_doc',`cht_hh_warranty_doi`='$nxt_gen_hh_warranty_doi',`cht_hh_weight`='$nxt_gen_hh_weight' WHERE `product_model`='$prd_mdl'");
	
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row6=mysqli_fetch_array($query))
	
		
		{
	?>
		<!-- nxtgen_lh -->

	<?php
	if(isset($_POST['update']))
      {     
		$pro_mdls			= $_POST['cht_nexlh_prd_model'];
		$hig_tempacs			= $_POST['cht_nexlh_lowtemp_ac'];
		$high_tempwaters			= $_POST['cht_nexlh_lowtemp_water'];
		$nxtgen_lh_cap			= $_POST['cht_nexlh_cap'];
		$nxtgen_lh_heatkcal		= $_POST['cht_nexlh_heatkcal'];
		$nxtgen_lh_heatkw		= $_POST['cht_nexlh_heatkw'];
		$nxg_lh_water_pump_1pm			= $_POST['cht_nexlh_water_flow'];
		$nxt_genlh_waterpump_power	= $_POST['cht_nexlh_water_abrob'];
		$nxt_gen_lh_cooling		= $_POST['cht_nexlh_coolfan'];
		$nxt_gen_lh_io			= $_POST['cht_nexlh_inout'];
		$nxt_gen_lh_delivry_terms	= $_POST['cht_nexlh_delivr'];
		$nxt_gen_lh_warranty_doc	= $_POST['cht_nexlh_warnt_doc'];
		$nxt_gen_lh_warranty_doi	= $_POST['cht_nexlh_warnty_doi'];
		$nxt_gen_lh_weight			= $_POST['cht_nexlh_wight'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_cht_nex_genlh` SET `cht_low_temp_air_cooled_a`='$hig_tempacs',`cht_low_temp_water_cooled_b`='$high_tempwaters',`cht_capacity`='$nxtgen_lh_cap',`cht_heat_load_kcal_h`='$nxtgen_lh_heatkcal',`cht_heat_load_kw`='$nxtgen_lh_heatkw',`cht_water_pump_flow_rate_lpm`='$nxg_lh_water_pump_1pm',`cht_water_pump_absobed_pow_kw`='$nxt_genlh_waterpump_power',`cht_cooling_fan`=$nxt_gen_lh_cooling,`cht_input_output_water`='$nxt_gen_lh_io',`cht_delivery_terms`='$nxt_gen_lh_delivry_terms',`cht_warranty_doc`='$nxt_gen_lh_warranty_doc',`cht_warranty_doi`='$nxt_gen_lh_warranty_doi',`cht_weight`='$nxt_gen_lh_weight' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row7=mysqli_fetch_array($query))

		{
	?>
	<!-- dct -->
	<?php  if(isset($_POST['update']))
      {     
		$dct_prd_modls			= $_POST['dct_prd_modl'];
		$dct_prcs				= $_POST['dct_prc'];
		$dct_motr_pwrs			= $_POST['dct_motr_pwr'];
		$dct_fan_quls			= $_POST['dct_fan_qul'];
		$dct_header_flgs		= $_POST['dct_header_flg'];
		$dct_contact_fans		= $_POST['dct_contact_fan'];
		$dct_delivrys			= $_POST['dct_delivry'];
		$dct_warnty_docs		= $_POST['dct_warnty_doc'];
		$dct_warnty_dois		= $_POST['dct_warnty_doi'];
		$dct_wights				= $_POST['dct_wight'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_dct` SET `dct_price`='$dct_prcs',`dct_motor_power`='$dct_motr_pwrs',`dct_fan_qty`='$dct_fan_quls',`dct_header_pipe`='$dct_header_flgs',`dct_fan_dia`='$dct_contact_fans',`dct_delivery_trm`='$dct_delivrys',`dct_warenty_doc`='$dct_warnty_docs',`dct_warenty_doi`='$dct_warnty_dois',`dct_weight`='$dct_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row8=mysqli_fetch_array($query))

		{
	?>
	<!--ect -->
	<?php		
	if(isset($_POST['update']))
      {     
		$ect_prd_models			= $_POST['ect_prd_model'];
		$ect_coilrows			= $_POST['ect_coilrow'];
		$ect_motorhps			= $_POST['ect_motorhp'];
		$ect_inouts				= $_POST['ect_inout'];
		$ect_delvrys			= $_POST['ect_delvry'];
		$ect_warnty_docs		= $_POST['ect_wrnty_doc'];
		$ect_warnty_dois		= $_POST['ect_wrnty_doi'];
		$ect_outlet_temps		= $_POST['ect_outlt_temp'];
		$ect_wights				= $_POST['ect_wight'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_ect` SET `ect_coil_2_rows`='$ect_coilrows',`ect_motor_hp`='$ect_motorhps',`ect_in_out_bsp`='$ect_inouts',`ect_delivery_terms`='$ect_delvrys',`ect_warnty_doc`='$ect_warnty_docs',`ect_warnty_doi`='$ect_warnty_dois',`ect_outlet_temp`='$ect_outlet_temps',`ect_weight`='$ect_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row9=mysqli_fetch_array($query))

		{
	?>
	
<!-- gas -->	
<?php

		 if(isset($_POST['update']))
      {     
		$gas_prd_models		= $_POST['gas_prd_model'];
		$gas_modl_varis		= $_POST['gas_modl_vari'];
		$gas_pricess		= $_POST['gas_prices'];
		$gas_conct_pwrs		= $_POST['gas_conct_pwr'];
		$gas_water_ins		= $_POST['gas_water_in'];
		$gas_fan_dias		= $_POST['gas_fan_diae'];
		$gas_motr_quls		= $_POST['gas_motr_qul'];
		$gas_head_pips		= $_POST['gas_head_pip'];
		$gas_delvrs			= $_POST['gas_delvr'];
		$gas_Configus		= $_POST['gas_Configu'];
		$gas_wrnt_docs		= $_POST['gas_wrnt_doc'];
		$gas_wrnt_dois		= $_POST['gas_wrnt_doi'];
		$gas_outlet_waters	= $_POST['gas_outlet_water'];
		$gas_wights			= $_POST['gas_wight'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_gas` SET `gas_model_variance`='$gas_modl_varis',`gas_price`='$gas_pricess',`gas_total_connect_powr`='$gas_conct_pwrs',`gas_water_in_out`='$gas_water_ins',`gas_fan_dia`='$gas_fan_dias',`gas_motor_qty`='$gas_motr_quls',`gas_header_pip_flg`='$gas_head_pips',`gas_delivery_trm`='$gas_delvrs',`gas_config`='$gas_Configus',`gas_warenty_doc`='$gas_wrnt_docs',`gas_warenty_doi`='$gas_wrnt_dois',`gas_outlet_temp`='$gas_outlet_waters',`gas_weight`='$gas_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row10=mysqli_fetch_array($query))

		{
	?>


<!-- gct_eco -->	
<?php		 
if(isset($_POST['update']))
      {     
		$gcteco_prd_models		= $_POST['gcteco_prd_model'];
		$gcteco_lowcosts		= $_POST['gcteco_lowcost'];
		$gcteco_highcosts		= $_POST['gcteco_highcost'];
		$gcteco_ec_prices		= $_POST['gcteco_ec_price'];
		$gcteco_caps			= $_POST['gcteco_cap'];
		$gcteco_motors			= $_POST['gcteco_motor'];
		$gcteco_powrconss		= $_POST['gcteco_powrcons'];
		$gcteco_waters			= $_POST['gcteco_water'];
		$gcteco_inouts			= $_POST['gcteco_inout'];
		$gcteco_basincaps		= $_POST['gcteco_basincap'];
		$gcteco_delvrys			= $_POST['gcteco_delvry'];
		$gcteco_wrnty_docs		= $_POST['gcteco_wrnty_doc'];
		$gcteco_wrnty_dois		= $_POST['gcteco_wrnty_doi'];
		$gcteco_wights			= $_POST['gcteco_wight'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_gct_eco` SET `gct_low_price`='$gcteco_lowcosts',`gct_high_price`='$gcteco_highcosts',`gct_recommended_erection_charges`='$gcteco_ec_prices',`gct_capacity`='$gcteco_caps',`gct_motor`='$gcteco_motors',`gct_power_consumed`='$gcteco_powrconss',`gct_water_flow_rate`='$gcteco_waters',`gct_in_out_size`='$gcteco_inouts',`gct_basin_holding_capacity`='$gcteco_basincaps',`gct_delivery_terms`='$gcteco_delvrys',`gct_wrnty_doc`='$gcteco_wrnty_docs',`gct_wrnty_doi`='$gcteco_wrnty_dois',`gct_weight`='$gcteco_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row11=mysqli_fetch_array($query))

		{
	?>

<!-- gzf -->
<?php
	  if(isset($_POST['update']))
      {     
		$gzf_prd_models		= $_POST['gzf_prd_model'];
		$gzf_grds			= $_POST['gzf_grd'];
		$gzf_costs			= $_POST['gzf_cost'];
		$gzf_particls		= $_POST['gzf_particl'];
		$gzf_oilremovls		= $_POST['gzf_oilremovl'];
		$gzf_maxopr_pres	= $_POST['gzf_maxopr_pre'];
		$gzf_effecs			= $_POST['gzf_effec'];
		$gzf_caps			= $_POST['gzf_cap'];
		$gzf_ac_bsps		= $_POST['gzf_ac_bsp'];
		$gzf_delvs			= $_POST['gzf_delv'];
		$gzf_warnty_docs	= $_POST['gzf_warnty_doc'];
		$gzf_warnty_dois	= $_POST['gzf_warnty_doi'];
		$gzf_wights			= $_POST['gzf_wight'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_gzf` SET `gzf_grade`='$gzf_grds',`gzf_price`='$gzf_costs',`gzf_practical_removal`='$gzf_particls',`gzf_oil_removal`='$gzf_oilremovls',`gzf_max_operating`='$gzf_maxopr_pres',`gzf_effeciency`='$gzf_effecs',`gzf_capacity`='$gzf_caps',`gzf_air_connection`='$gzf_ac_bsps',`gzf_delivery_trm`='$gzf_delvs',`gzf_warenty_doc`='$gzf_warnty_docs',`gzf_warenty_doi`='$gzf_warnty_dois',`gzf_weight`='$gzf_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row12=mysqli_fetch_array($query))

		{
	?>


<!-- gzf catrize -->
<?php

		 if(isset($_POST['update']))
      {     
		
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

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_gzf_cartridges` SET `gzf_cartridges_mv_gpe`='$gzf_cart_genralfilters',`gzf_cartridges_mv_zpe`='$gzf_cart_microils',`gzf_cartridges_mv_zoe`='$gzf_cart_sub_microils',`gzf_cartridges_mv_zce`='$gzf_cart_activatedcarbs',`gzf_cartridges_capacity`='$gzf_cart_caps',`gzf_cartridges_delivery_trm`='$gzf_cart_delvrs',`gzf_cartridges_warenty_doc`='$gzf_cart_warnty_docs',`gzf_cartridges_warenty_doi`='$gzf_cart_warnty_dois',`gzf_cartridges_weight`='$gzf_cart_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row13=mysqli_fetch_array($query))

		{
	?>
	
	<!-- hld-->
<?php
		 if(isset($_POST['update']))
      {     
		
		$hld_prd_models					= $_POST['hld_prd_model'];
		$hld_desiccantalumina_50s		= $_POST['hld_desiccantalumina_50'];
		$hld_Construction_prices		= $_POST['hld_Construction_price'];
		$hld_is2825s					= $_POST['hld_is2825'];
		$hld_molecular_constructs		= $_POST['hld_molecular_construct'];
		$hld_airfls						= $_POST['hld_airfl'];
		$hld_inlets						= $_POST['hld_inlet'];
		$hld_qtys						= $_POST['hld_qty'];
		$hld_delvrys					= $_POST['hld_delvry'];
		$hld_warnty_docs				= $_POST['hld_warenty_doc'];
		$hld_warnty_docs				= $_POST['hld_warenty_doc'];
		$hld_warnty_dois				= $_POST['hld_warnty_doi'];
		$hld_wrk_press					= $_POST['gzf_wrk_press'];
		$hld_wights						= $_POST['hld_wight'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_hld` SET `hld_daa_is2825cc`='$hld_desiccantalumina_50s',`hld_daa_asme_cc`='$hld_Construction_prices',`hld_dms_is2825_cc`='$hld_is2825s',`hld_dms_asme_cc`='$hld_molecular_constructs',`hld_air_flow_cfm`='$hld_airfls',`hld_inlet_outlet_flg`='$hld_inlets',`hld_desiccant_qty`='$hld_qtys',`hld_warnty_doc`='$hld_warnty_docs',`hld_warenty_doi`='$hld_warnty_dois',`hld_wrk_pressure`='$hld_wrk_press',`hld_delivery_trm`='$hld_delvrys',`hld_weight`='$hld_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row14=mysqli_fetch_array($query))

		{
	?>


<!-- hln-->

<?php


		 if(isset($_POST['update']))
      {     
		$hln_prd_models				= $_POST['hln_prd_model'];
		$hln_is2825s				= $_POST['hln_is2825'];
		$hln_activated_65s			= $_POST['hln_activated_65'];
		$hln_airflowss				= $_POST['hln_airflows'];
		$hln_inlets					= $_POST['hln_inlet'];
		$hld_airflss				= $_POST['hln_desicant_qty'];
		$hln_delvrys				= $_POST['hln_delvry'];
		$hln_wrnty_docs				= $_POST['hln_wrenty_doc'];
		$hln_wrnty_dois				= $_POST['hln_wrenty_doi'];
		$hln_wrk_press				= $_POST['hln_wrk_pres'];
		$hln_rate_conditioninlets	= $_POST['hln_rate_conditioninlet'];
		$hln_rate_conditiontemps	= $_POST['hln_rate_conditiontemp'];
		$hln_wights					= $_POST['hln_wight'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_hln` SET `hln_daa_is2825_price`='$hln_is2825s',`hln_dms_is2825_price`='$hln_activated_65s',`hln_airflow_cfm`='$hln_airflowss',`hln_in_out_flg`='$hln_inlets',`hln_dessiccant_qty`='$hld_airflss',`hln_delivery_trm`='$hln_delvrys',`hln_wrnty_doc`='$hln_wrnty_docs',`hln_wrnty_doi`='$hln_wrnty_dois',`hln_wrk_pressure`='$hln_wrk_press',`hn_inlet_temp`='$hln_rate_conditioninlets',`hn_admos_dew_pt`='$hln_rate_conditiontemps',`hln_weight`='$hln_wights' WHERE  `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row15=mysqli_fetch_array($query))

		{
	?>


<!-- hp filter -->

<?php

		 if(isset($_POST['update']))
      {     
		$hp_prd_modls		= $_POST['hp_prd_modl'];
		$hp_gnrl_filters	= $_POST['hp_gnrl_filter'];
		$hp_gndrl_oils		= $_POST['hp_gndrl_oil'];
		$hp_sub_gndrl_oils	= $_POST['hp_sub_gndrl_oil'];
		$hp_active_cars		= $_POST['hp_active_car'];
		$hp_dlevirs			= $_POST['hp_dlevir'];
		$hp_warnty_docs		= $_POST['hp_warnty_doc'];
		$hp_warnty_dois		= $_POST['hp_warnty_doi'];
		$hp_wrk_prsurs		= $_POST['hp_wrk_prsur'];
		$hp_wghts			= $_POST['hp_wght'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_hp_filter` SET `hp_filter_gp`='$hp_gnrl_filters',`hp_filter_zp`='$hp_gndrl_oils',`hp_filter_zo`='$hp_sub_gndrl_oils',`hp_filter_zc`='$hp_active_cars',`hp_filter_delivery_trm`='$hp_dlevirs',`hp_filter_warenty_doc`='$hp_warnty_docs',`hp_filter_warenty_doi`='$hp_warnty_dois',`hp_filter__wrk_pressure`='$hp_wrk_prsurs',`hp_filter_weight`='$hp_wghts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row16=mysqli_fetch_array($query))

		{
	?>


<!-- hp filter Element -->
<?php
 if(isset($_POST['update']))
      {     
		$hp_ele_prdt_models		= $_POST['hp_ele_prdt_model'];
		$hp_ele_gen_purs		= $_POST['hp_ele_gen_pur'];
		$hp_ele_mic_oils		= $_POST['hp_ele_mic_oil'];
		$hp_ele_sub_mic_oils	= $_POST['hp_ele_sub_mic_oil'];
		$hp_ele_act_carbons		= $_POST['hp_ele_act_carbon'];
		$hp_ele_delis			= $_POST['hp_ele_deli'];
		$hp_ele_wrnt_docs		= $_POST['hp_ele_wrnt_doc'];
		$hp_ele_wrnt_dois		= $_POST['hp_ele_wrnt_doi'];
		$hp_ele_wrk_press		= $_POST['hp_ele_wrk_pres'];
		$hp_ele_wgts			= $_POST['hp_ele_wgt'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_hp_filter_element` SET `hp_filter_ele_gpe`='$hp_ele_gen_purs',`hp_filter_ele_zpe`='$hp_ele_mic_oils',`hp_filter_ele_zoe`='$hp_ele_sub_mic_oils',`hp_filter_ele_zce`='$hp_ele_act_carbons',`hp_filter_ele_delivery_trm`='$hp_ele_delis',`hp_filter_ele_warenty_doc`='$hp_ele_wrnt_docs',`hp_filter_ele_warenty_doi`='$hp_ele_wrnt_dois',`hp_filter_ele_wrk_presure`='$hp_ele_wrk_press',`hp_filter_ele_weight`='$hp_ele_wgts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row17=mysqli_fetch_array($query))

		{
	?>

<!-- mst -->
<?php
 if(isset($_POST['update']))
      {     
		$mst_prdt_models	= $_POST['mst_prdt_model'];
		$mst_baffs			= $_POST['mst_baff'];
		$mst_dems			= $_POST['mst_dem'];
		$mst_delis			= $_POST['mst_deli'];
		$mst_wrnt_docs		= $_POST['mst_wrnt_doc'];
		$mst_wrnt_dois		= $_POST['mst_wrnt_doi'];
		$mst_wrk_press		= $_POST['mst_wrk_pres'];
		$mst_wgts			= $_POST['mst_wgt'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_mst` SET `mst_mv_baffle`='$mst_baffs',`mst_demister`='$mst_dems',`mst_delivery_trm`='$mst_delis',`mst_warenty_doc`='$mst_wrnt_docs',`mst_warenty_doi`='$mst_wrnt_dois',`mst_wrk_presure`='$mst_wrk_press',`mst_weight`='$mst_wgts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row18=mysqli_fetch_array($query))

		{
	?>
<!-- nxg_nex_gen -->
<?php 
  if(isset($_POST['update']))
      {     
		$nxg_prdt_models= $_POST['nxg_prdt_model'];
		$nxg_ac_r134as	= $_POST['nxg_ac_r134a'];
		$nxg_ac_r404as	= $_POST['nxg_ac_r404a'];
		$nxg_ac_r407cs	= $_POST['nxg_ac_r407c'];
		$nxg_caps		= $_POST['nxg_cap'];
		$nxg_wrk_press	= $_POST['nxg_wrk_pres'];
		$nxg_ac_ios		= $_POST['nxg_ac_io'];
		$nxg_rp_kws		= $_POST['nxg_rp_kw'];
		$nxg_delis		= $_POST['nxg_deli'];
		$nxg_ec_220vs	= $_POST['nxg_ec_220v'];
		$nxg_ec_415vs	= $_POST['nxg_ec_415v'];
		$nxg_wrnt_docs	= $_POST['nxg_wrnt_doc'];
		$nxg_wrnt_dois	= $_POST['nxg_wrnt_doi'];
		$nxg_wghts		= $_POST['nxg_wght'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_nxg_nex_gen` SET `nxg_air_cooled_r134a`='$nxg_ac_r134as',`nxg_air_cooled_r404a`='$nxg_ac_r404as',`nxg_air_cooled_r407c`='$nxg_ac_r407cs',`nxg_capacity_cfm`='$nxg_caps',`nxg_working_pressure`='$nxg_wrk_press',`nxg_air_connection_in_out`='$nxg_ac_ios',`nxg_rate_power_kw`='$nxg_rp_kws',`nxg_delivery_terms`='$nxg_delis',`nxg_electrical_connection_220v`='$nxg_ec_220vs',`nxg_electrical_connection_415v`='$nxg_ec_415vs',`nxg_warrenty_doc`='$nxg_wrnt_docs',`nxg_warrenty_doi`='$nxg_wrnt_dois',`nxg_weight`='$nxg_wghts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row19=mysqli_fetch_array($query))

		{
	?>
	

<!-- rad -->
<?php
 if(isset($_POST['update']))
      {     
		$rad_prd_models	= $_POST['rad_prd_model'];
		$rad_wcr_r407s	= $_POST['rad_wcr_r407'];
		$rad_caps		= $_POST['rad_cap'];
		$rad_ios		= $_POST['rad_io'];
		$rad_rpec_415s	= $_POST['rad_rpec_415'];
		$rad_delis		= $_POST['rad_deli'];
		$rad_wrk_press	= $_POST['rad_wrk_pres'];
		$rad_wrnt_docs	= $_POST['rad_wrnt_doc'];
		$rad_wrnt_dois	= $_POST['rad_wrnt_doi'];
		$rad_wgts		= $_POST['rad_wgt'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_rad` SET `rad_mv_water_cooled_ref_r407c`='$rad_wcr_r407s',`rad_mv_capacity`='$rad_caps',`rad_mv_in_out`='$rad_ios',`rad_mv_rate_pow_ele_conn_415_3a`='$rad_rpec_415s',`rad_delivery_terms`='$rad_delis',`rad_wrk_pressur`='$rad_wrk_press',`rad_warrenty_doc`='$rad_wrnt_docs',`rad_warrenty_doi`='$rad_wrnt_dois',`rad_weight`='$rad_wgts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row20=mysqli_fetch_array($query))

		{
	?>
	
<!-- scb -->
<?php 

	 

		 if(isset($_POST['update']))
      {     
		$scb_prd_models	= $_POST['scb_prd_model'];
		$scb_lows	    = $_POST['scb_low'];
		$scb_highs		= $_POST['scb_high'];
		$scb_motos		= $_POST['scb_moto'];
		$scb_ios		= $_POST['scb_io'];
		$scb_wfrs		= $_POST['scb_wfr'];
		$scb_delis		= $_POST['scb_deli'];
		$scb_out_waters	= $_POST['scb_out_water'];
		$scb_wrnt_docs	= $_POST['scb_wrnt_doc'];
		$scb_wrnt_dois	= $_POST['scb_wrnt_doi'];
		$scb_wgts		= $_POST['scb_wgt'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_scb` SET `scb_low_temp`='$scb_lows',`scb_high_temp`='$scb_highs',`scb_motor`='$scb_motos',`scb_in_out_size`='$scb_ios',`scb_water_flow`='$scb_wfrs',`scb_delivery_trm`='$scb_delis',`scb_outlet_temp`='$scb_out_waters',`scb_warenty_doc`='$scb_wrnt_docs',`scb_warenty_doi`='$scb_wrnt_dois',`scb_weight`='$scb_wgts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row21=mysqli_fetch_array($query))

		{
	?>	


<!-- sct -->
<?php 
		 if(isset($_POST['update']))
      {     
		$sct_prd_models	= $_POST['sct_prd_model'];
		$sct_lows	    = $_POST['sct_low'];
		$sct_highs		= $_POST['sct_high'];
		$sct_ios		= $_POST['sct_io'];
		$sct_wfrs		= $_POST['sct_wfr'];
		$sct_motos		= $_POST['sct_moto'];
		$sct_delis		= $_POST['sct_deli'];
		$sct_out_waters	= $_POST['sct_out_water'];
		$sct_wrnt_docs	= $_POST['sct_wrnt_doc'];
		$sct_wrnt_dois	= $_POST['sct_wrnt_doi'];
		$sct_wgts		= $_POST['sct_wgt'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_sct` SET `sct_low_temp_price`='$sct_lows',`sct_high_temp_price`='$sct_highs',`sct_in_out_size`='$sct_ios',`sct_water_rate`='$sct_wfrs',`sct_motor`='$sct_motos',`sct_delvery_trm`='$sct_delis',`sct_outlet_temp`='$sct_out_waters',`sct_warenty_doc`='$sct_wrnt_docs',`sct_warenty_doi`='$sct_wrnt_dois',`sct_weight`='$sct_wgts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row22=mysqli_fetch_array($query))

		{
	?>

<!-- spd -->
<?php 
 if(isset($_POST['update']))
      {     
		$spd_prd_models	= $_POST['spd_prd_model'];
		$spd_mss    	= $_POST['spd_ms'];
		$spd_airs		= $_POST['spd_air'];
		$spd_inlet_outs	= $_POST['spd_inlet_out'];
		$spd_delis		= $_POST['spd_deli'];
		$spd_wrnt_docs	= $_POST['spd_wrnt_doc'];
		$spd_wrnt_dois	= $_POST['spd_wrnt_doi'];
		$spd_ins		= $_POST['spd_in'];
		$spd_atmos		= $_POST['spd_atmo'];
		$spd_accs		= $_POST['spd_acc'];
		$spd_wrkprss	= $_POST['spd_wrkprs'];
		$spd_wgts		= $_POST['spd_wgt'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_spd` SET `spd_moleculer_sieve_pric`='$spd_mss',`spd_air_flow`='$spd_airs',`spd_inlet_outlet`='$spd_inlet_outs',`spd_delivery_trm`='$spd_delis',`spd_warnty_doc`='$spd_wrnt_docs',`spd_warnty_doi`='$spd_wrnt_dois',`spd_inlet_temp`='$spd_ins',`spd_atmospheric_dew_pt`='$spd_atmos',`spd_access`='$spd_accs',`spd_wrk_pressure`='$spd_wrkprss',`spd_weight`='$spd_wgts' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row23=mysqli_fetch_array($query))

		{
	?>

<!-- var -->
<?php 

 if(isset($_POST['update']))
      {     
		$var_prd_models			= $_POST['var_prd_model'];
		$var_modal_varis		= $_POST['var_modal_vari'];
		$var_wrkpressurs		= $_POST['var_wrkpressur'];
		$var_prcs				= $_POST['var_prc'];
		$var_caps				= $_POST['var_cap'];
		$var_shells				= $_POST['var_shell'];
		$var_inouts				= $_POST['var_inout'];
		$var_hands				= $_POST['var_hand'];
		$var_delivrs			= $_POST['var_delivr'];
		$var_warnty_docs		= $_POST['var_warnty_doc'];
		$var_warnty_dois		= $_POST['var_warnty_doi'];
		$var_mocs				= $_POST['var_moc'];
		$var_wights				= $_POST['var_wight'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_var` SET `var_ar_model_var`='$var_modal_varis',`var_ar_wrk_pressure`='$var_wrkpressurs',`var_ar_price`='$var_prcs',`var_ar_capacity`='$var_caps',`var_ar_shell_thick`='$var_shells',`var_ar_in_out`='$var_inouts',`var_ar_hand`='$var_hands',`var_ar_delivery_trm`='$var_delivrs',`var_warenty_doc`='$var_warnty_docs',`var_warenty_doi`='$var_warnty_dois',`var_moc`='$var_mocs',`var_weight`='$var_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row24=mysqli_fetch_array($query))

		{
	?>
	
	<!-- vax -->	
<?php

 if(isset($_POST['update']))
      {     
		$vxs_prd_models			= $_POST['vxs_prd_model'];
		$vxs_vartexdrains		= $_POST['vxs_vartexdrain'];
		$vxs_pipes				= $_POST['vxs_pipe'];
		$vxs_line_pressurs		= $_POST['vxs_line_pressur'];
		$vxs_caps				= $_POST['vxs_cap'];
		$vxs_inouts				= $_POST['vxs_inout'];
		$vxs_delivrys			= $_POST['vxs_delivry'];
		$vxs_warnty_docs		= $_POST['vxs_warnty_doc'];
		$vxs_warnty_dois		= $_POST['vxs_warnty_doi'];
		$vxs_wrk_prssurs		= $_POST['vxs_wrk_prssur'];
		$vxs_wights				= $_POST['vxs_wight'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_vxs` SET `vxs_vartex_separator`='$vxs_vartexdrains',`vxs_pipe_size`='$vxs_pipes',`vxs_line_weight`='$vxs_line_pressurs',`vxs_capacity`='$vxs_caps',`vxs_in_out`='$vxs_inouts',`vxs_delivery_trm`='$vxs_delivrys',`vxs_warenty_doc`='$vxs_warnty_docs',`vxs_warenty_doi`='$vxs_warnty_dois',`vxs_wrk_presure`='$vxs_wrk_prssurs',`vxs_weight`='$vxs_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row25=mysqli_fetch_array($query))

		{
	?>

	
	
<!-- wah -->
<?php

 if(isset($_POST['update']))
      {     
		$wah_prd_models		= $_POST['wah_prd_model'];
		$wah_moistures		= $_POST['wah_moisture'];
		$wah_capacitys		= $_POST['wah_capacty'];
		$wah_aircons		= $_POST['wah_aircon'];
		$wah_coolngs		= $_POST['wah_coolng'];
		$wah_water_rates	= $_POST['wah_water_rate'];
		$wah_shelldias		= $_POST['wah_sheldia'];
		$wah_delivrytrms	= $_POST['wah_delivrytrm'];
		$wah_warranty_docs	= $_POST['wah_warranty_doc'];
		$wah_warranty_dois	= $_POST['wah_warranty_doi'];
		$wah_wrkpressurs	= $_POST['wah_wrkpressur'];
		$wah_wights			= $_POST['wah_wight'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_wah` SET `wah_with_moisture`='$wah_moistures',`wah_capacity`='$wah_capacitys',`wah_ac_bsp`='$wah_aircons',`wah_cooling_water`='$wah_coolngs',`wah_water_flow_lpm`='$wah_water_rates',`wah_shelldia`='$wah_shelldias',`wah_delivery_trm`='$wah_delivrytrms',`wah_warenty_doc`='$wah_warranty_docs',`wah_warenty_doi`='$wah_warranty_dois',`wah_wrk_pressure`='$wah_wrkpressurs',`wah_weight`='$wah_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row26=mysqli_fetch_array($query))

		{
	?>
	
	<!-- gz  -->
	<?php
	 if(isset($_POST['update']))
      {     
		$gz_prd_models		= $_POST['gz_prd_model'];
		$gz_prcs			= $_POST['gz_prc'];
		$gz_valveopens		= $_POST['gz_valveopen'];
		$gz_valvedischrgs	= $_POST['gz_valvedischrg'];
		$gz_pwrcons			= $_POST['gz_pwrcon'];
		$gz_max_temps		= $_POST['gz_max_temp'];
		$gz_max_opers		= $_POST['gz_max_oper'];
		$gz_inout_ports		= $_POST['gz_inout_port'];
		$gz_warranty_docs	= $_POST['gz_warranty_doc'];
		$gz_warranty_dois	= $_POST['gz_warranty_doi'];
		$gz_delivrs			= $_POST['gz_delivr'];
		$gz_wights			= $_POST['gz_wight'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_gz_gfv` SET `gz_gfv_price`='$gz_prcs',`gz_gfv_valve_opn_intervel`='$gz_valveopens',`gz_gfv_valve_dischrg`='$gz_valvedischrgs',`gz_gfv_pwr_consum`='$gz_pwrcons',`gz_gfv_max_opt_temp`='$gz_max_temps',`gz_gfv_max_opt_presure`='$gz_max_opers',`gz_gfv_io_ports`='$gz_inout_ports',`gz_gfv_warenty_doc`='$gz_warranty_docs',`gz_gfv_warenty_doi`='$gz_warranty_dois',`gz_gfv_deliver_trm`='$gz_delivrs',`gz_gfv_weight`='$gz_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row27=mysqli_fetch_array($query))

		{
	?>
	
	<!-- gzf  -->
	<?php
	 if(isset($_POST['update']))
      {     
		$gzf_prd_models		= $_POST['gzf_prd_model'];
		$gzf_prcs			= $_POST['gzf_prc'];
		$gzf_valveopens		= $_POST['gzf_valveopen'];
		$gzf_valvedischrgs	= $_POST['gzf_valvedischrg'];
		$gzf_pwrcons		= $_POST['gzf_pwrcon'];
		$gzf_max_temps		= $_POST['gzf_max_temp'];
		$gzf_max_opers		= $_POST['gzf_max_oper'];
		$gzf_inout_ports	= $_POST['gzf_inout_port'];
		$gzf_warranty_docs	= $_POST['gzf_warranty_doc'];
		$gzf_warranty_dois	= $_POST['gzf_warranty_doi'];
		$gzf_delivrs		= $_POST['gzf_delivr'];
		$gzf_wights			= $_POST['gzf_wight'];

		

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row27=mysqli_fetch_array($query))

		{
	?>

	
<!-- gzv -->
<?php
 if(isset($_POST['update']))
      {     
		$gzf_prd_models		= $_POST['gzf_prd_model'];
		$gzf_prcs			= $_POST['gzf_prc'];
		$gzf_valveopens		= $_POST['gzf_valveopen'];
		$gzf_valvedischrgs	= $_POST['gzf_valvedischrg'];
		$gzf_pwrcons		= $_POST['gzf_pwrcon'];
		$gzf_max_temps		= $_POST['gzf_max_temp'];
		$gzf_max_opers		= $_POST['gzf_max_oper'];
		$gzf_inout_ports	= $_POST['gzf_inout_port'];
		$gzf_warranty_docs	= $_POST['gzf_warranty_doc'];
		$gzf_warranty_dois	= $_POST['gzf_warranty_doi'];
		$gzf_delivrs		= $_POST['gzf_delivr'];
		$gzf_wights			= $_POST['gzf_wight'];

		
       	$query	= mysqli_query($conn,"UPDATE `tbl_gz_gfv` SET `gz_gfv_price`='$gzf_prcs',`gz_gfv_valve_opn_intervel`='$gzf_valveopens',`gz_gfv_valve_dischrg`='$gzf_valvedischrgs',`gz_gfv_pwr_consum`='$gzf_pwrcons',`gz_gfv_max_opt_temp`='$gzf_max_temps',`gz_gfv_max_opt_presure`='$gzf_max_opers',`gz_gfv_io_ports`='$gzf_inout_ports',`gz_gfv_warenty_doc`='$gzf_warranty_docs',`gz_gfv_warenty_doi`='$gzf_warranty_dois',`gz_gfv_deliver_trm`='$gzf_delivrs',`gz_gfv_weight`='$gzf_wights' WHERE `product_model`='$prd_mdl'");

         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row28=mysqli_fetch_array($query))
		{
	?>
		
<?php
if(isset($_POST['update']))
      {     
		$kd7_prd_models		= $_POST['kd7_prd_model'];
		$kd7_ac_r134s		= $_POST['kd7_ac_r134'];
		$kd7_caps			= $_POST['kd7_cap'];
		$kd7_wrk_pressures	= $_POST['kd7_wrk_pressure'];
		$kd7_ac_ios			= $_POST['kd7_ac_io'];
		$kd7_pwr_conss		= $_POST['kd7_pwr_cons'];
		$kd7_delivery_timess= $_POST['kd7_delivery_times'];
		$kd7_ec_230vs		= $_POST['kd7_ec_230v'];
		$kw_ec_415vs		= $_POST['kd7_ec_415v'];
		$kd7_warnty_docs	= $_POST['kd7_warnty_doc'];
		$kd7_warnty_dois	= $_POST['kd7_warnty_doi'];
		$kd7_weghts			= $_POST['kd7_weght'];
		$kd7_airs			= $_POST['kd7_air'];
		$kd7_dews			= $_POST['kd7_dew'];
		$kd7_ambientss		= $_POST['kd7_ambient'];
		//$kw_discunt		= $_POST['discount'];
		      
       	$query	= mysqli_query($conn,"UPDATE `tbl_2kd7` SET `kd7_acr134a`='$kd7_ac_r134s',`kd7_capcty`='$kd7_caps',`kd7_wrkpressur`='$kd7_wrk_pressures',`kd7_ac_inout`='$kd7_ac_ios',`kd7_rate_pwr`='$kd7_pwr_conss',`kd7_delvr`='$kd7_delivery_timess',`kd7_elec_230v`='$kd7_ec_230vs',`kd7_elec_415v`='$kw_ec_415vs',`kd7_warenty_doc`='$kd7_warnty_docs',`kd7_warenty_doi`='$kd7_warnty_dois',`kd7_weigt`='$kd7_weghts',`kd7_air_inlet`='$kd7_airs',`kd7_dew_pt`='$kd7_dews',`kd7_ambinet`='$kd7_ambientss' WHERE `product_model`='$prd_mdl'");
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row2=mysqli_fetch_array($query))

		
		{
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/************************************** full site *****************************************/
	<section id="horizontal-form-layouts">

	<div class="row">
	    <div class="col-md-12">
	        <div class="card">

		
	<?php 
			include('dbconnect.php');
			
			$prd_mdl=$_GET['mdl'];
			$prd_sers=$_GET['prd_nam'];

		$sql=mysqli_query($conn,"SELECT * FROM `tbl_product_tables` WHERE `product_series_name`= '$prd_sers'");
		while($rows=mysqli_fetch_array($sql))
		{
		$tables_nam = $rows['product_series_tbl_name'];
		//declration of table name
		$q2="select * from $tables_nam";
		//select declartion table
		
		
		 

	 if(isset($_POST['update']))
      {     
		$kd7_prd_models		= $_POST['kd7_prd_model'];
		$kd7_ac_r134s		= $_POST['kd7_ac_r134'];
		$kd7_caps			= $_POST['kd7_cap'];
		$kd7_wrk_pressures	= $_POST['kd7_wrk_pressure'];
		$kd7_ac_ios			= $_POST['kd7_ac_io'];
		$kd7_pwr_conss		= $_POST['kd7_pwr_cons'];
		$kd7_delivery_timess= $_POST['kd7_delivery_times'];
		$kd7_ec_230vs		= $_POST['kd7_ec_230v'];
		$kw_ec_415vs		= $_POST['kd7_ec_415v'];
		$kd7_warnty_docs	= $_POST['kd7_warnty_doc'];
		$kd7_warnty_dois	= $_POST['kd7_warnty_doi'];
		$kd7_weghts			= $_POST['kd7_weght'];
		$kd7_airs			= $_POST['kd7_air'];
		$kd7_dews			= $_POST['kd7_dew'];
		$kd7_ambientss		= $_POST['kd7_ambient'];
		//$kw_discunt		= $_POST['discount'];
		      
       	$query	= mysqli_query($conn,"UPDATE (`tbl_2kd7` SET `kd7_acr134a`='$kd7_ac_r134s',`kd7_capcty`='$kd7_caps',`kd7_wrkpressur`='$kd7_wrk_pressures',`kd7_ac_inout`='$kd7_ac_ios',`kd7_rate_pwr`='$kd7_pwr_conss',`kd7_delvr`='$kd7_delivery_timess',`kd7_elec_230v`='$kd7_ec_230vs',`kd7_elec_415v`='$kw_ec_415vs',`kd7_warenty_doc`='$kd7_warnty_docs',`kd7_warenty_doi`='$kd7_warnty_dois',`kd7_weigt`='$kd7_weghts',`kd7_air_inlet`='$kd7_airs',`kd7_dew_pt`='$kd7_dews',`kd7_ambinet`='$kd7_ambientss')");
         if($query){
			echo 'done';
                  	}
      }

		$query=mysqli_query($conn,"SELECT * FROM $tables_nam WHERE `product_model`='$prd_mdl'");		
		 while($row2=mysqli_fetch_array($query))

		
		{
	?>
	    
				<div class="card-body collapse in">
	                <div class="card-block">	
	                    <form class="form form-horizontal" method="post" action="#">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Enquiry Info</h4>
									<div class="form-group row">
								  <!-- 2kd7 -->
								  <div id="2KD" style="display:none" >
								<input type="hidden" name="2kd_action">
								
								  	<div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput1">Product Model :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['product_model']; ?>" id="kd7_prd_model" class="form-control" placeholder="Enter Product Model" name="kd7_prd_model">
										<!--<input type="hidden" value="<?php echo $row2['product_model']; ?>" id="kd7_prd_model" name="kd7_prd_model">-->
		                            </div>
		                        </div>
		                        <div class="form-group row">
	                            	<label class="col-md-3 label-control" for="projectinput2">Air Cooled R134a Pirce :</label>
									<div class="col-md-9">
	                            		<input type="text" value="<?php echo $row2['kd7_acr134a']; ?>" id="kd7_ac_r134" class="form-control" placeholder="Enter Air Cooled R134a Price" name="kd7_ac_r134">
	                            	</div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput3">Capacity :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_capcty']; ?>" id="kd7_cap" class="form-control" placeholder="Enter Capacity" name="kd7_cap">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label class="col-md-3 label-control" for="projectinput4">Working Pressure :</label>
		                            <div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_wrkpressur']; ?>" id="kd7_wrk_pressure" class="form-control" placeholder="Enter Working Pressure :" name="kd7_wrk_pressure">
		                            </div>
		                        </div>


		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air Connection In/Out :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_ac_inout']; ?>" id="kd7_ac_io" class="form-control" placeholder="Enter Air Connection In/Out" name="kd7_ac_io">
		                            </div>
		                        </div>

		                        
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Rate Power :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_rate_pwr']; ?>" id="kd7_pwr_cons" class="form-control" placeholder="Enter Rate Power" name="kd7_pwr_cons">
		                            </div>
		                        </div>

								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Delivery Terms :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_delvr']; ?>" id="kd7_delivery_times" class="form-control" placeholder="Enter Delivery Terms :" name="kd7_delivery_times">
		                            </div>
		                        </div>
							<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 230v/1s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_elec_230v']; ?>" id="kd7_ec_230v" class="form-control" placeholder="Enter Electrical Connection 230v/1s/50Hz" name="kd7_ec_230v">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Electrical Connection 415v/3s/50Hz :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_elec_415v']; ?>" id="kd7_ec_415v" class="form-control" placeholder="Enter Electrical Connection 415v/3s/50Hz" name="kd7_ec_415v">
		                            </div>
		                        </div>
								    <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warranty Date Of Commission :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_warenty_doc']; ?>" id="kd7_warnty_doc" class="form-control" placeholder="Enter Warranty Date Of Commission" name="kd7_warnty_doc">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Warrenty Date Of Invoice :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_warenty_doi']; ?>" id="kd7_warnty_doi" class="form-control" placeholder="Enter Warrenty Date Of Invoice" name="kd7_warnty_doi">
		                            </div>
		                        </div>
		                        <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Weight :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_weigt']; ?>" id="kd7_weght" class="form-control" placeholder="Enter Product Weight" name="kd7_weght">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Air inlet temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_air_inlet']; ?>" id="kd7_air" class="form-control" placeholder="Enter Air inlet temperature" name="kd7_air">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Dew point :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_dew_pt']; ?>" id="kd7_dew" class="form-control" placeholder="Enter Dew point" name="kd7_dew">
		                            </div>
		                        </div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Ambient Temperature :</label>
									<div class="col-md-9">
		                            	<input type="text" value="<?php echo $row2['kd7_ambinet']; ?>" id="kd7_ambient" class="form-control" placeholder="Enter Ambient Temperature" name="kd7_ambient">
		                            </div>
		                        </div>
								<!--<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput5">Discount :</label>
									<div class="col-md-9">
		                            	<input type="text" id="projectinput5" class="form-control" placeholder="Enter Product discount" name="2kw_dscunt">
		                            </div>
		                        </div>-->
								  </div>
		                        

		<?php }} ?>					
					
									
										
								
								
							</div>

	                        <div class="form-actions" style="float:right;">
	                            <button type="reset" class="btn btn-warning mr-1">
	                            	<i class="icon-cross2"></i> Cancel
	                            </button>
	                            <button type="submit" class="btn btn-primary" name="update" >
	                                <i class="icon-check2"></i> Save
	                            </button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
	
	
	
	
	
	
	
	
		