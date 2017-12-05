<?php
	include 'template/header.php';	
 
		$id = '';
		$username = '';
		$user_type = '';
		
		if(!empty($user)){
			$id = $user->id;		
			$username = $user->username;		
			$user_type = $user->user_type;		
		}
	?>
	<div class="container content-container">
		<div class="content-wrap">
		<div class="row">
			<!--- Side Bar Starts -->
			<div class="col-md-3 col-sm-12">
			<aside>
				<?php include 'template/sidebar.php' ?>
			</aside>
			</div>
			<!--- End of Side Bar Starts --->
			<div class="col-md-9 col-sm-12">
			<div class="content">
		<div class="signup-form">
			<form  method ="POST">
			<input type="hidden" name="id" value="<?php echo $id ?>">
				<h2><?php echo isset($id) ? 'Update User' : 'Create User' ?></h2>
				<div class="tlFull">
				
					<label>Username</label>
					<input type="text" name="username"  value="<?php echo $username; ?>" placeholder="Username">
					<?php if(isset($errors['username'])){ ?>
					<span><?php echo $errors['username'] ?></span>
					<?php }?>
				</div>
				
				<div class="tlFull">
				
					<label>Password</label>
					<input type="text" name="password" value=" " placeholder="Password">
					<?php if(isset($errors['password'])){ ?>
					<span><?php echo $errors['password'] ?></span>
					<?php }?>
				</div>
		
				<div class="tlFull">
					
					<label>Role</label>
					<select id="user_type" name="user_type">
					<?php foreach($roles as $role){ ?>
						<option value="<?php echo $role ?>" <?php echo ($role == $user_type)?'selected':'' ?>><?php echo ucfirst($role) ?></option>
					<?php }?>
					</select>
				</div>
		
				<div class="tlFull">
					<select id="manager" name="manager" <?php echo ($user_type != 'staff')?'style="display:none"':'' ?> >
						<option value="">---</option>
					<?php foreach($managers as $manager){ ?>
						<option value="<?php echo $manager->id ?>" <?php echo ($manager->id  == $manager_id)?'selected':'' ?>><?php echo ucfirst($manager->username) ?></option>
					<?php }?>
					</select>
					
					<?php if(isset($errors['manager'])){ ?>
					<span><?php echo $errors['manager'] ?></span>
					<?php }?>
				</div>
		
		
				<div class="tlFull">
					<button type="submit" name="newUser" class="tlSubmit"><?php echo isset($id) ? 'Update User' : 'Create User' ?></button>
				</div>
				
					<div class="errorMsg">
						<?php if(flash(false)): ?>
								<?php flash(); ?>
						<?php  endif; ?>
					</div>
			</form>
		</div>
			</div>
			</div>
<!--- ========================== --->
<!---End of Content Area--->
			<div class="clearfix"></div>
			</div>
			</div>
			
    </div>
<?php include 'template/footer.php';	?>