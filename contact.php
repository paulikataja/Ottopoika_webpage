<?php
	define("TITLE", "Ota yhteyttä | Ottopojat");
	
	include('header.php');
	
	
	
?>

	<div id="contact">
		<hr>
		
		<h1>Ota yhteyttä!</h1>
		

		<?php
	
		// Check for Header Injections
		function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
		
		
		if (isset($_POST['contact_submit'])) {
			
			// Assign trimmed form data to variables
			// Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
			$name	= trim($_POST['name']);
			$email	= trim($_POST['email']);
			$msg	= $_POST['message']; // no need to trim message
		
			// Check to see if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email)) {
				
				die(); 
				
			}
			
			if (!$name || !$email || !$msg) {
				echo '<h4 class="error">Kaikki kentät täytettävä</h4><a href="contact.php" class="button block">Yritä uudestaan</a>';
				exit;
			}
			
			// Add the recipient email to a variable
			$to	= "pauli.kataja@edu.omnia.fi";
			$name="";
			// Create a subject
			$subject = "$name sent a message via your contact form";
			
			// Construct the message
			$message .= "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$msg";
			
			// If the subscribe checkbox was checked
			if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {
			
				// Add a new line to the $message
				$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
				
			}
		
			$message = wordwrap($message, 72); // Keep the message neat n' tidy
		
			// Set the mail headers into a variable
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
		
			
			// Send the email!
			//mail($to, $subject, $message, $headers);   //ei ole mail-serveriä
		?>
		
		<!-- Show success message after email has sent -->
		<h5>Kiitos yhteydenotosta!</h5>
		<p>Otamme yhteyttä 24 tunnin kuluessa.</p>
		
			
			
		<?php
			} else {
		?>

		<form method="post" action="" id="contact-form">
			<label for="name">Nimi</label>
			<input type="text" id="name" name="name">
			
			<label for="email">Sähköposti</label>
			<input type="email" id="email" name="email">
			
			<label for="message">Viestisi</label>
			<textarea id="message" name="message"></textarea>
			
			<input type="checkbox" id="subscribe" value="Subscribe" name="subscribe"> <label for="subscribe">Tilaa uutiskirje</label>
			
			<input type="submit" class="button next" name="contact_submit" value="Lähetä">
		</form>
		
		<?php
			}
		?>
		<hr>
	</div><!-- contact -->
			
<?php include('footer.php'); ?>
