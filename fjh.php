<?php
 include_once "admin/db/config.php";

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Horseman | Equestrian & Horse Riding Training HTML Template" />
<meta name="keywords" content="horse,equestrian,riding,racing,horseman,horsewomen,cavalier,jumping" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Product Page | Sapthagiri
</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script><!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner" class="spinner large-icon">
      <img alt="" src="images/preloaders/lo.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Header -->
<?php include('top.php')?>
  
  <!-- Start main-content -->
  <div class="main-content">
<img src="images/pic-slider.jpg">


    <!-- Section: Why Choose Us -->
	
    <section style=""> 
      <div class="container pt-40">
        <div class="section-content">
		
          <div class="row">
            <div class="col-md-4" style="padding-left: 32px;">
			
			 <div class="pr-40">
			<div class="row">
			  <h5 class="text title line-bottom">Search Products</h5>
			<div id='nbc-searchblue1'>
         <form action='#'  method='get' id="nbc-searchbluebox1">
            <input name='q' id='wc-searchblueinput1' onblur='if (this.value == "") {this.value = "Search this site...";}' onfocus='if (this.value == "Search this site...") {this.value = ""}' type='text' value='Search this site...'/>
            <input id='nbc-searchbluesubmit1' type='submit' value='Search'/>
         </form>
      </div></div>
			</div>
			<div class="row">
              <div class="pr-40">
                <h6 class="text- title line-bottom">Products</h6>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                                       
                     <div class="icon-box-details ml-sm-0">
                     <ul style="font-size:12px;">
					 <li>Bulldog Envelopes</li>
					  <li>Sealing Rings</li> 
					  <li>Consumables</li> 
					  </ul>
                     
                     
                    </div>
                  </div>
              
                
                 </div>
                </div>
              </div>
			  
			  
            </div>
			<?php 
			
			   $id=$_GET['id'];
				$right = mysqli_query($conn,"SELECT * FROM tbl_category WHERE cat_id='$id'");
				$frght = mysqli_fetch_array($right);
					 ?>
			 <h5 class="text-uppercase title line-bottom"><?PHP echo $frght['cat_title'];  ?></h5>
			<?php 
			
			 
				$rights = mysqli_query($conn,"SELECT * FROM tbl_product WHERE product_category=$id");
				while ($frghts = mysqli_fetch_array($rights))
				{	 ?>
            <div class="col-md-8">
			
               
              <div id="accordion1" class="panel-group accordion">
			  <div class="col-md-4">
			  
			 <img src="admin/products/<?php echo $frghts['product_img'];?>"> 
			 
			  </div>
                <div class="col-md-8">
				
				<p><?php echo $frghts['product_short_descr'];?></p>
<button type="button" class="btn btn-primary"><a href="product_details.php?id=<?php echo $frghts['product_id'];?>" >View details </button><hr>
			   
			   </div> 
</a>			
		
                </div>
			 
				
                </div>
                <?php } ?>
             

              </div>
            </div>
          </div>
      
    </section>

  <!-- end main-content -->

  </div>
  <!-- Footer -->
 <?php include('footer.php')?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>


</html>