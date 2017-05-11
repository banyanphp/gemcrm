<?php
include('dbconnect.php');
$id = $_POST['id'];

$td="<thead>
            <tr>
                <th>MODEL</th>
                <th>SAP CODE</th>
                <th>DESCRIPTION</th>
                <th>QTY</th>
				<th>LIST PRICE</th>
				<th style='width:50px;'>DISCOUNT(%)</th>
				<th>ACTUAL PRICE</th>
				<th>REQUIRED DATE</th>
            </tr>
        </thead>";
//product division value
	 /*$listprice=mysqli_query($conn,"SELECT * ,(enq_product_price/enq_product_qty)as division FROM `tbl_quotation` WHERE `quotation_no`='$id' ");
		while($list_result=mysqli_fetch_array($listprice)){
		 $actual_price=number_format($list_result['division'],2);
		 echo $actual_price;
		  
		 //product sapcode
	 $sqls=mysqli_query($conn,"SELECT * FROM `tbl_quotation` WHERE `quotation_no`='$id'");
		$prd_res1=mysqli_fetch_array($sqls){
			$sap_cdes=$prd_res1['enq_product_model'];
		}
		
		$type_prc = mysqli_query($conn,"SELECT * FROM `tbl_type_price` WHERE `type_price_model_no`='$sap_cdes'");
		while($type_prc_res=mysqli_fetch_array($type_prc)){
			$sap=$type_prc_res['sapcode'];
			$desc=$type_prc_res['description'];
		} */
		//product qutation
		$total_price=0;
	$sql=mysqli_query($conn,"SELECT * ,(enq_product_price/enq_product_qty)as division FROM `tbl_quotation` WHERE `quotation_no`='$id'");
		while($prd_res=mysqli_fetch_array($sql)){
			
			$quot_id=$prd_res['quotation_id'];
			$prd_model=$prd_res['enq_product_model'];
			$prd_model_no=$prd_res['enq_product_model_no'];
			$qty=$prd_res['enq_product_qty'];
			$lst_prc=$prd_res['enq_product_price'];


			


			$des=$prd_res['enq_product_discount'];
$lst_prc-=($lst_prc*$des)/100;
$total_price+=$lst_prc;
			$actual_prices = $prd_res['division'];
		 $qq=mysqli_query($conn,"select * from tbl_type_price where type_price_model_no='$prd_model_no'"); 
						 $row=mysqli_fetch_array($qq);
						$sap_cd=$row['sapcode']; 
						$descrb=$row['description']; 
						 
			$td.="
			<tr>
			<td><div style='width:80px;border:1px solid #d4d4d4;height: 43px;'>$prd_model</div></td>
			<td><div style='width:80px;border:1px solid #d4d4d4;height: 43px;'>$sap_cd </div></td>
			<td><div style='width:390px;border:1px solid #d4d4d4;height: 43px;'>$descrb</div></td>
			<td><div style='width:30px;border:1px solid #d4d4d4;height: 43px;'>$qty</div></td>
			<td><div style='width:100px;border:1px solid #d4d4d4;height: 43px;'>$actual_prices</div></td>
			<td><div style='width:100px;border:1px solid #d4d4d4;height: 43px;'> $des</div></td>
			<td><div style='width:100px;border:1px solid #d4d4d4;height: 43px;'>   
			<input type='text' name='prices[]' id='prices'  value=$lst_prc class='form-control required qty1' style='height: 43px;'/>
</div></td>
			<td>
			<div class='input-group' style='width:100px;'>
                <input type='text' name='dates[]' class='form-control required oncomplete-inputmask' style='height: 43px;' id='oncomplete-mask'/>
				 <input type='hidden' name='sap[]' value='$quot_id' class='form-control'/>
            </div>
			</td>
			</tr><br><br>";
			
		}
		$td.="
			<tr>
			<td colspan='6'>
			</td>
			<td colspan='6'>
			<div class='form-group row'>
				<label class='col-md-6 label-control' for='userinput2'>TOTAL VALUE : </label>
				<div class='col-md-5' style='padding:0px;'>
					<input type='text' class='form-control' id='ttl_val' value=$total_price style='width:96px;'disabled>
			    </div>
			</div>
			</td>
			</tr><br><br>";
		
	echo $td;
?>
    <script src="robust-assets/js/plugins/forms/extended/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/typeahead/bloodhound.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/typeahead/handlebars.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/formatter/formatter.min.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/maxlength/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/extended/card/jquery.card.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-typeahead.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-inputmask.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-formatter.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-maxlength.js" type="text/javascript"></script>
    <script src="robust-assets/js/components/forms/extended/form-card.js" type="text/javascript"></script>