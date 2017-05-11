$(function () {

    $("#product_submit").click(function () {

        var budget = $("#budget").val();
        var gem = $("#gem").val();


        if (budget == '0')
        {
            $('#errors').html('Please Select Product Group');
            $("#budget").focus();

            return false;
        }


        if (gem == '0')
        {
            $('#errors').html('Please Select Product Series');
            $("#gem").focus();

            return false;
        }

//hln
        if (gem == 'HLN') {


            var hln_prd_model = $("#hln_prd_model").val();
            var hln_is2825 = $("#hln_is2825").val();
            var hln_activated_65 = $("#hln_activated_65").val();
            var hln_airflows = $("#hln_airflows").val();

            var hln_inlet = $("#hln_inlet").val();
            var hln_desicant_qty = $("#hln_desicant_qty").val();
            var hln_delvry = $("#hln_delvry").val();
            var hln_wrnty_doc = $("#hln_wrnty_doc").val();
            var hln_wrnty_doi = $("#hln_wrnty_doi").val();
            var hln_wrk_pres = $("#hln_wrk_pres").val();
            var hln_rate_conditioninlet = $("#hln_rate_conditioninlet").val();
            var hln_rate_conditiontemp = $("#hln_rate_conditiontemp").val();
            var hln_wight = $("#hln_wight").val();

            if (hln_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#hln_prd_model").focus();

                return false;
            }



            if (hln_is2825 == '')
            {
                $('#errors').html('Desiccant Activated Alumina(50°c) & IS2825 code of Construction Price');
                $("#hln_is2825").focus();

                return false;
            }
            if (hln_activated_65 == '')
            {
                $('#errors').html('Desiccant Activated Alumina(65°c) & IS2825 code of Construction Price :');
                $("#hln_activated_65").focus();

                return false;
            }


            if (hln_airflows == '')
            {
                $('#errors').html('Enter Air flow');
                $("#hln_airflows").focus();

                return false;
            }
            if (hln_inlet == '')
            {
                $('#errors').html('Enter Inlet/Outlet flg');
                $("#hln_inlet").focus();

                return false;
            }


            if (hln_desicant_qty == '')
            {
                $('#errors').html('Enter Desiccant Qty/tower');
                $("#hln_desicant_qty").focus();

                return false;
            }
            if (hln_delvry == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#hln_delvry").focus();

                return false;
            }
            if (hln_wrnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#hln_wrnty_doc").focus();

                return false;
            }




            if (hln_wrnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#hln_wrnty_doi").focus();

                return false;
            }
            if (hln_wrk_pres == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#hln_wrk_pres").focus();

                return false;
            }

            if (hln_rate_conditioninlet == '')
            {
                $('#errors').html('Enter Rated Condition Inlet Temperature :');
                $("#hln_rate_conditioninlet").focus();

                return false;
            }
            if (hln_rate_conditiontemp == '')
            {
                $('#errors').html('Enter Rated Condition Atmospheric Temperature');
                $("#hln_rate_conditiontemp").focus();

                return false;
            }

            if (hln_wight == '')
            {
                $('#errors').html('Enter weight');
                $("#hln_wight").focus();

                return false;
            }




        }

//hld
        if (gem == 'HLD') {


            var hld_prd_model = $("#hld_prd_model").val();
            var hld_desiccantalumina_50 = $("#hld_desiccantalumina_50").val();
            var hld_construction_price = $("#hld_construction_price").val();
            var hld_is2825 = $("#hld_is2825").val();
            var hld_molecular_construct = $("#hld_molecular_construct").val();
            var hld_airfl = $("#hld_airfl").val();
            var hld_inlet = $("#hld_inlet").val();
            var hld_qty = $("#hld_qty").val();
            var hld_delvry = $("#hld_delvry").val();
            var hld_warnty_doi = $("#hld_warnty_doi").val();
            var hld_warenty_doc = $("#hld_warenty_doc").val();
            var hld_wight = $("#hld_wight").val();

            if (hld_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#hld_prd_model").focus();

                return false;
            }


            if (hld_desiccantalumina_50 == '')
            {
                $('#errors').html('Desiccant Activated Alumina(50&deg;c) &Enter IS2825 code of Construction Price');
                $("#hld_desiccantalumina_50").focus();

                return false;
            }
            if (hld_construction_price == '')
            {
                $('#errors').html('Desiccant Activated Alumina(50&deg;c) &Enter IS2825 code of Construction Price & ASME sec VIII 1 code of Construction Price');
                $("#hld_construction_price").focus();

                return false;
            }


            if (hld_is2825 == '')
            {
                $('#errors').html('Desiccant molecular sieve & IS2825 code of Construction Price');
                $("#hld_is2825").focus();

                return false;
            }
            if (hld_molecular_construct == '')
            {
                $('#errors').html('Desiccant molecular sieve& ASME sec VIII 1 code of Construction Price');
                $("#hld_molecular_construct").focus();

                return false;
            }


            if (hld_airfl == '')
            {
                $('#errors').html('Enter Air flow');
                $("#hld_airfl").focus();

                return false;
            }
            if (hld_inlet == '')
            {
                $('#errors').html('Enter Inlet/Outlet flg');
                $("#hld_inlet").focus();

                return false;
            }


            if (hld_qty == '')
            {
                $('#errors').html('Enter Desiccant Qty/tower');
                $("#hld_qty").focus();

                return false;
            }
            if (hld_delvry == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#hld_delvry").focus();

                return false;
            }
            if (hld_warenty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#hld_warenty_doc").focus();

                return false;
            }


            if (hld_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#hld_warnty_doi").focus();

                return false;
            }


            if (hld_wight == '')
            {
                $('#errors').html('Enter weight');
                $("#hld_wight").focus();

                return false;
            }



        }


//spd

        if (gem == 'SPD') {


            var spd_prd_model = $("#spd_prd_model").val();
            var spd_ms = $("#spd_ms").val();
            var spd_air = $("#spd_air").val();

            var spd_inlet_out = $("#spd_inlet_out").val();
            var spd_deli = $("#spd_deli").val();
            var spd_wrnt_doc = $("#spd_wrnt_doc").val();
            var spd_wrnt_doi = $("#spd_wrnt_doi").val();

            var spd_in = $("#spd_in").val();
            var spd_atmo = $("#spd_atmo").val();
            var spd_acc = $("#spd_acc").val();
            var spd_wrkprs = $("#spd_wrkprs").val();

            var spd_wgt = $("#spd_wgt").val();

            if (spd_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#spd_prd_model").focus();

                return false;
            }

            if (spd_ms == '')
            {
                $('#errors').html('Molecular sieve(65°c)/Price with Filter :');
                $("#spd_ms").focus();

                return false;
            }
           
            if (spd_air == '')
            {
                $('#errors').html('Enter Air flow');
                $("#spd_air").focus();

                return false;
            }
            if (spd_inlet_out == '')
            {
                $('#errors').html('Enter Inlet/Outlet flg');
                $("#spd_inlet_out").focus();

                return false;
            }

            if (spd_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#spd_deli").focus();

                return false;
            }
            if (spd_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#spd_wrnt_doc").focus();

                return false;
            }

            if (spd_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#spd_wrnt_doi").focus();

                return false;
            }
              if (spd_in == '')
            {
                $('#errors').html('Enter Inlet Temperature :');
                $("#spd_in").focus();

                return false;
            }
            
            if (spd_atmo == '')
            {
                $('#errors').html('Atmospheric dew point :');
                $("#spd_atmo").focus();

                return false;
            }
            
           
            if (spd_acc == '')
            {
                $('#errors').html('Enter Acessories');
                $("#spd_acc").focus();

                return false;
            }

            if (spd_wgt == '')
            {
                $('#errors').html('Enter weight');
                $("#spd_wgt").focus();

                return false;
            }




        }

     if (gem == '2KD') {


            var kdprd_model = $("#2kdprd_model").val();
            var kdac_r134 = $("#2kdac_r134").val();
            var kdac_r404c = $("#2kdac_r404c").val();
          var kdac_r407cs = $("#2kdac_r407cs").val();
            
            
            var kdcap = $("#2kdcap").val();
            var kdwrk_pressure = $("#2kdwrk_pressure").val();
            var kdac_io = $("#2kdac_io").val();
            var kdrate_pwr_kw = $("#2kdrate_pwr_kw").val();

            var kddelivery_terms = $("#2kddelivery_terms").val();
            var kdec_220v = $("#2kdec_220v").val();
            var kdec_415v = $("#2kdec_415v").val();
            var kdwarranty_doc = $("#2kdwarranty_doc").val();
            var kdwarranty_doi = $("#2kdwarranty_doi").val();
            var kdweight = $("#2kdweight").val();

            if (kdprd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#2kdprd_model").focus();

                return false;
            }

            if (kdac_r134 == '')
            {
                $('#errors').html('Enter Air Cooled R134a');
                $("#2kdac_r134").focus();

                return false;
            }
           
            if (kdac_r404c == '')
            {
                $('#errors').html('Enter Air Cooled R407c');
                $("#2kdac_r404c").focus();

                return false;
            }
            if (kdac_r407cs == '')
            {
                $('#errors').html('Enter Water Cooled R407c');
                $("#2kdac_r407cs").focus();

                return false;
            }

 if (kdcap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#2kdcap").focus();

                return false;
            }
            if (kdwrk_pressure == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#2kdwrk_pressure").focus();

                return false;
            }
               if (kdac_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#2kdac_io").focus();

                return false;
            }
                if (kdrate_pwr_kw == '')
            {
                $('#errors').html('Enter Rate Power KW ');
                $("#2kdrate_pwr_kw").focus();

                return false;
            }

            if (kddelivery_terms == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#2kddelivery_terms").focus();

                return false;
            }
               if (kdec_220v == '')
            {
                $('#errors').html('Electrical Connection 220v/1s/50Hz');
                $("#2kdec_220v").focus();

                return false;
            }
            
           
            if (kdec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#2kdec_415v").focus();

                return false;
            }
            if (kdwarranty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#2kdwarranty_doc").focus();

                return false;
            }

            if (kdwarranty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#2kdwarranty_doi").focus();

                return false;
            }
           
         

            if (kdweight == '')
            {
                $('#errors').html('Enter weight');
                $("#2kdweight").focus();

                return false;
            }




        }
      
  
    
       if (gem =='NXG') {


            var nxg_prdt_model = $("#nxg_prdt_model").val();
            var nxg_ac_r134a = $("#nxg_ac_r134a").val();
            var nxg_ac_r404a = $("#nxg_ac_r404a").val();
          var nxg_ac_r407c = $("#nxg_ac_r407c").val();
            
            
            var nxg_cap = $("#nxg_cap").val();
            var nxg_wrk_pres = $("#nxg_wrk_pres").val();
            var nxg_ac_io = $("#nxg_ac_io").val();
            var nxg_rp_kw = $("#nxg_rp_kw").val();

            var nxg_deli = $("#nxg_deli").val();
            var nxg_ec_220v = $("#nxg_ec_220v").val();
            var nxg_ec_415v = $("#nxg_ec_415v").val();
            var nxg_wrnt_doc = $("#nxg_wrnt_doc").val();
            var nxg_wrnt_doi = $("#nxg_wrnt_doi").val();
            var nxg_wght = $("#nxg_wght").val();

            if (nxg_prdt_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#nxg_prdt_model").focus();

                return false;
            }

            if (nxg_ac_r134a == '')
            {
                $('#errors').html('Enter Air Cooled R134a');
                $("#nxg_ac_r134a").focus();

                return false;
            }
           
            if (nxg_ac_r404a == '')
            {
                $('#errors').html('Enter Air Cooled R404c');
                $("#nxg_ac_r404a").focus();

                return false;
            }
            if (nxg_ac_r407c == '')
            {
                $('#errors').html('Enter Air Cooled R407c');
                $("#nxg_ac_r407c").focus();

                return false;
            }

 if (nxg_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#nxg_cap").focus();

                return false;
            }
            if (nxg_wrk_pres == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#nxg_wrk_pres").focus();

                return false;
            }
               if (nxg_ac_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#nxg_ac_io").focus();

                return false;
            }
                if (nxg_rp_kw == '')
            {
                $('#errors').html('Enter Rate Power KW ');
                $("#nxg_rp_kw").focus();

                return false;
            }

            if (nxg_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#nxg_deli").focus();

                return false;
            }
               if (nxg_ec_220v == '')
            {
                $('#errors').html('Electrical Connection 220v/1s/50Hz');
                $("#nxg_ec_220v").focus();

                return false;
            }
            
           
            if (nxg_ec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#nxg_ec_415v").focus();

                return false;
            }
            if (nxg_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#nxg_wrnt_doc").focus();

                return false;
            }

            if (nxg_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#nxg_wrnt_doi").focus();

                return false;
            }
           
         

            if (nxg_wght == '')
            {
                $('#errors').html('Enter weight');
                $("#nxg_wght").focus();

                return false;
            }




        }
        
         
        if (gem == '2KW') {


            var kw_prd_model = $("#2kw_prd_model").val();
            var kw_ac_r134 = $("#2kw_ac_r134").val();
            var kw_ac_r404c = $("#2kw_ac_r404c").val();
          var kw_ac_r407cs = $("#2kw_ac_r407cs").val();
            
            
            var kw_cap = $("#2kw_cap").val();
            var kw_wrk_pressure = $("#2kw_wrk_pressure").val();
            var kw_ac_io = $("#2kw_ac_io").val();
            var kw_pwr_cons = $("#2kw_pwr_cons").val();

            var kw_delivery_times = $("#kw_delivery_times").val();
            var kw_ec_230v = $("#2kw_ec_230v").val();
            var kw_ec_415v = $("#2kw_ec_415v").val();
            var kw_warnty_doc = $("#2kw_warnty_doc").val();
            var kw_warnty_doi = $("#2kw_warnty_doi").val();
            var kw_weght = $("#2kw_weght").val();

            if (kw_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#2kw_prd_model").focus();

                return false;
            }

            if (kw_ac_r134 == '')
            {
                $('#errors').html('Enter Air Cooled R134a');
                $("#2kw_ac_r134").focus();

                return false;
            }
           
          if (kw_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#2kw_cap").focus();

                return false;
            }
            if (kw_wrk_pressure == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#2kw_wrk_pressure").focus();

                return false;
            }
               if (kw_ac_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#2kw_ac_io").focus();

                return false;
            }
                if (kw_pwr_cons == '')
            {
                $('#errors').html('Enter Rate Power KW ');
                $("#2kw_pwr_cons").focus();

                return false;
            }

            if (kw_delivery_times == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#2kw_delivery_times").focus();

                return false;
            }
               if (kw_ec_230v == '')
            {
                $('#errors').html('Electrical Connection 220v/1s/50Hz');
                $("#2kw_ec_230v").focus();

                return false;
            }
            
           
            if (kw_ec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#2kw_ec_415v").focus();

                return false;
            }
            if (kw_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#2kw_warnty_doc").focus();

                return false;
            }

            if (kw_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#2kw_warnty_doi").focus();

                return false;
            }
           
         

            if (kw_weght == '')
            {
                $('#errors').html('Enter weight');
                $("#2kw_weght").focus();

                return false;
            }




        }
      
        
        
         if (gem == 'RAD') {


            var rad_prd_model = $("#rad_prd_model").val();
      
            var rad_wcr_r407 = $("#rad_wcr_r407").val();
            
            
            var rad_cap = $("#rad_cap").val();    var rad_io = $("#rad_io").val();
          
                      var rad_rpec_415 = $("#rad_rpec_415").val();


            var rad_deli = $("#rad_deli").val();
            var rad_wrk_pres = $("#rad_wrk_pres").val();
        
            var rad_wrnt_doc = $("#rad_wrnt_doc").val();
            var rad_wrnt_doi = $("#rad_wrnt_doi").val();
            var rad_wgt = $("#rad_wgt").val();

            if (rad_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#rad_prd_model").focus();

                return false;
            }

            if (rad_wcr_r407 == '')
            {
                $('#errors').html('Enter Water cooled Refrigerant R407c Price ');
                $("#rad_wcr_r407").focus();

                return false;
            }
           
          if (rad_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#rad_cap").focus();

                return false;
            }
              if (rad_io == '')
            {
                $('#errors').html('Enter Air Connection In/Out');
                $("#rad_io").focus();

                return false;
            }
              if (rad_rpec_415 == '')
            {
                $('#errors').html('Enter Rate powered Electrical Connection ANSI 415/3/50hz');
                $("#rad_rpec_415").focus();

                return false;
            }
             if (rad_deli == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#rad_deli").focus();

                return false;
            }
            if (rad_wrk_pres == '')
            {
                $('#errors').html('Enter Work Pressure');
                $("#rad_wrk_pres").focus();

                return false;
            }
             
         
           
             
          
            if (rad_wrnt_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#rad_wrnt_doc").focus();

                return false;
            }

            if (rad_wrnt_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#rad_wrnt_doi").focus();

                return false;
            }
           
         

            if (rad_wgt == '')
            {
                $('#errors').html('Enter weight');
                $("#rad_wgt").focus();

                return false;
            }




        }
        
        
        
        if (gem == 'CHT MINI') {


            var cht_prd_model = $("#cht_prd_model").val();
            var cht_1_3acr22 = $("#cht_1_3acr22").val();
            var cht_1_3acphe = $("#cht_1_3acphe").val();
                      
            var cht_cap = $("#cht_cap").val();
            var cht_heat = $("#cht_heat").val();
            var cht_heat_kw = $("#cht_heat_kw").val();
            var aht_water_flw = $("#aht_water_flw").val();

          
            var cht_water_pump = $("#cht_water_pump").val();
            var cht_coolingfan = $("#cht_coolingfan").val();
                 var cht_in_out = $("#cht_in_out").val();
              var cht_delivry = $("#cht_delivry").val();
            var cht_warrnty_doc = $("#cht_warrnty_doc").val();
            var cht_warrnty_doi = $("#cht_warrnty_doi").val();
            var cht_wght = $("#cht_wght").val();

            if (cht_prd_model == '')
            {
                $('#errors').html('Enter Product Model');
                $("#cht_prd_model").focus();

                return false;
            }

            if (cht_1_3acr22 == '')
            {
                $('#errors').html('Enter 1 to 3 Bar AC R22 Price ');
                $("#cht_1_3acr22").focus();

                return false;
            }
           
          if (cht_1_3acphe == '')
            {
                $('#errors').html('Enter 1 to 3 Bar AC R22/PHE Price :');
                $("#cht_1_3acphe").focus();

                return false;
            }
            if (cht_cap == '')
            {
                $('#errors').html('Enter Capacity');
                $("#cht_cap").focus();

                return false;
            }
            if (cht_heat == '')
            {
                $('#errors').html('Heat Load Kcal/h');
                $("#cht_heat").focus();

                return false;
            }
               if (cht_heat_kw== '')
            {
                $('#errors').html('Heat Load Kw :');
                $("#cht_heat_kw").focus();

                return false;
            }
                if (aht_water_flw == '')
            {
                $('#errors').html('Enter Water Pump Flow rate lpm ');
                $("#aht_water_flw").focus();

                return false;
            }

            if (kw_delivery_times == '')
            {
                $('#errors').html('Enter Delivery Terms');
                $("#2kw_delivery_times").focus();

                return false;
            }
               if (kw_ec_230v == '')
            {
                $('#errors').html('Electrical Connection 220v/1s/50Hz');
                $("#2kw_ec_230v").focus();

                return false;
            }
            
           
            if (kw_ec_415v == '')
            {
                $('#errors').html('Enter Electrical Connection 415v/3s/50Hz');
                $("#2kw_ec_415v").focus();

                return false;
            }
            if (kw_warnty_doc == '')
            {
                $('#errors').html('Enter Warranty Date of commisioning');
                $("#2kw_warnty_doc").focus();

                return false;
            }

            if (kw_warnty_doi == '')
            {
                $('#errors').html('Enter Warranty Date of invoice');
                $("#2kw_warnty_doi").focus();

                return false;
            }
           
         

            if (kw_weght == '')
            {
                $('#errors').html('Enter weight');
                $("#2kw_weght").focus();

                return false;
            }




        }
      
        
        return false;
    });
});
