<?php
	include 'template/header.php';	
 
		$id = '';
		$firstname = '';
		$lastname = '';
		$email = '';
		$phone_number = '';
		$birthday = '';
		$province = '';
		$city = '';
		$note = '';
		
		if($profile){
			$id = $profile->id;		
			$firstname = $profile->firstname;		
			$lastname = $profile->lastname;		
			$email = $profile->email;		
			$phone_number = $profile->phone_number;		
			$birthday = $profile->birthday;
			$province = $profile->province;	
			$city = $profile->city;	
			$note = $profile->note;	
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
			<form  method ="POST" id="prof-form">
				<h2><?php echo isset($id) ? 'Update Profile' : 'Create Profile' ?></h2>
				<input type="hidden" name="id" value="<?php echo $id ?>" >
				<div class="tlFull">
				
					<label>First Name</label>
					<input type="text" name="firstname"  value="<?php echo $firstname; ?>" placeholder="First Name">
					
					<?php if(isset($errors['firstname'])){ ?>
					<span><?php echo $errors['firstname'] ?></span>
					<?php }?>
				</div>
				<div class="tlFull">
					
					<label>Last Name</label>
					<input type="text" name="lastname" value="<?php  echo $lastname; ?>" placeholder="Last Name">
					
					<?php if(isset($errors['lastname'])){ ?>
					<span><?php echo $errors['lastname'] ?></span>
					<?php }?>
				</div>
				
				<div class="tlFull">
					
					<label>Email</label>
					<input type="text" id="email" name="email" value="<?php  echo $email; ?>" placeholder="Email">
					<span id="email_error"></span>
					<?php if(isset($errors['email'])){ ?>
					<span><?php echo $errors['email'] ?></span>
					<?php }?>
				</div>
				
				<div class="tlFull">
				
					<label>Phone Number</label>
					<input type="text" name="phone_number" value="<?php  echo $phone_number; ?>" placeholder="Phone Number">
					
					<?php if(isset($errors['phone_number'])){ ?>
					<span><?php echo $errors['phone_number'] ?></span>
					<?php }?>
				</div>
				
				<div class="tlFull">
				
				<label>Birthday</label>
					<input type="date" name="birthday" value="<?php  echo $birthday; ?>" placeholder="Birthday">
					
					<?php if(isset($errors['birthday'])){ ?>
					<span><?php echo $errors['birthday'] ?></span>
					<?php }?>
				</div>
				
				
				
				<div class="tlFull">
				<label>Province</label>
					<select id="provinces" name="province">
					
						<?php foreach($provinces as $prov){ ?>
						<option value="<?php echo $prov->id ?>" <?php echo  ($province==$prov->id )? 'selected':'' ?>><?php echo $prov->name ?></option>
						<?php } ?>
					</select>
					
					
					<?php if(isset($errors['province'])){ ?>
					<span><?php echo $errors['province'] ?></span>
					<?php }?>
				</div>
				
				<div class="tlFull">
				
				<label>City</label>
					<select id="cities" name="city">
					<?php foreach($cities as $c){ ?>
						<option value="<?php echo $c->id ?>" <?php echo ($city==$c->id )? 'selected':'' ?>><?php echo $c->name ?></option>
						<?php } ?>
					</select>
					
					
					<?php if(isset($errors['city'])){ ?>
					<span><?php echo $errors['city'] ?></span>
					<?php }?>
				</div>
				
				<div class="tlFull">
				
					<label>Note</label>
					<textarea name="note"><?php echo $note ?></textarea>
					<?php if(isset($errors['note'])){ ?>
					<span><?php echo $errors['note'] ?></span>
					<?php }?>
				</div>
				
				
				<div class="tlFull">
					<button type="submit" name="newNote" class="tlSubmit"><?php echo isset($id) ? 'Update Profile' : 'Create Profile' ?></button>
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