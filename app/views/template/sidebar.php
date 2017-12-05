<div class="sidebar">

	<?php if(userType('admin') || userType('manager') ){ ?>
	<h3>Users</h3>
	<ul>
		<li><a href="<?php echo url('user') ?>">user</a></li>
		<?php if(userType('admin')){ ?>
		<li><a href="<?php echo url('user/save') ?>">User Create</a></li>
		<?php } ?>
	</ul>
	
	<h3>Reports</h3>
	<ul>
		<li><a href="<?php echo url('reports') ?>">Reports</a></li>
		<li><a href="<?php echo url('reports/joins') ?>">Reports 2</a></li>
	</ul>
	<?php } ?>
	
	<h3>Reminders</h3>
	<ul>
		<li><a href="<?php echo url('reminders') ?>">View All Reminder</a></li>
		<li><a href="<?php echo url('reminders/save') ?>">Create New Reminder</a></li>
	</ul>
	
</div>
 