<?php
include 'config.php';
// include 'userregi_email.php';

if (isset($_POST['submit'])) {
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$gender =mysqli_real_escape_string($conn, $_POST['gender']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$token = bin2hex(random_bytes(15));

	

	$selectquery = "SELECT * FROM user_register WHERE email = '$email'";
	$query = mysqli_query($conn, $selectquery);

	$row = mysqli_num_rows($query);
	if ($row > 0) {
		header("Location:../pages/user/uregi.php?error=Email Is Already Register..!");
		exit();
	} else {
				

                    
                    //      echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		if($fname != "" && $lname != "" && $address != "" && $gender != ""){
		if ($password === $cpassword) {
			if($password <= 8) {
			$insertquery = "INSERT INTO user_register(fname,lname,address,gender, email, password, cpassword,token,status) VALUES('$fname','$lname','$address','$gender','$email','$pass','$cpass','$token','inactive')";
			$query = mysqli_query($conn, $insertquery) ;
			header("location:http://localhost/project%20ecommrce/php/userregi_email.php?id='$email'");

			if ($query) {
				

// $subject = "Email Activation";
// $body = "Hi, $fname. Click here too activate youe account http://localhost/project%20ecommrce/php/active.php?token=$token ";
// $headers = "From: davrapradip24@gmail.com";

// if (mail($email, $subject, $body, $headers)) {
//    $_SESSION ['msg'] = "Check you mail to activate your account $email ";
//    header('location:../pages/user/ulogin.php');
// } else {
//     echo "Email sending failed...";
// }

$otp = "";
for($i = 1;$i<=6;$i++){
   $otp .= rand(0,9);
}
echo $otp; 

// $myfile = fopen("hello.html", "r") or die("Unable to open file!");

// $data = "";
// while(!feof($myfile)) {
//   $data .= fgets($myfile);
// }
// fclose($myfile);

// $to_email = "davarapradeep@gmail.com";
$subject = "Simple Email Test via PHP";
// $body = $data;
$body = "Hi, $fname. Click here too activate youe account http://localhost/project%20ecommrce/php/active.php?token=$token ";;
// $body = "your opt is ".$otp;
$headers = "From: princedesai635@gmail.com";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";

if(mail($email,$subject,$body,$headers))
{
echo "Email successfully sent to $to_email...";
} else {
echo "Email sending failed...";
}


// https://myaccount.google.com/u/3/security?pli=1&n1r=1

?>

				<script>
					alert("insert successfully");
					location.replace("../pages/user/ulogin.php");
				</script> -->
				<!-- header('location:../pages/user/ulogin.php');
<?php
			} else {
				header("Location:../pages/user/uregi.php?error=Data Not Inserted..!");
				exit();
			}
		}else{
			header("Location:../pages/user/uregi.php?error=Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
					exit();
		}
		} else{
			header("Location:../pages/user/uregi.php?error=Password Is Not Match..!");
			exit();
		}
	}else{
		header("Location:../pages/user/uregi.php?error=Please Fill The Form..!");
			exit();
	}

	}
}
?>