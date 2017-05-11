<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Sales Executive Registration</title>
    <link rel="apple-touch-icon" sizes="60x60" href="robust-assets/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="robust-assets/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="robust-assets/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="robust-assets/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="robust-assets/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="robust-assets/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="robust-assets/css/vendors.min.css"/>
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/sliders/slick/slick.css">
    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="robust-assets/css/app.min.css"/>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

    <!-- END PRELOADER-->

    <?php include 'header.php'?>
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
      <div class="content-body"><!-- Basic form layout section start -->
<section id="horizontal-form-layouts">

	<div class="row">
	    <div class="col-md-12">
	        <div class="card">
	           
	            <div class="card-body collapse in">
	                <div class="card-block">
						
	                    <form class="form form-horizontal">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="icon-head"></i> Video Conference</h4>
			                   

<?php include 'dbconnect.php';
$url=$_GET['url'];
$q=mysql_query("select * from tbl_video where url='$url'");

while($row=mysql_fetch_array($q)){
$geturl=$row['url'];
 $name=$row['participants'];
 $reason=$row['reason'];
$qs1=mysql_query("select * from tbl_participants where id='$name'"); 
								$rows1=mysql_fetch_array($qs1);
$email=$rows1['mail'];

$name=$rows1['name'];
$phonNo=$rows1['phone_no'];
$sub="Conference for: $reason";

$build = "service@gemindia.com";
$headers = "From: Gemservice <" . $build . ">\r\n" ;

$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$description="Dear ";
$description.=$name;
$description.=",";
$description.="<br>";
$description.="Video conference is started.please click this url to join";
$description.="    ";
$description.="<a href=$url>$url</a>";

$description.="<br>";
$description.="<br>";
$description.="Thank you,";
$description.="gemspares";
mail($email,$sub,$description,$headers);


	$description="Dear ";
$description.=$name;
$description.=",";
$description.="<br>";
$description.="Video conference is started.please click this url to join";
$description.="    ";
$description.="<a href=$url>$url</a>";

$description.="<br>";
$description.="<br>";
$description.="Thank you,";
$description.="<br>";
$description.="gemspares";
//mail($email,$sub,$description,$
	$description="Dear ";
$description.=$name;
$description.=",";

$description.="Video conference is started.please click this url to join";
$description.="    ";
$description.="$url";
$description.="    ";
$description.="Thank you,";
$description.="gemspares";		

		
		$message1 = urlencode($description);
		//echo "http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1";

		file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$phonNo.'&sender=GEMEQP&message='.$message1);

}
?>


		                                                     <iframe src="<?php echo $geturl; ?>" id="test" target="_blank" frameborder="0" width="800" height="400"></iframe>
  
		                        

							</div>

	                      
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</section>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-light">
      <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="#" target="_blank" class="text-bold-800 grey darken-2">BanyanInfotech</a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
  <script>
               $(function () {

                $("#login_button").click(function () {
 var projectinput4 = $("#projectinput4").val();
                    var projectinput1 = $("#projectinput1").val();
                    var projectinput3 = $("#projectinput3").val();


});
});
</script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>
</html>