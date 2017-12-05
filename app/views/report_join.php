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
				
				
				
				<h2>User All Details</h2>
				<div class="table-responsive">
					<table class="viewNotes">
						<tr>
							<th>Username</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Date of Birth</th>
							<th>Notes</th>
							<th>Last Logins</th>
						</tr>
			
						<?php foreach($users as $user ){ ?>
						<tr>
							<td><?php echo $user->username; ?></td>
							<td><?php echo $user->firstname . ' ' . $user->lastname; ?></td>
							<td><?php echo $user->email; ?></td>
							<td><?php echo $user->phone_number; ?></td>
							<td><?php echo $user->birthday; ?></td>
							<td><?php echo $user->total_reminder; ?></td>
							<td><?php echo $user->last_login; ?></td>
							
						</tr>
						<?php } ?>
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