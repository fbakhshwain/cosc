
<!DOCTYPE HTML>
<?php
session_start();

?>
<html>
<title>cosc4806 loginCheck</title>

<h1>welcome to the website</h1>

<head>
<a href="index.php">go back to home page</a>
<br>
<a href="aboutme.php"target="_blank">About Me</a>
<br>
</head>

<body>
<?php
///////////// inceate varuables /////////////////
global $securty_array;
$securty_array = array();

//$userNameInput= "fares";
//$userPassInput="1234";


$DBName="fares";
$BDpassword="1234";

///////////////// calling the functions ////////////////
if (isset($_POST['subButton'])){
	$userNameInput = $_POST['$userNameInput'];
	$userPassInput = $_POST['$userPassInput'];
	//incremntatin for trials
	echo '<br> you have entered "',$userNameInput,'".';
	
	if (loginCheck($userNameInput,$userPassInput) ){
		// creatting sessions for the variables that we want to carry.
		$_SESSION['currentUser'] = $userNameInput;
		$_SESSION['currentPassWord'] =$userPassInput;
		$_SESSION['userIsLoggedin'] = true;
		
		echo "<h4>, welcome back ",   $DBName,"</h4>";
		echo '<br> <a href="http://localhost/cosc/welcome.php"><h1> go to prfile ?</h1></a>';
		echo "<br>  you have tried to login ", $_SESSION['$loginCheckTries']," times <br/>";
		 header( 'Location: http://localhost/cosc/welcome.php' ) ;
	}else{
		$_SESSION['$loginCheckTries']=$_SESSION['$loginCheckTries']+1;
		showForm("<br>  please try again");
	echo "<br>  you have tried to login ", $_SESSION['$loginCheckTries']," times <br/>";
	}
		
}else showForm("please enter your user name and password to login"); 

if ($_SESSION['userIsLoggedin']){
	   header( 'Location: http://localhost/cosc/welcome.php' ) ;
}

//////////// writing the functions /////////////////

// user info checker.

function loginCheck ($userNameInput,$userPassInput){
	global $DBName;
	global $BDpassword;

	if ($userNameInput== $DBName){
		if($userPassInput==$BDpassword) {
			Echo "<br> <h4> Your info is correct</h4> ";
			return true;
			header('Location: http://localhost/cosc/welcome.php');
		}else{
			Echo "<br>  your password is wrong";
			return false;
		}
	}else{
		echo" <br>  your username is wrong";
		return false;
	}

}


// display the form with a msg.

function showForm($msg){
	echo $msg;
	include 'form.php';
}

?>
	


</html>

<!--  
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

 ?> */-->
</body>