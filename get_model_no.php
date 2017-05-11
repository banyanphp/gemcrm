

<?php 

include ("dbconnect.php");
$product_id=$_REQUEST['id'];




?>
   
                                                     
							<option value="">Select Model</option>
								  <?php
                                                                $q3 = mysqli_query($conn, "select * from `tbl_type_price` where `type_price_model`='$product_id'");
                                                                while ($row3 = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                <option value="<?php echo $row3['type_price_model_no'];?>" ><?php echo $row3['type_price_model_no']; ?></option>
<?php
          echo "select * from `$tbl_name";                                                      }
?>
											
													
									
