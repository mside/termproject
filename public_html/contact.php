
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>VANARTS STUDENT MOCK PROJECT</title>
	<meta name="description" content="This is a student exercise website for the Vancouver Institute of Media Arts (www.vanarts.com)">
	<link rel="icon" type="image/png"  href="favicon.png">
<!-- CSS -->
	<link href="css/foundation/foundation.css" rel="stylesheet" type="text/css">
  <link href="css/foundation/normalize.css" rel="stylesheet" type="text/css">
	<script src="https://use.fontawesome.com/347ac4646f.js"></script>
	<link href="css/main.css" media="screen, projector, print" rel="stylesheet" type="text/css">
<!-- modernizr -->
  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<!-- NAV PARTIAL -->
	<?php include "partials/header.php"; ?>
<!-- NAV PARTIAL -->
	<div class="title-tag">
		<h1>Contact Me</h1>
	</div>
	<div class="content-full-width">
		<div class="content-container row">
			<div class="large-offset-1 large-3 columns">
				<label class="contact-label">Full Name</label>
				<input type="text" name="fullName">
				<label class="contact-label top-spacing">Email Address</label>
				<input type="text" name="email">
			</div>
			<div class="large-6 columns">
				<label class="contact-label">Comments</label>
				<textarea class="contact-text" name="comments"></textarea>
			</div>
			<div class="large-1 columns"></div>
		</div>
		<div class="content-container row">
			<div class="large-offset-1 large-12 columns">
				<h4>Or contact me at mauropinedo@gmail.com</h4>
				<input class="submit-form" type="submit" name="submit" value="Submit">
			</div>
		</div>
	</div>
<!-- FOOTER PARTIAL -->
	<?php include "partials/footer.php"; ?>
<!-- FOOTER PARTIAL -->
</body>
</html>
