<?php
$title = "Food from the world";
$tags = ["Miami","New York","Dinner","Pescao","France","Drinks","Ideas","Flavors","Cuisine","Chicken","Dressing","Fried","Fish","Duck"];
$food = [
	[
		"id" => "1",
		"image" => "https://www.w3schools.com/w3images/sandwich.jpg",
		"alt" => "Sandwich",
		"title" => "The Perfect Sandwich, A Real NYC Classic",
		"desc" => "Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "2",
		"image" => "https://www.w3schools.com/w3images/steak.jpg",
		"alt" => "Steak",
		"title" => "Let Me Tell You About This Steak",
		"desc" => "Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "3",
		"image" => "https://www.w3schools.com/w3images/cherries.jpg",
		"alt" => "Cherries",
		"title" => "Cherries, interrupted",
		"desc" => "Lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "4",
		"image" => "https://www.w3schools.com/w3images/wine.jpg",
		"alt" => "Pasta and Wine",
		"title" => "Once Again, Robust Wine and Vegetable Pasta",
		"desc" => "Lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "5",
		"image" => "https://www.w3schools.com/w3images/popsicle.jpg",
		"alt" => "Popsicle",
		"title" => "All I Need Is a Popsicle",
		"desc" => "Lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "6",
		"image" => "https://www.w3schools.com/w3images/salmon.jpg",
		"alt" => "Salmon",
		"title" => "Salmon For Your Skin",
		"desc" => "Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "7",
		"image" => "https://www.w3schools.com/w3images/sandwich.jpg",
		"alt" => "Sandwich",
		"title" => "The Perfect Sandwich, A Real Classic",
		"desc" => "Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum."
	],
	[
		"id" => "8",
		"image" => "https://www.w3schools.com/w3images/croissant.jpg",
		"alt" => "Croissant",
		"title" => "Le French",
		"desc" => "Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum."
	]
];
?>


<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
		.w3-bar-block .w3-bar-item {padding:20px}
	</style>
</head>
<body>
	<!-- Sidebar (hidden by default) -->
	<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
		<a href="javascript:void(0)" onclick="w3_close()"
		class="w3-bar-item w3-button">Close Menu</a>
		<a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
		<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
	</nav>

	<!-- Top menu -->
	<div class="w3-top">
		<div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
			<div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
			<div class="w3-center w3-padding-16"><?= $title ?></div>
		</div>
	</div>
		
	<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
		<!-- Photo Grid-->
		<div class="w3-row-padding w3-padding-16 w3-center" id="food">


		<?php foreach($food as $quarter) { ?>
			<div class="w3-quarter">
				<img src="<?= $quarter["image"] ?>" alt="<?= $quarter["alt"]?>" style="width:100%">
				<h3><?= $quarter["title"]?></h3>
				<p><?= $quarter["desc"]?></p>
			</div>
		<?php } ?>



					</div>

		<hr id="about">

		<!-- About Section -->
		<div class="w3-container w3-padding-32 w3-center">	
			<h3>About Me, The Food Man</h3><br>
			<img src="https://www.w3schools.com/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
			<div class="w3-padding-32">
				<h4><b>I am Who I Am!</b></h4>
				<h6><i>With Passion For Real, Good Food</i></h6>
				<p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
			</div>
		</div>
		<hr>

		<!-- Footer -->
		<footer class="w3-row-padding w3-padding-32">
			<div class="w3-third">
				<h3>ABOUT ME</h3>
				<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
			</div>
		
			<div class="w3-third">
				<h3>SOCIAL LINKS</h3>
				<a href="#">Facebook</a><br>
				<a href="#">Twitter</a><br>
				<a href="#">Instagram</a><br>
				<a href="#">GitHub</a><br>
			</div>

			<div class="w3-third w3-serif">
				<h3>POPULAR TAGS</h3>
				<p>
					<?php foreach($tags as $tag) { ?>
						<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom"><?= $tag ?></span>
					<?php } ?>
				</p>
			</div>
		</footer>
	<!-- End page content -->
	</div>

	<script>
		// Script to open and close sidebar
		function w3_open() {
			document.getElementById("mySidebar").style.display = "block";
		}
		 
		function w3_close() {
			document.getElementById("mySidebar").style.display = "none";
		}
	</script>
</body>
</html>
