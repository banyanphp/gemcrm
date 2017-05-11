<?php

function send_simple_mail($tomail,$toname,$subject,$msg)
{
	
     include_once 'phpmailer/PHPMailerAutoload.php'; 
    //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        //$mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        //$mail->Debugoutput = 'html';
        //Set the hostname of the mail server
$mail->Host       = "smtp.zoho.com"; // SMTP server
$mail->SMTPDebug  = 2;
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
   // $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
 
$mail->Host       = "ssl//144.208.69.7"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "mails@crmmail.gemservice.in"; // SMTP account username
$mail->Password   = "cascade123";    
        //Set who the message is to be sent from
        $mail->setFrom('sales@gemindia.com', 'Gem Equipments');
        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');
        //Set who the message is to be sent to
        $mail->addAddress($tomail, $toname);

$mail->addCC('sales@gemindia.com');

        //Set the subject line
        $mail->Subject = $subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($msg);
        //Replace the plain text body with one created manually
       // $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
       
        //send the message, check for errors
        
        
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
 return true;
}
    

    	
}



function send_multiple_mail($tomail,$cname,$subject,$msg)
{
	
     include_once 'phpmailer/PHPMailerAutoload.php'; 
    //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        //$mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        //$mail->Debugoutput = 'html';
        //Set the hostname of the mail server
$mail->Host       = "smtp.zoho.com"; // SMTP server
$mail->SMTPDebug  = 2;
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
   // $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
 
$mail->Host       = "ssl//144.208.69.7"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "mails@crmmail.gemservice.in"; // SMTP account username
$mail->Password   = "cascade123";    
        //Set who the message is to be sent from
        $mail->setFrom('sales@gemindia.com', 'Gem Equipments');
        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');
        //Set who the message is to be sent to
		
	foreach($tomail as $email){
$mail->addAddress($email, $cname);   
               // name is optional
}

$mail->addCC('sales@gemindia.com');

        //Set the subject line
        $mail->Subject = $subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($msg);
        //Replace the plain text body with one created manually
       // $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
       
        //send the message, check for errors
        
        
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
 return true;
}
    

    	
}

function send_attachment_mail($tomail,$cname,$subject,$msg,$attachment)
{
	
     include_once 'phpmailer/PHPMailerAutoload.php'; 
    //Create a new PHPMailer instance
        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        //$mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        //$mail->Debugoutput = 'html';
        //Set the hostname of the mail server
$mail->Host       = "smtp.zoho.com"; // SMTP server
$mail->SMTPDebug  = 2;
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
   // $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
 
$mail->Host       = "ssl//144.208.69.7"; // sets the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "mails@crmmail.gemservice.in"; // SMTP account username
$mail->Password   = "cascade123";    
        //Set who the message is to be sent from
        $mail->setFrom('sales@gemindia.com', 'Gem Equipments');
        //Set an alternative reply-to address
        //$mail->addReplyTo('replyto@example.com', 'First Last');
        //Set who the message is to be sent to
		
	foreach($tomail as $email){
$mail->addAddress($email, $cname);   
               // name is optional
}
$mail->addCC('sales@gemindia.com');

        
//Set the subject line
        $mail->Subject = $subject;
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML($msg);
        //Replace the plain text body with one created manually
       // $mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
	$count= count($attachment);
for($i=0;$i<$count;$i++){	
$att="../gadiagrams/";
$att.=$attachment[$i];
      $mail->AddAttachment($att);
}
        //send the message, check for errors
        
        
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
 return true;
}
    

    	
}

