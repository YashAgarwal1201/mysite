
<!DOCTYPE html>

<html lang="en">
 <!-- page information -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yash Agarwal</title>
	<noscript><meta http-equiv="refresh" content="2; URL=https://www.google.com/"></noscript>
	<link href="https://yashagarwal.epizy.com/" rel="canonical">
	<link rel="icon" type="image/icon type" href="Images/YA3.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral|Rubik">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="" id="mainCSS1">
	<link rel="stylesheet" type="text/css" href="" id="mainCSS2">
</head>

<body id="mainBody">
	<noscript>
		<h1>Please Enable Javascript</h1>
	</noscript>
	<!-- Main Navigation Section -->
	<section>
		<?php include "topnav.html"; ?>
	</section>
	<!-- Content Section -->
	<section>
		<div class="home" id="home">
			<?php include "home.html"; ?>
		</div>
		<div class="bio" id="bio">
			<?php include "bio.html"; ?>
		</div>
		<div class="work" id="work">
			<?php include "work.html"; ?>
		</div>
	</section>
	<section class="blank"></section>
	<!-- Feedback Section -->
	<section>
		<?php include "feedback.html"; ?>
	</section>
	<section class="blank"></section>
	<script id="script1">
		$(document).ready( function () {
			$.ajaxSetup({cache: false});
			$.ajax({
				type: 'POST',
				url: 'main PHP files/imagesSrc.php',
				dataType: 'json',
				data: { folder: 'script1' },
				success: function (argument) {
					let varible = document.createElement('script');
					varible.src = argument.a;
					let src = document.getElementById('script1');
					src.appendChild(varible);
					$('#mainCSS1').prop('href', argument.b);

					varible = document.createElement('script');
					varible.src = argument.c;
					src.appendChild(varible);
				}
			});
		});
	</script>
	<script async src="https://static.addtoany.com/menu/page.js"></script>
</body>
</html>