<!DOCTYPE html>
<?php
session_start();
//that was just for testing
 //echo $_SESSION['userIsLoggedin'];
 if(isset($_POST['logout'])){
$_SESSION['userIsLoggedin'] = false;
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
 header( 'Location: http://localhost/cosc/index.php' ) ;
}?>
<html>
  <head>
    <title>welcome page </title>
  </head>
  <body>
    <nav>

 <form id='login' action='welcome.php' method='post' accept-charset='UTF-8'>
	<fieldset>
		<legend>Welcome</legend>
<a href="index.php">Go back to home page </a>
<span style="margin-left: 2em;">
  <a href="aboutme.php"target="_blank"> About Me</a> 
 </span>
					 <span style="margin-left: 2em;">

		<input type="submit" value="Logout?" name="logout" />
		</span>
	</fieldset>
</form> 



    </nav>
   
    <h1>welcome back <?php echo $_SESSION['currentUser'] ?> </h1>
    <?php echo "Today is " . date("l")."  ". date("Y-m-d")?><br>
       <br> <img src="https://ih0.redbubble.net/image.149272353.6094/flat,800x800,075,f.u1.jpg"height="240" width="320" controls />
    
    <nav>
      <ul>
        <li><a href="#top">personal info</a></li>
        <li><a href="#center">assingment</a></li>
        <li><a href="#bottom">bottom</a></li>
      </ul>
    </nav>
    <div id="top">
      <h2>User personal info</h2>
      <p>your <em>user name </em> is (<strong> <?php echo $_SESSION['currentUser'] ?></strong> ), </br>
       and your <em>password</em> is (<strong> <?php echo $_SESSION['currentPassWord']?></strong>.) </p><br>
      <h3>Assingments</h3>
      <ol>
        <li>first</li>
        <li>second</li>
      </ol>
      <h3>Features</h3>
      <p>. havent added much yet.</p>
    </div>
    <div id="center">
      <h2>center</h2>
      <h3>havent added much yet</h3>
      <ol>
        <li>this is a list :D</li>
        <li>this is a list :D</li>
        <li>this is a list :D</li>
      </ol>
      <h3>once again hanet added much yet</h3>
      <p></p>
    </div>
    <div id="bottom">
      <h2>bottom</h2>
      <video src=<a href="https://www.youtube.com/watch?v=afzmwAKUppU
      ">be our guest</a> height="240" width="320" controls>Video not supported</video>
    </div>
  </body>
</html>
