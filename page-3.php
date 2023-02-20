<?php
include 'includes/include.php'
?>
<!DOCTYPE HTML> 
<html>
<head>
	<title>Contact us</title>
	<!-- define some style elements-->
	<style>
		h1 {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 16px;
			font-weight: bold;
		}
		label, a {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 12px; 
		}
	</style>	
</head>
<body>
	<h1>Contact us</h1>
	<form method="POST" name="contactform" action="contact-form-handler.php"> 
		<p>
			<label for='name'>Your Name:</label> <br>
			<input type="text" name="name">
		</p>
		<p>
			<label for='email'>Email Address:</label> <br>
			<input type="text" name="email"> <br>
		</p>
		<p>
			<label for='telephone'>Telephone:</label> <br>
			<input type="tel" name="telephone"> <br>
		</p>
		<p>
			<label for='company'>Company:</label> <br>
			<input type="text" name="company"> <br>
		</p>
		<p>
			<label for='subject'>Subject:</label> <br>
			<input type="text" name="subject"> <br>
		</p>
		<p>
			<label for='country'>Country:</label> <br>
			<input type="text" name="country"> <br>
		</p>
		<p>
			<label for='message'>Message:</label> <br>
			<textarea name="message"></textarea>
		</p>
		<input type="submit" value="Submit"><br>
	</form>

	<script language="JavaScript">
	var frmvalidator  = new Validator("contactform");
	frmvalidator.addValidation("name","req","Please provide your name"); 
	frmvalidator.addValidation("email","req","Please provide your email"); 
	frmvalidator.addValidation("email","email","Please enter a valid email address"); 
	frmvalidator.addValidation("telephone","req","Please provide your telephone number"); 
	frmvalidator.addValidation("telephone","minlen=10","Please enter a valid telephone number"); 
	frmvalidator.addValidation("company","req","Please provide your company name"); 
	frmvalidator.addValidation("subject","req","Please provide a subject for your message"); 
	frmvalidator.addValidation("country","req","Please provide your country name"); 
	frmvalidator.addValidation("message","req","Please provide a message"); 
</script>

</body>
</html>