

<?php $catid=$_REQUEST['id'];


include ("dbconnect.php");
$query="SELECT * FROM tbl_product_tables WHERE product_group_id ='$catid'";
$result=mysqli_query($conn,$query);

?>
<select name="model" class="form-control" id="gem" onChange="getmodel(this.value)">
<option value="0">Select Model</option>
<?php while($row=mysqli_fetch_array($result)) { 
?>
<option value="<?php echo $row['product_series_name'];?>"><?php echo $row['product_series_name']?></option>
<?php } ?>
</select>
