<?php
 	include('dbconnect.php');
	$quation_id=$_GET['id'];
						$dat=date('Y');
						$split = substr((string)$dat,-2);
							$no=$split;
							$no.="/";
							$mnth= date('m');
							$no.= $mnth;
							$no.="/";
					  $quation_id;
					  		
					$total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY  `quotation_no`";
					$query=mysqli_query($conn,$total);
					$res = mysqli_fetch_array($query);
						
					 $t= $res['total'];
					 
$html ='<table style="border:1px solid #e0e0e0;border-style: double;">
  <tbody>
    <tr>
      <td>
        <table style="overflow:visible;text-align:left;font-variant:normal;font-weight:normal;font-size:14px;background-color:fff;line-height:20px;font-family:Asap,sans-serif;color:#333;padding:0;font-style:normal;width:900px">
          <tbody>
            <tr>
              <td colspan="6">
                <div id="m_-8301856412589471734printEmailDiv" style="display:none;background-color:#f1f1f1;width:98%;padding:10px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;overflow:hidden">
                  <a style="border-radius:5px;padding:5px 20px 6px;font-size:14px;color:#666;border:1px solid #ccc;background:rgb(255,255,255);background:-moz-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:-webkit-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:-o-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:-ms-linear-gradient(top,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);background:linear-gradient(to bottom,rgba(255,255,255,1) 0%,rgba(221,221,221,1) 100%);text-decoration:none;float:right;margin-right:20px" href="#" target="_blank" data-saferedirecturl="#">
                  </a>
                </div>
              </td>
            </tr>
            <tr>
              <td style="margin:0 20px 0 0;padding:0 15px 0 0;width:1%">
                <div style="display:inline-block;margin:0 0 8px 0"><img style="padding:10px" src="robust-assets/images/logo/gem.png" alt="gem" >
				<br><span style="margin-left:30px;">
				Coimbtore,Taammilnadu</span>
				<br><span style="margin-left:30px;">
				India.</span></div><div style="display:inline-block;margin:0 0 8px 0">
				<br><span style="margin-left:30px;">
				</span>
				<br><br><br>
				<span style="margin-left:30px;color:#818A91;">
				Bill TO</span>
				<ul>
					<li style="list-style-type: none;"><strong>Mr. Bret</strong></li>
					<li style="list-style-type: none;">48A,Thousand lights</li>
					<li style="list-style-type: none;">Anna saalai,</li>
					<li style="list-style-type: none;">Chennai-600001.</li>
				</ul>
				<br></br></br>
				</span></div>
              </td>
              <td style="font-size:30px;margin:0;padding:3px;width:1%"></td>
              <td colspan="3" style="font-size:30px;margin:0;padding:3px;width:1%">
              </td>
              <td style="width:35%;padding:0;margin:0;text-align:right;">
                <h2 style="font-weight:bold;margin:0 0 5px;padding:0"><span><strong>Quotation</strong></span></h2>
                <p style="margin:0;padding:0"><span style="color:#0099d3;">No :GEM-0000210</span></p>
                <br><br>TOTAL AMOUNT<strong><h3>RS.20,00,000.00</h3></strong><br><p style="color:#818A91;">Quotation Date : 08/03/2017</p>	
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <hr style="border-top:0px solid #ccc">
              </td>
            </tr>
			
            <tr style="height:60px;overflow:hidden;margin-top:20px;padding:0 0 5px">
              <td colspan="6" >
                
				<div>
				<table border="1"  colspan="6" cellspacing="3" align="Left" cellpadding="4"  rules="all" border="1" height="57" width="100%" style="border-color:#E3EBF3; padding:0;margin-bottom:7px;margin-top:30px;">
                        <tbody>
                          <tr align="left">
                            <th align="center" scope="col"><font size="1"><h2>Item</h2></font></th>
							<th align="center" scope="col" ><font size="1"><h2>Product Model</h2></font></th>
							<th align="center" scope="col" ><font size="1"><h2>Product Series</h2></font></th>
							<th align="center" scope="col" ><font size="1"><h2>Product Model Type</h2></font></th>
                            <th align="center" scope="col" ><font size="1"><h2>Quantity</h2></font></th>
                            <th align="right" scope="col" style="padding-right: 10px;"><font size="1"><h2>Amount</h2></font></th>
                          </tr>
						 
                          <tr>
                            <td>
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">Dryer</span>
                              </span></center>
                              </font>
                            </td>
                            <td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">2kd</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">PD-1003</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">ac415v</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">3</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="right">
                              <font align="right" size="1">
                              <span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:right;color:#373A3C;">RS.10,00,000.00</span>
                              </span>
                              </font>                                                                              
                            </td>
                          </tr>
						  <tr>
                            <td>
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">Cooler</span>
                              </span></center>
                              </font>
                            </td>
                            <td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">2kw</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">PD-1004</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">ac220v</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">3</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="right">
                              <font align="right" size="1">
                              <span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:right;color:#373A3C;">RS.5,00,000.00</span>
                              </span>
                              </font>                                                                              
                            </td>
                          </tr>
						  <tr>
                            <td>
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">Chiller</span>
                              </span></center>
                              </font>
                            </td>
                            <td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">Var</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">vax-1005</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">model varience</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="left">
                              <font align="center" size="1">
                              <center><span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:center;color:#373A3C;">2</span>
                              </span></center>
                              </font>                                                                               
                            </td>
							<td align="right">
                              <font align="right" size="1">
                              <span style="font-weight:normal">&nbsp;
                              <span style="font-size:14px;font-weight:200px;text-align:right;color:#373A3C;">RS.5,00,000.00</span>
                              </span>
                              </font>                                                                              
                            </td>
                          </tr>
                        </tbody>
                      </table>
				</div>
              </td>
            </tr>
          </tbody>
        </table>
        <table style="overflow:visible;text-align:right;font-variant:normal;font-weight:normal;font-size:14px;background-color:fff;line-height:20px;font-family:Asap,sans-serif;color:#333;padding:0;font-style:normal;width:100%;">
         
            <tr style="margin:0;padding:0">
              <td align="right" colspan="6" style="border-top:1px solid none;border-bottom:1px solid none;">
					&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;
			  </td >
			
			<td align="left" colspan="2" style="border-top:1px solid #E3EBF3;border-bottom:1px solid #E3EBF3;">
				<span style="margin-right:0px;"><strong>TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;</p></span></strong>
			  </td >
			  <td align="left" colspan="2" style="border-top:1px solid #E3EBF3;border-bottom:1px solid #E3EBF3;">
				<span style="margin-right:0px;"><strong> Rs.30,00,000.00</p></span></strong>
			  </td >
			  
		
			  
            </tr>
	
            
          </tbody>
        </table>
        <table cellspacing="3" style="overflow:visible;text-align:left;font-variant:normal;font-weight:normal;font-size:14px;background-color:fff;line-height:20px;font-family:Asap,sans-serif;color:#333;padding:0;font-style:normal;width:900px">
          <tbody>
            <tr>
              
              <td style="width:100%">
			  <p><!--Max Tax Will Provide in 12%.<br>-->Discount Percentage is : <span style="color:red;">10</span> %.  valid upto Next 30days</p>
              </td>
              <td style="width:47%;font-size:12px;line-height:16px;vertical-align:top">
                 
                    <div>
                      <table  align="Left"  width="100%" style="padding:0;margin-bottom:7px">
                        <tbody>
                          <tr align="right">
                            <th align="right" scope="col" width="60%"></th>
                           
                          </tr>
						 
                          <tr>
                            <td>
                              <font size="1">
                              <span style="font-weight:normal">&nbsp;
                              <span><span style="margin-right:2px;display:inline-block;text-align:left"></span><span style="display:inline-block;text-align:left;font-weight:bold;margin-right:2px;margin-left:2px"> </span>
							  <span style="width:63px;display:inline-block;text-align:left;margin-right:2px"> </span></span>
                              </span>
                              </font>
                            </td>
                            <td align="left">
                              <font size="1">
                              <span>&nbsp;</span><span style="font-weight:normal">
                             </span>
                              </font>                                                                               
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
                  </li>
              </td>
            </tr>
            <tr>
              <td colspan="6">
              </td>
            </tr>
          </tbody>
        </table><h4>Commercial Terms</h4>
		<hr>
		<div class="row col-md-12" style="line-height:12px;">
		<div class="col-md-6">
		
		<p style="font-size:14px;color:#000;">Discount : 25.00 %</p>
	    <p style="font-size:14px;color:#000;">P & F &nbsp; &nbsp; &nbsp; : 0.00 %</p>
		
		<p style="font-size:14px;color:#000;">  Freight &nbsp;&nbsp; : THIS IS FOR BEST DISCOUNTED PRICE TO PAY </p>
		<p style="font-size:14px;color:#000;"> Delivery &nbsp; : WITHIN 2-3 WEEKS </p>
			
				
				 
				  <p style="font-size:14px;color:#000;"> Valid &nbsp;&nbsp;&nbsp; &nbsp;  &nbsp;: 30 DAYS</p>
		</div>
		<div class="col-md-3">
		<p style="font-size:14px;color:#000;">Excise Duty&nbsp; : 12.50 %</p>
		<p style="font-size:14px;color:#000;">SHE on BED : 0.00 %</p>
		<p style="font-size:14px;color:#000;">  VST/CST &nbsp; &nbsp;&nbsp; : 5.00 % </p>
		<p style="font-size:14px;color:#000;"> Surcharge &nbsp; : Not Applicable</p>
		 
		
		   <p style="font-size:14px;color:#000;"> Erection &nbsp; &nbsp; &nbsp;: 0.00</p>
		</div>
		<div class="col-md-3">
		<p style="font-size:14px;color:#000;">CESS on BED : 0.00%</p>
		<p style="font-size:14px;color:#000;"> GST &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; : 0.00%</p>
		</div>
		
		</div>
			<div class="row col-md-12"  style="line-height:12px;">
			<hr>
		<div class="col-md-6">
		
		<p style="font-size:14px;color:#000;">Thanking You,</p>
	    <p style="font-size:14px;color:#000;"></p>
		 <p style="font-size:14px;color:#000;"><br/></p>
		<p style="font-size:14px;color:#000;"> Yours Faith fully</p>
		<p style="font-size:14px;color:#000;"> GEM EQUIPMENTS(P)LTD </p>
			<p style="font-size:14px;color:#000;"> <br/></p>
			
				<p style="font-size:14px;color:#000;">Name &nbsp;&nbsp; &nbsp; : </p>
				 <p style="font-size:14px;color:#000;">Mob no &nbsp; : 9344455927</p>
				 
				   
		</div>';
			
$fp = fopen("mytext.html","wb");
fwrite($fp,$html);
fclose($fp);


// include autoloader

?>
