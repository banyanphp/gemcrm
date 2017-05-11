<?php
error_reporting('0');
session_start();
include 'config.php';

unset($_SESSION['seat1']);
unset($_SESSION['basefare1']);
unset($_SESSION['fare1']);
unset($_SESSION['charge1']);
unset($_SESSION['tax1']);
unset($_SESSION['code1']);
unset($_SESSION['name1']);
unset($_SESSION['pick1']);
unset($_SESSION['schedule1']);
unset($_SESSION['todate']);
unset($_SESSION['fromdate']);
unset($_SESSION['seat2']);
unset($_SESSION['basefare2']);
unset($_SESSION['fare2']);
unset($_SESSION['charge2']);
unset($_SESSION['tax2']);
unset($_SESSION['code2']);
unset($_SESSION['name2']);
unset($_SESSION['pick2']);
unset($_SESSION['schedule2']);
unset($_SESSION['blockingcode1']);
unset($_SESSION['blockingcode2']);
unset($_SESSION['fromStationCode']);
unset($_SESSION['toStationCode']);
unset($_SESSION['status1']);
unset($_SESSION['blockingcode']);
unset($_SESSION['status2']);

$username="gprtickets";
$password="RAJ@1971";


$service_url ='http://api.ticketgoose.com/bookbustickets/rest/json/2.0/station?username='.$username.'&password='.$password;
$curl = curl_init($service_url);
$curl_post_data = array(
        'username' => 'javatest',
        'password' => '123456',
);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response = curl_exec($curl);

if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
 //   die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);

if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}







$test=json_encode($decoded->stations);

$test1=json_decode($test);

$count= count($test1);
$stationname="";
for($i=0;$i<$count;$i++){
    $stationname.=$test1[$i]->stationName;
	   $stationname.=",";
}
$myArray = explode(',', $stationname);
//print_r($myArray);
$data= json_encode($myArray);
 ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Gpr Tours ">
    <meta name="author" content="Banyan Infotech">
    <title>GPR Bus</title>

        <link rel="shortcut icon" href="img/gprbuslogo.ico" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/gprbuslogo.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/gprbuslogo.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/gprbuslogo.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/gprbuslogo.png">

        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet">
		
		
        <!-- SPECIFIC CSS -->
        <link href="css/skins/square/grey.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
        <!-- Google web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <style>
    body{
    margin:0px;padding:0px;}
	.error_login{
		color:#ff0000;
	}
	.headerclr{
		background-color:#ffffff;
		color:#9d9d9d;
		width:25%;height:21px;
		float:right;
	}
	.header_text{
	    	height: 21px !important;
    		border-bottom-width: 0px;
    		line-height: 21px;}
	.numclr{
	    	background-color: #eaeaea;
    		padding: 20px;
	}
	{
		ul#logicolor a:hover
	text-decoration: none !important;
	color:#5aa801 !important;
	
	}
	#logicolor:hover{
	color:#fe9000;
	}
	.chnge{
		color:#000;
		cursor:pointer;
	}
	.menubr{
		background-color:#272727;
		height:70px;}
	#txt{
		color:white;padding-top:10px;text-decoration:none;}
	#txt:hover{
		color:#000;
		background-color:#ffffff;
		width: 100px;
		margin-bottom: 5px;
		border-radius: 10px;
		padding: 5px;
	}
	#spacers{
		clear:both;
		margin-bottom:30px;
	}
	
.backp{
	    margin: 0 0 10px;
    font-weight: 500;
    font-size: 1em;
    line-height: 2em;
}

