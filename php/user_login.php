<?php
	include 'config.php';

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		$search_email = "SELECT * FROM user_register WHERE email = '$email'";
		$query = mysqli_query($conn,$search_email);

		$email_row = mysqli_num_rows($query);

		if($email_row){
			$email_pass = mysqli_fetch_assoc($query);
			
			$pass = $email_pass['password'];
			$_SESSION['name'] = $email_pass['name'];

			$pass_verify = password_verify($password, $pass);

			if($pass_verify){
				echo "login successfully";
				?>
				<script>
					location.replace("../pages/user/uregi.php");
					</script>
				<?php
			}else{
				header("Location:../pages/user/ulogin.php?error=Invalid Password..!");
			exit();
			}

		}else{
			header("Location:../pages/user/ulogin.php?error=Invalid Email..");
			exit();
		}
	}
	?>