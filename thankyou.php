<!DOCTYPE html>
<html>
<head>
	<title>Thank You for Contacting Us!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body {
			font-family: Arial, sans-serif;
			text-align: center;
			background-color: #f7f7f7;
		}
		h1 {
			color: #333;
			margin-top: 50px;
		}
		p {
			font-size: 18px;
			color: #666;
			margin-top: 30px;
		}
		.button {
			background-color: #01007D;
			border: none;
			color: white;
			padding: 12px 24px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin-top: 30px;
			cursor: pointer;
			border-radius: 4px;
		}
		.success {
			color: green;
			font-weight: bold;
			margin-top: 30px;
		}
		.failure {
			color: red;
			font-weight: bold;
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<h1>Thank You for Contacting Us!</h1>
	<?php
		if (isset($_GET['success'])) {
			if ($_GET['success'] == 'true') {
				echo '<p class="success">Your message was successfully sent.</p>';
			} else {
				echo '<p class="failure">There was a problem sending your message. Please try again later.</p>';
			}
		}
	?>
	<p>We appreciate you reaching out to us. We have received your message and will get back to you as soon as possible.</p>
	<a href="LADmach1.html" class="button">Back to Home</a>
</body>
</html>