#itemss {
  position: relative;
  margin: 2%;
  overflow: hidden;
  width: 540px;
}
#itemss img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
#itemss:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
	</style>
    <body>

        <!--[if lte IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
        <![endif]-->

        <div id="preloader">
            <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
            </div>
        </div>
        <!-- End Preload -->

        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header================================================== -->
         <header style="padding:0px !important;">
         <div id="top_line" class="header_text">
            <div class="container-fluid">
                <div class="row" style="height:20px;">
                    <div class="col-md-12 col-sm-12 col-xs-12 headerclr">
                      WELCOME : <?php
session_start();

if(!empty($_SESSION['agent_name'])){

echo $_SESSION['agent_name'];
}
else{
echo "Guest";

}
 ?>&nbsp; &nbsp;<?php echo date("d/m/y H:i:s"); ?>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        <div id="top_lines">
            <div class="container-fluid numclr">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                  
                    <div id="logo_home">
                    	<h1><a href="index.php" title="Gpr bus" style="height:73px; margin: 0px 0 0;">Gpr bus</a></h1>
                    </div>
                
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="login.php" style="text-decoration:none;" id="logicolor acces_link">Sign in</a>
                                    
                                </div><!-- End Dropdown access -->
                            </li>
							<li> |</li>
                           <!-- <li><a href="register.php" class="logicolor"  id="wishist_link">Register</a> |</li>-->
							<li><a href="agent_login.php" style="text-decoration:none;" id="accss_link logicolor">Agent Login</a></li><br><br>
							<li class="chnge"> <i class="icon-phone"><strong>+91 968 888 8811</strong></i>
                    </li></ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container-fluid menubr">
            <div class="row text-center">
                <!--<div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo_home">
                    	<h1><a href="index.php" title="Gpr bus">Gpr bus</a></h1>
                    </div>
                </div>-->
                <nav class="col-md-12 col-sm-12 col-xs-12">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Gpr bus</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/gprbuslogo.png" width="160" height="34" alt=">Gpr bus" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
						<ul>
                            <li class="submenu">
                                <a href="index.php" class="show-submenu" id="txt" >Book Now </a>
                                
                            </li>
                       <li class="submenu">
                           <a href="print_ticket.php" class="show-submenu" id="txt">Print Ticket </a>
                                
                            </li>
                            <li class="submenu">
                                <a href="cancel_ticket.php" class="show-submenu" id="txt" >Cancel Ticket </a>
                                
                            </li><li class="submenu">
                                <a href="home.php" class="show-submenu" id="txt">My Account </a>
                                
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu" id="txt">About Us </a>
                                
                            </li>
                            <li class="submenu">
                                <a href="contact_us_1.php" class="show-submenu" id="txt">Contact Us </a>
                                
                            </li>
                            
                            
                        </ul>
                    </div><!-- End main-menu -->
                  
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->

        <section id="search_container">
            <div id="search">
                <ul class="nav nav-tabs" style="visibility: hidden">
                    <li class="active"><a href="#tours" data-toggle="tab">Tours</a></li>
                    <li><a href="#hotels" data-toggle="tab">Hotels</a></li>
                    <li><a href="#transfers" data-toggle="tab">Transfers</a></li>
                    <li><a href="#restaurants" data-toggle="tab">Restaurants</a></li>
                </ul>

                <div class="tab-content" style="background-color: #fac179;">
                    <div class="tab-pane active" id="tours">
                        <center><h3 style="color:white;">ONLINE BUS TICKET BOOKING</h3></center>
                        <form id="enqform" action="get_bus.php" >   
                       <div class="row">
                            	<div class="col-md-3">
                                	<div class="form-group">
                                        <label>From</label>
                                                   <input id="from" list="browsers" name="from" class="form-control" value="<?php if(($_SESSION['from'])!=''){ echo $_SESSION['from']; }?>">
<datalist id="browsers">
    <?php for($i=0;$i<$count; $i++) { ?>
          <option data-value="<?php echo $test1[$i]->stationCode; ?>"><?php echo $test1[$i]->stationName; ?></option>
	 <?php } ?>
</datalist>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                	<div class="form-group">
                                    	
                                       <label>To</label>
                      <input id="selected" list="browsers" name="to" class="form-control"  value="<?php if(($_SESSION['to'])!=''){ echo $_SESSION['to']; }?>">
<datalist id="browsers">
    <?php for($i=0;$i<$count; $i++) { ?>
          <option data-value="<?php echo $test1[$i]->stationCode; ?>"><?php echo $test1[$i]->stationName; ?></option>
	 <?php } ?>
</datalist>


                                    </div>
                                </div>
                            
                    
                            <div class="col-md-3">
                                <div class="form-group">
                                 
                                        <label for="dtp_input2" >From Date</label>
                                        <div class="input-group date form_date "  data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input class="form-control" size="16" id="fromdate" type="text" name="fromdate" value="" readonly>
                                            <span class="input-group-addon"><span style="color:#5aa701;" class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input2" value="" /><br/>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                <div class="form-group">
                                 
                                         <label for="dtp_input2" >Return Date(optional)</label>
                                        <div class="input-group date form_date" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input class="form-control" size="16" type="text" id="todate" name="todate"value="" readonly>
                                            <span class="input-group-addon"><span style="color:#5aa701;" class="glyphicon glyphicon-calendar"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input2" value="" /><br/>
                                    </div>
                                </div>
                            
                           

                       <span class="error_login"></span>
                        <hr>
						
                        <button style="background: #5aa701;" class="btn_1 btn-sucess Proceed_button" type="button" ><i class="icon-search"></i>Search now</button>
						</div>
                </form>
                    </div><!-- End rab -->
                </div>
                </div>
         
        </section>
		<section style="margin-bottom:0px;padding-bottom:0px;">
		<div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
		 <div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="tour_container">
						<div class="ribbon_3 popular"><span>Volvo</span></div>
						<div class="img_container">
							<a href="img/site/bus.jpg">
							<img src="img/site/bus.jpg" style="width:361px;height:231px;" class="img-responsive" alt="bus">
							
							</a>
						</div>
						<div class="tour_title">
							<center><h3>Chennai <br>to <br>Coimbatore</h3></center>
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="#"><img src="img/site/seat.png" style="width:15px;position: absolute;top: 15px;
								left: 13px;"><span class="tooltip-content-flip"><span class="tooltip-back">Book Now</span></span></a>
							</div><!-- End wish list-->
						</div> 
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                
				<div class="col-md-3 col-sm-3">
					<div class="tour_container">
						<div class="ribbon_3 popular"><span>KPN</span></div>
						<div class="img_container">
							<a href="img/site/bus2.jpg">
							<img src="img/site/bus2.jpg" style="width:361px;height:231px;" class="img-responsive" alt="Image">
							
							</a>
						</div>
						<div class="tour_title">
							<center><h3>Sathyamangalam <br>to <br>Bangalore</h3></center>
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="#"><img src="img/site/seat.png" style="width:15px;position: absolute;top: 15px;
								left: 13px;"><span class="tooltip-content-flip"><span class="tooltip-back">Book Now</span></span></a>
							</div><!-- End wish list-->
						</div> 
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
				<div class="col-md-3 col-sm-3">
					<div class="tour_container">
						<div class="ribbon_3 popular"><span>SLEEPER</span></div>
						<div class="img_container">
							<a href="img/site/bus3.jpg">
							<img src="img/site/bus3.jpg" style="width:361px;height:231px;" class="img-responsive" alt="Image">
							
							</a>
						</div>
						<div class="tour_title">
							<center><h3>Bangalore <br>to <br>Sathyamangalam</h3></center>
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="#"><img src="img/site/seat.png" style="width:15px;position: absolute;top: 15px;
								left: 13px;"><span class="tooltip-content-flip"><span class="tooltip-back">Book Now</span></span></a>
							</div><!-- End wish list-->
						</div> 
						
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
                
				<div class="col-md-3 col-sm-3">
					<div class="tour_container">
						<div class="ribbon_3 popular"><span>INSIDE VIEW</span></div>
						<div class="img_container">
							<a href="img/site/bus4.jpg">
							<img src="img/site/bus4.jpg" style="width:361px;height:231px;" class="img-responsive" alt="Image">
							</a>
						</div>
						<div class="tour_title">
							<center><h3>Chennai <br>to <br>Sathyamangalam</h3></center>
							<div class="wishlist">
								<a class="tooltip_flip tooltip-effect-1" href="#"><img src="img/site/seat.png" style="width:15px;position: absolute;top: 15px;
								left: 13px;"><span class="tooltip-content-flip"><span class="tooltip-back">Book Now</span></span></a>
							</div><!-- End wish list-->
						</div> 
					</div><!-- End box tour -->
				</div><!-- End col-md-6 -->
				
                </div>
                </div>
                </div>
                </div>
		</section>
		
		<section>
			<div class="container-fluid">
				<div class="row">
					<center><h1 style="margin-right:50px;">Welcome to <span style="color:#5aa801;"> GPR </span>Travels</h1>
						<img src="border.png" width="177px"></center>
						<div id="spacers"></div>
						<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-6 col-sm-6 col-xs-6" id="itemss" style="animation-duration:2s;">
							<img src="gpr1.jpg" width="500px" style="margin-bottom:20px;">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6" style="animation-duration:2s;">
						<div id="spacers"></div>
						<div id="spacers"></div><br>
							<p class="backp">GPR bus.in is Tamilnadu's largest online bus ticketing platform, trusted by over 6 million peoples. With a sale of over 1,00,00,000 tickets via web and our bus agents, GPR bus stands at the top of the game in bus ticketing. gprtickets.in  Try the redBus experience today.</p><br>
							<p class="backp">GPR bus.in is Tamilnadu's largest online bus ticketing platform, trusted by over 6 million peoples. With a sale of over 1,00,00,000 tickets via web and our bus agents, GPR bus stands at the top of the game in bus ticketing. gprtickets.in  Try the redBus experience today.</p><br>
						</div>
						</div>
						<div id="spacers"></div>
						
				</div>
			</div>
		</section>
		

<?php include 'footer.php'; ?>

        <div id="toTop"></div><!-- Back to top button -->

        <!-- Common scripts -->
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.js"></script>

        <!-- Specific scripts -->
        <script src="js/icheck.js"></script>
        <script>
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-grey',
                radioClass: 'iradio_square-grey'
            });
        </script>
       
        <script src="js/jquery.ddslick.js"></script>
        <script>
            $("select.ddslick").each(function () {
                $(this).ddslick({
                    showSelectedHTML: true
                });
            });
        </script>
      <script type="text/javascript" src="jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
        <script type="text/javascript">
            var date=new Date();
        var end= new Date(date.getFullYear(), date.getMonth() + 2, 0)
           
            $('.form_date').datetimepicker({
                format:'yyyy-mm-dd',
                weekStart: 1,
                todayBtn: 1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                minView: 2,
                forceParse: 0,
                todayBtn: true,
           startDate: date,
         endDate:end,
    
        minuteStep: 10
            });
          
        </script>

        <script type="text/javascript">/* <![CDATA[ */(function (d, s, a, i, j, r, l, m, t) {
                try {
                    l = d.getElementsByTagName('a');
                    t = d.createElement('textarea');
                    for (i = 0; l.length - i; i++) {
                        try {
                            a = l[i].href;
                            s = a.indexOf('/cdn-cgi/l/email-protection');
                            m = a.length;
                            if (a && s > -1 && m > 28) {
                                j = 28 + s;
                                s = '';
                                if (j < m) {
                                    r = '0x' + a.substr(j, 2) | 0;
                                    for (j += 2; j < m && a.charAt(j) != 'X'; j += 2)
                                        s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                                    j++;
                                    s = decodeURIComponent(s) + a.substr(j, m - j)
                                }
                                t.innerHTML = s.replace(/</g, '&lt;').replace(/>/g, '&gt;');
                                l[i].href = 'mailto:' + t.value
                            }
                        } catch (e) {
                        }
                    }
                } catch (e) {
                }
            })(document);/* ]]> */</script>
			  <script>
         $(function() {
         
         //	alert('dsf');
         
         $(".Proceed_button").click(function() {
			 
	var from=document.getElementById("from").value;
	var to=document.getElementById("selected").value;
		var fromdate=document.getElementById("fromdate").value;
		var todate=document.getElementById("todate").value;

	if(from==''){
		$("#from").focus();
		$('.error_login').html('Enter origin');
	}
	else if(to==''){
		$("#selected").focus();
		$('.error_login').html('Enter Destination');
	}
		else if(fromdate==''){
		$("#fromdate").focus();
		$('.error_login').html('Enter From Date');
	}
	else if(todate==''){
					
						$.ajax({
                    type: "POST",
                    url: "fromdate.php",
                    data: {
                        from: from,
                        to: to,
                        fromdate: fromdate,
						todate:todate

                    },
                    //datatype:string,

                    success: function (data)
                    {
						
				if(data=="1"){
					
					alert("please select greater than from date");
				}

					else{
					window.location.href="get_bus.php?from="+from+"&to="+to+"&traveldate="+fromdate;
					}
                    }
                });

	}
	
		else 
                 
         {
			 
			 	$.ajax({
                    type: "POST",
                    url: "getfrom.php",
                    data: {
                        from: from,
                        to: to,
                        fromdate: fromdate,
						todate:todate

                    },
                    //datatype:string,

                    success: function (data)
                    {
				if(data=="1"){
					
					alert("please select greater than from date");
				}

					else{
					window.location.href="get_bus.php?from="+from+"&to="+to+"&traveldate="+fromdate;
					}
                    }
                });
	}
	});
		 });
	</script>
   </body>

</html>