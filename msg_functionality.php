<?php

function send_message($cphone,$message1){
	
file_get_contents('http://hpsms.dial4sms.com/api/web2sms.php?username=mmvcbe&password=happy1234&to='.$cphone.'&sender=GEMEQP&message='.$message1.'');
}
?>