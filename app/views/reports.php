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
				
				
				
				<h2>Reminder</h2>
				<form>
					<input type="date" name="start" value="<?php echo $start ?>" >
					<input type="date" name="end" value="<?php echo $end ?>" >
					<input type="submit" />
				</form>
				<div class="table-responsive">
					<table class="viewNotes">
						<tr>
							<th>Username</th>
							<th>Subject</th>
							<th>Description</th>
						</tr>
					    <?php foreach($reminder_dates as $rd ){ ?>
						<tr>
							<td><?php echo $rd->username; ?></td>
							<td><?php echo $rd->subject; ?></td>
							<td><?php echo $rd->description; ?></td>
						</tr>
						<?php } ?>
					</table>
				</div>
				
				
				<h2>Most Reminder</h2>
				
				<div class="table-responsive">
					<table class="viewNotes">
						<tr>
							<th>Username</th>
							<th>Reminder</th>
						</tr>
					    
						<tr>
							<td><?php echo $reminder->username; ?></td>
							<td><?php echo $reminder->total; ?></td>
						</tr>
					</table>
				</div>
				
				
				<h2>User Logins</h2>
				
			<div class="table-responsive">
				<table class="viewNotes">
					  <tr>
						<th>ID</th>
						<th>Username</th>
						<th>Total Logins </th>
				
					</tr>
					  <?php 
						  $i=1;
						  foreach($logins as $login){   
						?>						 
						 <tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $login->username; ?></td>
							<td><?php echo $login->total; ?></td>
						
						  </tr>
						  <?php $i++; }  ?>
					</table>
			</div>
			
			
				
				<h2>User Logins Failure</h2>
				
			<div class="table-responsive">
				<table class="viewNotes">
					  <tr>
						<th>ID</th>
						<th>Username</th>
						<th>Total Login fails </th>
				
					</tr>
					  <?php 
						  $i=1;
						  foreach($login_fails as $login){   
						?>						 
						 <tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $login->username; ?></td>
							<td><?php echo $login->total; ?></td>
						
						  </tr>
						  <?php $i++; }  
						  ?>
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