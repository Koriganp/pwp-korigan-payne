<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/
// include the appropriate number of dirname() functions
// on line 8 to correctly resolve your directory's path
require_once(dirname(dirname(__DIR__)) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>

<!DOCTYPE html>
<html lang="en-US">
	<head>

		<!-- Metadata -->

		<meta charset="utf-8"/>
		<meta name="viewport" content="width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta name="author" content="Korigan Payne"/>
		<meta name="description" content="Personal website of the Albuquerque web developer Korigan Payne, featuring skills in web design and photography, as well as contact page."/>

		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"/>

		<!-- Google Fonts -->

		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"/>

		<!-- Font Awesome -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

		<!-- Animate.css -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

		<!-- My CSS -->

		<link href="<?php echo $PREFIX;?>styles/main.css" rel="stylesheet"/>

		<!-- jQuery, Popper.js, Bootstrap JS -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- JavaScript Form Validator File -->

		<script src="<?php echo $PREFIX;?>js/form-validate.js" type="text/javascript"></script>

		<!-- Google reCAPTCHA -->

		<script src="https://www.google.com/recaptcha/api.js"></script>

		<!-- Waypoints -->

		<script src="<?php echo $PREFIX;?>js/jquery.waypoints.min.js"></script>

		<!-- My Favicon -->

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $PREFIX;?>images/favicon/apple-touch-icon.png"/>
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $PREFIX;?>images/favicon/favicon-32x32.png"/>
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $PREFIX;?>images/favicon/favicon-16x16.png"/>
		<link rel="manifest" href="<?php echo $PREFIX;?>images/favicon/manifest.json"/>
		<link rel="mask-icon" href="<?php echo $PREFIX;?>images/favicon/safari-pinned-tab.svg" color="#5bbad5"/>
		<meta name="theme-color" content="#ffffff"/>

		<!-- For Google Analytics -->

		<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Person",
			"name": "Korigan Payne",
			"jobTitle": "Web Developer",
			"image" : "https://www.koriganpayne.com/images/profile.jpg",
			"address": {
				"@type" : "PostalAddress",
				"addressLocality": "Albuquerque"
			},
			"url": "https://koriganpayne.com",
			"sameAs" : ["https://twitter.com/KoriganP?lang=en",
			"https://github.com/Koriganp",
			"https://www.linkedin.com/in/korigan-payne-0570066b"]
		}
		</script>

		<!-- For Search Engine Optimization -->

		<meta name="msvalidate.01" content="B580EDB9DDB6265064064D986A593D53" />

		<!-- echo the $PAGE_TITLE variable here -->

		<title><?php echo $PAGE_TITLE;?></title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">