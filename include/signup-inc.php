<?php
session_start();
if (isset($_POST['submit'])){
	include_once'DB-inc.php';
	$first= mysqli_real_escape_string ($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$userN= mysqli_real_escape_string($conn,$_POST['userN']);
	$pwd  = mysqli_real_escape_string($conn,$_POST['pwd']);

	// Error handlers
	//cheking for empty fields
	if(empty($first)|| empty($last)||empty($email)||empty($userN)||empty($pwd)){
		$_SESSION['respodMSG']=("you left fields empty");
		header( "Location: http://localhost/cosc/signup.php?singup=empty" ) ;

	}else{
		// cheking if inputs are valid
		if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){
			$_SESSION['respodMSG']=(" Name format is invalid");
			header( " Location : http://localhost/cosc/signup.php?singup=invalid" );

			// now cheeking the email.
		}else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$_SESSION['respodMSG']=(" email format is invalid");
				header( "Location: http://localhost/cosc/signup.php?singup=email" );

				// check if user Name is avalable
			}else{
				$sql= "SELECT * FROM users WHERE user_userName='$userN'";
				$result= mysqli_query($conn,$sql);
				$resultcheck= mysqli_num_rows($result);
				if ($resultcheck > 0){
					$_SESSION['respodMSG']= ("username is already taken ");
					header( "Location: http://localhost/cosc/signup.php?singup=usertaken" );

					// veryfing password format
				}else{
					if(preg_match("/^(?=.*\d) (?=.*[A-Za-z])[\s\S]{6,16}  *$/",$pwd)){
						$_SESSION['respodMSG']= ("please use both numbers and alphabits and a min of 6 letters");
						header( "Location: http://localhost/cosc/signup.php?singup=invalidPwd" );
						//hashing the password
					}else{
						$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
						//insert the user in the Data base
						$sql= "INSERT INTO users ( user_first , user_last , user_email, user_password , user_userName)
					VALUES ('$first','$last','$email','$hashedPwd','$userN');";
						
					 mysqli_query($conn,$sql);
					 $_SESSION['respodMSG']= ("Thank you for regestering , please try to login now.");
					 header( "Location: http://localhost/cosc/signup.php?singup=success" );
					}
				}

			}
		}
	}
}else{
	header( 'Location: http://localhost/cosc/signup.php' ) ;
	exit();
}

?>