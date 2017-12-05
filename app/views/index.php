<?php 

	include 'template/header.php';	

 ?>
<div class="container content-container">
	<section class="main-container">
	<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<?php if(flash(false)): ?>
		<div class="alert alert-info">
				<?php echo flash(); ?>
		</div>
		<?php  endif; ?>
	
		<div class="login_form">
		<h2>Login</h2>
			<form action="<?php echo url('user/login');?>" method="POST">
				<div class="tlFull">
					<label for='username'>UserName:</label> 
					<input type="text" name="username" placeholder="username or E-mail">
				</div>
				<div class="tlFull">
					<label for='password'>Password:</label>
					<input type="password" name="password" placeholder="Password">
				</div>
				<div class="tlFull">
					<button type="submit" name="submit" class="tlSubmit">login!</button>
					<a  href="<?php echo url('user/signup');?>" class="tlSubmit tl_submit2">Sign up </a>
				</div>
				
			</form>
		</div>
	 </div>
	</div>
	</section>
	<div class="clearfix"></div>
</div>
<?php 
	include 'template/footer.php';	
