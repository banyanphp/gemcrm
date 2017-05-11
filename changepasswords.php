<?php 
include('dbconnect.php');

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="BanyanInfoTech" >
    <title>Change password</title>
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
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="robust-assets/css/plugins/forms/icheck/custom.css">
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
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column bg-cyan bg-lighten-2 fixed-navbar">
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

    <!-- navbar-fixed-top-->
    <?php include'header.php' ?>
    
    

    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="col-md-4 offset-md-4 col-xs-8 offset-xs-2 box-shadow-2 p-0">
	<div class="card border-grey border-lighten-3 px-2 py-2 row mb-0">
		<div class="card-header no-border">
			<div class="card-title text-xs-center">
				<img src="robust-assets/images/logo/gem.png" alt="branding logo">
			</div>
			<h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Change Password</span></h6>
		</div>
		<div class="card-body collapse in">
			<div class="card-block">
				<form class="form-horizontal" name="cheange_pass_form" id="cheange_pass_form" method="POST">
					
					<fieldset class="form-group has-feedback has-icon-left">
						<input type="password" class="form-control" id="newpassword" name='newpassword'  placeholder="Enter Password" tabindex="2">
						<div class="form-control-position">
						    <i class="icon-key3"></i>
						</div>
						<div class="help-block font-small-3"></div>
					</fieldset>
					
					<fieldset class="form-group has-feedback has-icon-left">
						<input type="password" class="form-control" id="repeatnewpassword" name='repeatnewpassword'  placeholder="Enter Confrim Password" >
						<div class="form-control-position">
						    <i class="icon-key3"></i>
						</div>
						<div class="help-block font-small-3"></div>
					</fieldset>
					
					<input type="hidden" value="<?php echo $id; ?>" id="id" class="form-control">
					  <div class="col-md-12" style="text-align:center">
                        <span id="errors" style="color:#ff0000;text-align:center"></span>
						<span id="success" style="color:#967ADC;text-align:center"></span>
                      </div>
					<br>
					<button type="button" class="btn btn-danger btn-block btn-lg" id="chng_passwdes" name='chng_passwdes'>
					<i class="icon-unlock2"></i> Submit</button>
						
				</form>
			</div>
		</div>		
	</div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    

    <!-- BEGIN VENDOR JS-->
    <script src="robust-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="robust-assets/js/plugins/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="robust-assets/js/plugins/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="robust-assets/js/app.min.js"></script>
    <!-- END ROBUST JS-->
  <!-- BEGIN PAGE LEVEL JS-->
		
	<script type="text/javascript">
	$(function () {

    $("#chng_passwdes").click(function () {
		
		var data = $("#cheange_pass_form").serialize();
			var newpassword	 		= $("#newpassword").val();
            var repeatnewpassword	= $("#repeatnewpassword").val();
			var id					= $('#id');
	
        if (newpassword == '')
            {
                $('#errors').html('Enter New Password');
                $("#newpassword").focus();

                return false;
            }
		if (repeatnewpassword == '')
            {
                $('#errors').html('Enter Retype password');
                $("#repeatnewpassword").focus();

                return false;
            }
		
        else{
        
$.ajax({
type : 'POST',
url : 'changepassword.php',
     data: data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Password Updated successfully! Logout your Account...");
  }
  else{
	  $("#errors").html(response);
//$("#errors").html("Error Occured Please Contact Your Service Provider");
  }

 setTimeout(function () {
                            $('#success').html('');
							//window.location.href='index.php';
                        }, 5000);
						
						
 setTimeout(function () {
                            $('#errors1').html('');
                        }, 5000);


}
});
}
return false;
});
});


	</script>
    <!-- END PAGE LEVEL JS--> 
  </body>
</html>