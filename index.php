<?php
session_start();
 include_once 'header.php';
?>
	<section class="main-container">
		<div class="main-wrapper">
			<h2>Home</h2>
		</div>
	</section>
<?php
echo $_SESSION['respodMSG'];
 include_once 'footer.php';
?>
