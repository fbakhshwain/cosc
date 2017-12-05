<?php include 'template/header.php'; ?>
	<div class="clearfix"></div>
	<div class="container content-container">
		<div class="content-wrap mar_bottom">
			<!--- Side Bar Starts -->
			<div class="row">
			<div class="col-md-3 col-sm-12">
			<aside>
				<?php  include 'template/sidebar.php';	?>
			</aside>
			</div>
			<!--- End of Side Bar Starts --->
			<div class="col-md-9 col-sm-12">
			<div class="content">
				<div class="notes">
				<?php  include 'template/messages.php';	?>
				
			<div class="table-responsive">
				<table class="viewNotes">
					  <tr>
						<th>User ID</th>
						<th>Username</th>
						<th>Role</th>
						<th>Action</th>
					  </tr>
					  <?php 
						  foreach($users as $user){ 
						  ?>
						  <tr>
							<td><?php echo $user->id; ?></td>
							<td><?php echo $user->username; ?></td>
							<td><?php echo ucfirst($user->user_type); ?></td>
							
							<td>
							<?php 
							if(userType('admin')){ ?>
							<a href="<?php echo url('user/save/'.$user->id) ?>">Edit User</a> | <a href="<?php echo url('user/remove/'.$user->id) ?>">Delete</a> | 
						  <?php } ?>
							<a href="<?php echo url('/profile/update/'.$user->id) ?>">Update Profile</a></td> 
						  </tr>
						  <?php  }  ?>
					</table>
				</div>
				</div>
			</div>
			</div>
<!--- ========================== --->
<!---End of Content Area--->
			<div class="clearfix"></div>
			</div>
		</div>
    </div>
<?php include "template/footer.php"; ?>