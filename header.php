
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<h1>Welcome to the website</h1>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<header>
		<nav>
			<div class="main-wrapper"></div>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="aboutme.php">ABOUT ME</a></li>
			</ul>
			<div class="nav-login">
				<form action="include/login-inc.php" method="POST">
					<label for='username'>UserName:</label> 
					<input type="text" name="uid" placeholder="username or E-mail">
					 <label for='password'>Password:</label>
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="submit">login!</button>
				</form>
				<a href="signup.php">Sign up </a>
			</div>
		</nav>
	</header>