<?php
	define("TITLE", "Menu | Ottopoika");
	
	include('header.php');
?>
	
	<div id="menu-items">
	
		<h1>Herkullinen ruokalistamme</h1>
		<p>Kuten henkilöstömme niin myös ruokalistamme on kompakti &mdash; mutta sitäkin jykevämpi!</p>
		<p><em>Klikkaamalla listan ruokia saat lisätietoa annoksesta.</em></p>
		
		<hr>
		
		<ul>
			<?php foreach ($menuItems as $dish => $item) { ?>
				
				<li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a>  € <?php echo $item["price"]; ?></li>
			
			<?php } ?>
		</ul>
		
	</div>
	
	<hr>
			
<?php include('footer.php'); ?>
