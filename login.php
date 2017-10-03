
<!DOCTYPE HTML>
<html>
<title>cosc4806 example</title>
<h1>welcome to the website</h1>

<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
	<fieldset>
		<legend>Login</legend>

		<label for='username'>UserName*:</label> 
		<input type="text"
			name=$userNameInput /> 
		<label for='password'>Password*:</label> 
		<input
			type="text" name=$userPassInput /> 
		<input type="submit"
			value="submit!" name="sublmitLogin" />
	</fieldset>
</form>
<body>
	<p>
	<?php
	global $securty_array;
	$securty_array = array();
	$userNameInput = $_POST['$userNameInput'];
	$userPassInput = $_POST['$userPassInput'];

	//$userNameInput= "fares";
	//$userPassInput="1234";
	$loginTries=0;
	$DBName="fares";
	$BDpassword="1234";
	echo "please enter your user name and password ";
	if (isset($_POST['sublmitLogin'])){
		if (login($userNameInput,$userPassInput) ){
			echo "<br> Welcome Back ", $DBName;
		}else {
			echo "<br>  please try again";
		}
	}else {
		echo "please enter your user name and password";
	}
	
	function login ($userNameInput,$userPassInput){
		global $DBName;
		global $BDpassword;

		if (($userNameInput== $DBName) /*&& ($userPassInput==$BDpassword)*/){
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
	echo "<br>  you have entered $userNameInput<br/>";

	?>
	</p>
</body>

</html>
