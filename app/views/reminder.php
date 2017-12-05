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
					<?php if(empty($notes)){ ?>
					<div class="alert alert-info">There is no Reminder to show. Please click <a href="<?php echo url('reminders/save') ?>">here</a> to add reminder.</div>
					<?php }else{ ?>
						<table class="viewNotes">
							  <tr>
								<th>ID</th>
								<th>Subject</th>
								<th>Description</th>
								<th>Created Date</th>
								<th>Action</th>
							  </tr>
							  <?php 
							  
								  foreach($notes as $note){   
									?>
								  <tr>
									<td><?php echo $note->id ?></td>
									<td><?php echo $note->subject; ?></td>
									<td><?php echo $note->description; ?></td>
									<td><?php echo $note->created_date; ?></td>
									<td><a href="<?php echo url('/reminders/save/'.$note->id) ?>">Edit</a> | <a href="<?php echo url('reminders/remove/'.$note->id) ?>">Delete</a></td> 
								  </tr>
								  <?php  } ?>
							</table>
					 <?php } ?>
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