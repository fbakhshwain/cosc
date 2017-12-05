<?php
	include 'template/header.php';	
 
		$id = '';
		$subject = '';
		$description = '';
		
		if($note){
			$id = $note->id;		
			$subject = $note->subject;		
			$description = $note->description;		
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
				<h2><?php echo isset($id) ? 'Update Reminder' : 'Create Reminder' ?></h2>
				<div class="tlFull">
					<label>Reminder Subject</label>
					<input type="text" name="subject"  value="<?php echo $subject; ?>" placeholder="Reminder Subject">
					<?php if(isset($errors['subject'])){ ?>
					<span><?php echo $errors['subject'] ?></span>
					<?php }?>
				</div>
				<div class="tlFull">
					<label>Reminder Description</label>
					<input type="text" name="description" value="<?php  echo $description; ?>" placeholder="Reminder Description">
					<?php if(isset($errors['description'])){ ?>
					<span><?php echo $errors['description'] ?></span>
					<?php }?>
				</div>
				<div class="tlFull">
					<button type="submit" name="newNote" class="tlSubmit"><?php echo isset($id) ? 'Update Reminder' : 'Create Reminder' ?></button>
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