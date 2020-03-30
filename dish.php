<?php
	
	define("TITLE", "Menu | Ottopoika");
	
	include('header.php');
	
	// Strip bad characters function
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
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
		<p><strong>SSopiva juoma: <?php echo $dish["drink"]; ?></strong></p>
		
	</div><!-- dish -->
	
	<hr>
	
	<a href="menu.php" class="button previous">&laquo;Takaisin</a>
			
<?php include('footer.php'); ?>
