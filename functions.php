<?php 

$result ="";
if(isset($_POST['submit'])) {
  
  $name = $_POST['name'];
  $to = "hney1000.ay1@gmail.com";
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $header = "From:".$from;
  $msg = $_POST['message'];
   
   $mail = mail($to,$subject, $msg,$header);
   if($mail){
     $result =  '<div id="mailMessage" class="alert alert-success"><i class="fas fa-check"></i> mail sent successfully</div>';
   } else {
     $result =  '<div id="mailMessage" class="alert alert-danger"><i class="fas fa-times"></i> Sorry the Mail was not sent</div>';
   }



}
 ?>
