 <?php
$email_new = "";

                                             if(isset($_GET['id'])){ 
                                              $email_new = $_GET['id'];
                                             }

                                             if($email_new != null){
                                              $subject = "Simple Email Test via PHP";
// $body = $data;
$body = "hi, welcome to website";
// $body = "your opt is ".$otp;
$headers = "From: princedesai635@gmail.com";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";

if(mail($email_new,$subject,$body,$headers))
{
  echo "Email sending failed...";
} else {
  echo "Email successfully sent to $email_new..";
  header("Location:../pages/user/ulogin.php");
  
}

                                             }

                                            
//$otp = "";
//for($i = 1;$i<=6;$i++){
   // $otp .= rand(0,9);
//}
//echo $otp; 

// $myfile = fopen("hello.html", "r") or die("Unable to open file!");

// $data = "";
// while(!feof($myfile)) {
//   $data .= fgets($myfile);
// }
// fclose($myfile);

// $to_email = "davarapradeep@gmail.com";




// $subject = "Simple Email Test via PHP";
// // $body = $data;
// $body = "hi, welcome to website";
// // $body = "your opt is ".$otp;
// $headers = "From: princedesai635@gmail.com";
// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/html\r\n";

// if(mail($email_new,$subject,$body,$headers))
// {
//   echo "Email sending failed...";
// } else {
//   echo "Email successfully sent to $to_email...";
// }


// https://myaccount.google.com/u/3/security?pli=1&n1r=1
?>