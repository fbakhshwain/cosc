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
				
				
				
				<h2>API Endpoints</h2>
				
				<div class="table-responsive">
					<table class="viewNotes">
						<tr>
							<th>API URL</th>
							<th>Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td><a target="_blank" href="<?php echo url('api/users'); ?>"><?php echo url('api/users'); ?></a></td>
							<td>GET</td>
							<td>Get all users.</td>
						</tr>
						<tr>
							<td><a  target="_blank"  href="<?php echo url('api/users/[user-id]'); ?>"><?php echo url('api/users/[user-id]'); ?></a></td>
							<td>GET</td>
							<td>Get user by id.</td>
						</tr>
						
						<tr>
							<td><a target="_blank" href="<?php echo url('api/profiles'); ?>"><?php echo url('api/profiles'); ?></a></td>
							<td>GET</td>
							<td>Get all users profile.</td>
						</tr>
						<tr>
							<td><a  target="_blank"  href="<?php echo url('api/profiles/[user-id]'); ?>"><?php echo url('api/profiles/[user-id]'); ?></a></td>
							<td>GET</td>
							<td>Get profile by user id.</td>
						</tr>
						<tr>
							<td><a target="_blank" href="<?php echo url('api/reminders'); ?>"><?php echo url('api/reminders'); ?></a></td>
							<td>GET</td>
							<td>Get all users reminders.</td>
						</tr>
						<tr>
							<td><a  target="_blank"  href="<?php echo url('api/reminders/[user-id]'); ?>"><?php echo url('api/reminders/[user-id]'); ?></a></td>
							<td>GET</td>
							<td>Get reminders by user id.</td>
						</tr>
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