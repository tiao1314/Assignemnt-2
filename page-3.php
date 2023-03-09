<?php
include 'includes/include.php';
?>

<!DOCTYPE HTML> 
<html>
<head>
	<title>Contact us</title>
</head>
<body>
	<h1>Contact us</h1>
	<form method="POST" name="contactform" action="contact-form-handler.php" class="contact-form">
 
		<p>
			<label for='name'>Your Name:<span class="required">*</span></label> <br>
			<input type="text" name="name">
		</p>
		<p>
			<label for='email'>Email Address:<span class="required">*</span></label> <br>
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
			<label for='message'>Message:<span class="required">*</span></label> <br>
			<textarea name="message"></textarea>
		</p>
		<p>
			<label for='file'>Attachment:</label> <br>
			<input type="file" name="attachment">
		</p>

		<p class="required-text">* Required fields</p>

		<input type="submit" value="Submit"><br>
	</form>

	<!-- Display the confirmation message if the form has been submitted-->


	</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <footer>
    <p>&copy; <?php echo date("Y"); ?> Games Database, Inc.</p>
</footer>
  </body>
</html>

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
	<footer class="bg-dark text-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum euismod, ante in bibendum semper, risus felis efficitur sapien, eget venenatis ipsum mauris sed nisi.</p>
      </div>
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <ul class="list-unstyled">
          <li>1234 Main St.</li>
          <li>DKIT, Z2 12345</li>
          <li>Phone: (555) 555-5555</li>
          <li>Email: info@gamesdatabase.com</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Connect With Us</h5>
        <ul class="list-unstyled">
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">LinkedIn</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="text-center">
      <p>&copy; <?php echo date("Y"); ?> Games Database, Inc.</p>
    </div>
  </div>
</footer>
</body>
</html>


