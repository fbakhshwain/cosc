<?php 

	$profile = $this->ProfileModel->getProfile();
	$provinces = $this->ProfileModel->getProvinces();

	$province  = 1;

	if(isset($profile->province))
		$province = $profile->province;
	
	
	$cities =  $this->ProfileModel->getCities($province );
		
$firstname = '';
$lastname = '';
$email = '';
$phone_number = '';
$birthday = '';
$province = '';
$city = '';

if($profile){
	
	$firstname = $profile->firstname;
	$lastname = $profile->lastname;
	$email = $profile->email;
	$phone_number = $profile->phone_number;
	$birthday = $profile->birthday;
	$province = $profile->province;	
	$city = $profile->city;	

}
	
 ?>
<div id="profileModal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="falses">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <?php if($_SESSION['profile'] == 1){ ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <?php } ?>
        <h4 class="modal-title">Profile</h4>
      </div>
      <div class="modal-body">
	  
	  <div class="alert" style="display:none;"></div>
	  
        <form id="profile-form"  method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="firstname">First Name</label>
					<input type="text" required class="form-control" id="firstname" name="firstname" value="<?php echo $firstname ?>" >
				</div>
			</div>
			
			<div class="col-md-6">	    
				<div class="form-group">
					<label for="lastname">Last Name</label>
					<input type="text" required class="form-control" id="lastname" name="lastname" value="<?php echo $lastname ?>" >
				</div>
			</div>
		</div>
      
	  
		<div class="row">
			<div class="col-md-6">
	    
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" required class="form-control" id="email" name="email" value="<?php echo $email ?>" >
		</div>
      </div>
	  
	    
			<div class="col-md-6">
		<div class="form-group">
			<label for="phone_number">Phone Number</label>
			<input type="text" required class="form-control" id="phone_number"  name="phone_number" value="<?php echo $phone_number ?>" >
		</div>
		</div>
      </div>
	  
	    
		<div class="form-group">
			<label for="birthday">Birthday</label>
			<input type="date" reqiured class="form-control" id="birthday" name="birthday" value="<?php echo $birthday ?>" >
		</div>
      
	  
		<div class="form-group tlFull">
		<label>Province</label>
			<select id="provinces" name="province"  class="form-control" >
			
				<?php foreach($provinces as $prov){ ?>
				<option value="<?php echo $prov->id ?>" <?php echo  ($province==$prov->id )? 'selected':'' ?>><?php echo $prov->name ?></option>
				<?php } ?>
			</select>
			
			
			<?php if(isset($errors['province'])){ ?>
			<span><?php echo $errors['province'] ?></span>
			<?php }?>
		</div>
		
		<div class="form-group tlFull">
		
		<label>City</label>
			<select id="cities" name="city"  class="form-control">
			<?php foreach($cities as $c){ ?>
				<option value="<?php echo $c->id ?>" <?php echo ($city==$c->id )? 'selected':'' ?>><?php echo $c->name ?></option>
				<?php } ?>
			</select>
			
			
			<?php if(isset($errors['city'])){ ?>
			<span><?php echo $errors['city'] ?></span>
			<?php }?>
		</div>
		
	  
	  </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<script>

<?php
if($_SESSION['profile'] != 1) {
?>

$('#profileModal').modal('show');

<?php } ?>

$('#profile-form').submit(function(){
	elm =  $(this);
	
	$.ajax({
		url: '<?php echo url('profile/save') ?>',
		type: 'post',
		data: elm.serialize(),
		success: function(res){
			
			if(res == 'ok'){
				$('#profileModal .alert').removeClass('alert-danger').addClass('alert-success').html('Your profile has been updated successfully.').show();	
				setTimeout(function(){
					window.location.reload();
				},3000);
			}else{
				$('#profileModal .alert').removeClass('alert-success').addClass('alert-danger').html(res).show();	
				
			}
		}
	});
	return false;
});
</script>