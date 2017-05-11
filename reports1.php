 <?php 
 $id=$_POST['id'];
 $from=$_POST['from'];
 include 'dbconnect.php';
 $to=$_POST['to'];
 if($from==''){
	 $from=date("08/30/1994");
 }
  if($to==''){
	 $to=date("m/d/Y");
 }
 $from=date('Y-m-d', strtotime($from));
 $to=date('Y-m-d', strtotime($to));
 if($id=='0'){
	 $q="select * from tbl_enquiry where date(enq_created_on) between '$from' and '$to'";

 }
 else{
	 $q="select * from tbl_enquiry where date(enq_created_on) between '$from' and '$to' and enq_alloted_to='$id'";

 }
 
 
 ?>

<br><br>
 <table class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th>Enquiry No</th>
                                    <th>Company Name</th>
									<th>Email id</th>
									<th>PhoneNo</th>
									 <th>Product</th>
                                   
                                   
                                    
                                   <th>Status</th>

                                </tr>
                            </thead>
                            
                            
                            
                            
                            
                            <tbody>
                               
                            <?php
							
include 'dbconnect.php';
$m=mysqli_query($conn,$q);
while($row=mysqli_fetch_array($m)){
?>
                                <tr>
                                    <td><?php echo $row['enq_no'];?></td>
<td><?php echo $row['enq_company_name'];?></td>
 <td><?php echo $row['enq_company_email'];?></td>
									 <td><?php echo $row['enq_company_phn_no'];?></td>
                                    <?php 
									$id=$row['enq_product_series'];
									$qs=mysqli_fetch_array(mysqli_query($conn,"select * from tbl_product_group where product_id='$id'"));
									?>
                                    <td><?php echo $qs['product_group_name'];?></td>
                                   
                                    <td><?php echo $row['enq_status'];?></td>
									
                                 
                                </tr>
                             <?php } ?>
                            </tbody>
                        
                         
                            
                        </table>
                   