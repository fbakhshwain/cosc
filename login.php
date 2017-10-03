
<!DOCTYPE HTML>
<html>
<title>cosc4806 example</title>
<h1>welcome to the website</h1>
<head>
 <a href="index.php">go back to home page</a>
      <a href="aboutme.html">About Me</a>
<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
	<fieldset>
		<legend>Login</legend>


		<label for='username'>UserName*:</label> <input type="text"
			name=$userNameInput /> <label for='password'>Password*:</label> <input
			type="password" name=$userPassInput />
		<!--text  -->

		<input type="submit" value="submit?" name="subButton" />
	</fieldset>
</form>
</head>
<body>
	<p>
	<?php
	global $securty_array;
	$securty_array = array();

	//$userNameInput= "fares";
	//$userPassInput="1234";
	$loginTries=0;
	$DBName="fares";
	$BDpassword="1234";
	echo " welcome  <br> ";
		if (isset($_POST['subButton'])){
			
	$userNameInput = $_POST['$userNameInput'];
	$userPassInput = $_POST['$userPassInput'];
			$loginTries++;
			echo "1 checking your data",$userNameInput ;
			if (login($userNameInput,$userPassInput) ){
			 echo "<br> Welcome Back ",   $DBName;
			 }else {
			 echo "<br>  please try again";
			 }
		}else {
			echo "please enter your user name and password";
		}

		function login ($userNameInput,$userPassInput){
			global $DBName;
			global $BDpassword;

			if ($userNameInput== $DBName){
				if($userPassInput==$BDpassword)	{
					Echo "<br>  your info is correct ";
					return true;
				}else{
					Echo "<br>  your password is wrong";
					return false;
				}
			}else{
				echo" <br>  your user name is wrong";
				return false;
			}

		}
		echo "<br>  you have tried $loginTries times <br/>";

		?>
	</p>
</body>

</html>

<?php
/*
//assigns the username and password
$username = array("admin", "frank", "money");
$password = array("password", "thepass", "test");

//reads the users input and assigns a name
$user = $_POST['username'];
$pass = $_POST['password'];


//checks to see if the username and password are correct
if($user == $username[count($username)] && $pass == $password[count($password)]) {
    echo "welcome";
}
else {
     echo "wrong input, try again ";
}

?> */
