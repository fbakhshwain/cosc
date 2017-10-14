<?php
 include_once 'header.php';
?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>SignUp</h2>
			<form class="signup-form" action ="include/signup-inc.php" method ="POST">
			<input type="text" name="first" placeholder="First Name"><br>
			<input type="text" name="last" placeholder="Last Name"><br>
			<input type="text" name="email" placeholder="E-mail adress"><br>
			<input type="text" name="userN" placeholder="User Name"><br>
			<input type="password" name="pwd" placeholder="Password"><br>
			<button type="submit" name="submit">Sign Up</button>
			
			</form>
		</div>
	</section>
<?php
 include_once 'footer.php';
?>
