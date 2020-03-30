<?php
	define("TITLE", "Henkilöstö | Ottopojat");
	
	include('header.php');
?>
	
	<div id="team-members" class="cf">
	
		<h1>Ottopojat</h1>
		<p><strong>Me teemme Sinulle parasta mättöä, ever!</strong></p>
		
		<hr>
		
		<?php foreach ($teamMembers as $member) { ?>
			
			<div class="member">
				<img src="img/<?php echo $member["img"]; ?>.jpg" alt="<?php echo $member["name"]; ?>">
				<h2><?php echo $member["name"]; ?></h2>
				<p><?php echo $member["bio"]; ?></p>
			</div><!-- member -->
		
		<?php } ?>
		
	</div><!-- team-members -->
	
	<hr>
			
<?php include('footer.php'); ?>
