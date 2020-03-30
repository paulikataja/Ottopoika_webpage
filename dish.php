<?php
	
	define("TITLE", "Menu | Ottopoika");
	
	include('header.php');
	
	// Strip bad characters function

	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
	if(isset($_GET['item'])) {
		$menuItem = strip_bad_chars( $_GET['item'] );
		$dish = $menuItems[$menuItem];
	}
	
	
?>
	
	<hr>
	
	<div id="dish">
	
		<h1><?php echo $dish["title"]; ?> <span class="price">€<?php echo $dish["price"]; ?></span></h1>
		<p><?php echo $dish["blurb"]; ?></p>
		<br>
		<p><strong>Sopiva juoma: <?php echo $dish["drink"]; ?></strong></p>
		
	</div>
	
	<hr>
	
	<a href="menu.php" class="button previous">&laquo;Takaisin</a>
			
<?php include('footer.php'); ?>
