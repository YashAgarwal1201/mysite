
<!DOCTYPE html>

<html lang="en">
 <!-- page information -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yash Agarwal</title>
	<noscript><meta http-equiv="refresh" content="2; URL=https://www.google.com/"></noscript>
	<link href="https://agarwalyash.epizy.com/" rel="canonical">
	<link rel="icon" type="image/icon type" href="YA Logo.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="" id="mainCSS1">
	<link rel="stylesheet" type="text/css" href="" id="mainCSS2">
</head>

<body id="mainBody">
	<noscript>
		<h1>Please Enable Javascript</h1>
	</noscript>
	<!-- Content -->
	<div style="width: 100%; display: flex; flex-flow: row wrap; align-items: flex-start; align-items: flex-start;">
		<!-- Main Navigation Section -->
		<section class="nav1" id="nav1">
			<?php include "topnav.html"; ?>
		</section>
		<!-- Content Section -->
		<section style="width: 90%; margin-left: auto; margin-right: auto; display: flex; flex-flow: row-reverse wrap; align-items: space-around; justify-content: center;">
			<!-- Home -->
			<div class="home" id="home">
				<?php include "home.html"; ?>
			</div>
			<!-- Bio -->
			<div class="bio" id="bio">
				<?php include "bio.html"; ?>
			</div>
			<!-- Work -->
			<div class="work" id="work">
				<?php include "work.html"; ?>
			</div>
			<!-- Feedback -->
			<div class="feedback" id="feedback">
				<?php include "feedback.html"; ?>
			</div>
		</section>
	</div>
	<div class="blank"></div>
	<!-- Script to add Script -->
	<script id="script1">
		$(document).ready( function () {
			$.ajaxSetup({cache: false});
			$.ajax({
				type: 'POST',
				url: 'main PHP files/imagesSrc.php',
				dataType: 'json',
				data: { folder: 'script1' },
				success: function (argument) {
					//alert(9);
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