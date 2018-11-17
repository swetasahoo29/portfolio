<?php 





function sendMail($usermail,$message) {
  
  $to = "hneyanish1000.ay1@gmail.com";
  $from = $usermail;
  $header = "From:$usermail";
  $msg = $message;
   
   $mail = mail($to, 'demo mail', $msg,$header);

    if ($mail) {
    	echo "mail sent";
     } else {
    	echo "mail not sent";
    }
    
}

sendMail('anishyadav20072000@gmail.com',"test message");






 ?>