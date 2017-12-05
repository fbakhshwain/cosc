<?php include 'template/header.php';


		$username = '';
		$firstname = '';
		$lastname = '';
		$email = '';
		$password = '';
		$confirmPassword = '';
		
		if(!empty($user)){
			$username = $user->username;		
			$firstname = $user->firstname;		
			$lastname = $user->lastname;		
			$email = $user->email;		
			$password = $user->password;		
			$confirmPassword = $user->confirmPassword;		
		}

 ?>
<div class="container content-container">
	<section class="main-container">
	 <div class="row">
	 <div class="col-md-6 col-md-offset-3">
		<div class="signup-form">
			<form action ="<?php echo url('user/signup');?>" method ="POST">
				<h2>SignUp</h2>
				<p> Please fill in all fields </p>
				<div class="tlFull">
					<div class="tlHalf">
						<label>First Name</label>
						<input type="text" name="firstname" value="<?php echo $firstname ?>" placeholder="First Name">
						<?php if(isset($errors['firstname'])){ ?>
						<span><?php echo $errors['firstname'] ?></span>
						<?php }?>
					</div>
					<div class="tlHalf">
					
						<label>Last Name</label>
						<input type="text" name="lastname" value="<?php echo $lastname ?>" placeholder="Last Name">
						<?php if(isset($errors['lastname'])){ ?>
						<span><?php echo $errors['lastname'] ?></span>
						<?php }?>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="tlFull">
					<div class="tlHalf">
					
						<label>Email</label>
						<input type="text" name="email"  value="<?php echo $email ?>" placeholder="E-mail adress">	
						<?php if(isset($errors['email'])){ ?>
						<span><?php echo $errors['email'] ?></span>
						<?php }?>
						
					</div>
					<div class="tlHalf">
					
						<label>Username</label>
						<input type="text" name="username"  value="<?php echo $username ?>"  placeholder="User Name">
												<?php if(isset($errors['username'])){ ?>
						<span><?php echo $errors['username'] ?></span>
						<?php }?>

					</div>
					<div class="clearfix"></div>
				</div>
				<div class="tlFull">
				
						<label>Password</label>
					<input type="password" name="password" value="<?php echo $password ?>" placeholder="Password">
						<?php if(isset($errors['password'])){ ?>
						<span><?php echo $errors['password'] ?></span>
						<?php }?>

				</div>
				
				<div class="tlFull">
				
						<label>Confirm Password</label>
					<input type="password" name="confirmPassword" value="<?php echo $confirmPassword ?>" placeholder="Confirm Password">
						<?php if(isset($errors['confirmPassword'])){ ?>
						<span><?php echo $errors['confirmPassword'] ?></span>
						<?php }?>

				</div>
				<div class="tlFull">
					<button type="submit" name="newSignup" class="tlSubmit">Sign Up</button>
				</div>
					
			</form>
		</div>
		</div>
		</div>
	</section>
</div>
<?php include 'template/public_footer.php'; ?>