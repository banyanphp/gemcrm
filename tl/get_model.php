

<?php 
$enq_product_series=$_REQUEST['id'];



include ("dbconnect.php");


?>

                                                       
                                                        
                                                                <option value="">Select Model</option>
                                                                <?php
                                                                $q3 = mysqli_query($conn, "select product_series_tbl_name,product_series_name from tbl_product_tables where product_group_id='$enq_product_series'");
                                                                while ($row3 = mysqli_fetch_array($q3)) {
                                                                    ?>                                                            
                                                                    <option value="<?php echo $row3['product_series_name']; ?>"><?php echo $row3['product_series_name'] ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                           
                                                       
                                                    			
													
									
