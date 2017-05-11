

<?php 
$product_id=$_REQUEST['id'];


include ("dbconnect.php");
   $q3 = mysqli_query($conn, "select * from `tbl_type_price` where type_price_model_no='$product_id'");

$row3 = mysqli_fetch_array($q3);	   print_r($row3);
 $type=$row3['type'];
$typearray=explode(",",$type);
echo $count=count($typearray);
?>
                                                     
							<option value="">Select Type</option>
								  <?php
                                                             
                                                              for($i=0;$i<$count;$i++) {
                                                                    ?>                                                            
                                                                <option value="<?php echo $typearray[$i]; ?>"><?php echo $typearray[$i]; ?></option>
<?php
                                                                }
?>
					
   
													
													
									
   <!-- BEGIN VENDOR JS-->
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/plugins/forms/select/select2.full.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="robust-assets/js/components/forms/select/form-select2.js" type="text/javascript"></script>