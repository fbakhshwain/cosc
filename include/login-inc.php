<?php
session_start();
if (isset($_POST['submit'])){
	include 'DB-inc.php';
	$userN = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	/////////////////// error handling/////////////////////
	// check if empty
	if (empty($userN)|| empty($pwd)){
		$_SESSION['respodMSG']="your user name or passwords were not filled ";

		header( "Location: http://localhost/cosc/index.php?login=empty" );
		exit();
	}else{
		$sql= "SELECT * FROM users WHERE user_userName='$userN'";
		$result = mysqli_query($conn,$sql);
		$resulteCheck = mysqli_num_rows($result);
		// check if user name exist
		if ($resulteCheck < 1){
		 $_SESSION['respodMSG']="your user name doesnt exist ";
		 header( "Location: http://localhost/cosc/index.php?login=error" );
		 exit();
		}else{
			if($row= mysqli_fetch_assoc($result)){
				// dehashing the password
				$hashPwdCheck= password_verify($pwd,$row['user_password']);
				// cheking if password is correct
				if ($hashPwdCheck == false){
					$_SESSION['respodMSG']="your user password was worng";
					header( "Location: http://localhost/cosc/index.php?login+error" );
					exit();
				}elseif($hashPwdCheck== true){
					//loging in finaly
					$_SESSION['u_id']= $row['user_id'];
					$_SESSION['u_first']= $row['user_first'];
					$_SESSION['u_last']= $row['user_last'];
					$_SESSION['u_email']= $row['user_email'];
					$_SESSION['u_name']= $row['user_userName'];
					$_SESSION['respodMSG']="you are now loged in";
					header( "Location: http://localhost/cosc/welcome.php" );
					exit();
				}
			}
		}
	}
}else{
	$_SESSION['respodMSG']="please login or signup ";
	header( "Location: http://localhost/cosc/index.php?login+error" );
	exit();
}

?>