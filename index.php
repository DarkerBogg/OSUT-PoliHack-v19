<!DOCTYPE html>
<!-- 
Golden blodne  #FBE7A1 -> cards
Pastel indigo #8686AF -> side menu
Pearl white #f8f6f0 -> general 
-->

<!-- <html lang="en"> -->
<html>
<head>
	<!-- WARNING: add a name later -->
	<title>[namespace]</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="./css/index.css">
	<link rel="stylesheet" href="./css/nav.css">
	<link rel="stylesheet" href="./css/content.css">
</head>
<body>
	<nav id="nav">
		<!-- <div><button id="nav-menu">Menu</button></div>
		<div><button id="nav-edu">Education</button></div>
		<div><button id="nav-work">Work</button></div>
		<div><button id="nav-travel">Travel</button></div>
		<div class="empty"></div>
		<div><button id="nav-info">Info</button></div> -->

		<button id="nav-menu">Menu</button>
		<button id="nav-edu">Education</button>
		<button id="nav-work">Work</button>
		<button id="nav-travel">Travel</button>
		<div class="empty"></div>
		<button id="nav-info">Info</button>
	</nav>
	<main id="content">
		<div id="home" class="page">
			<h1>Ready to check out a new city?</h1>
			<h2>Ever changing text.</h2>
			<div class="empty"></div>
			<!--
				"Look for a job that suits you ?"
				"You do not find the happy life. You make it."
				"Study in the city you dream of"
				"An investment in knowledge pays the best interest."
				"Nothing is impossible. The word itself says: I'm possible!" 
			-->
			<button id="goto-pick-cities" class="button">Get started</button>
			<div class="empty"></div>
		</div>
		<div id="pick-cities" class="page hidden">
			<h1>Pick cities you want to explore</h1>
			<!-- WARNING: might change in the future to dynamically add cards of cities entered -->
			<h2>Just type in the names of the cities you want to learn more about, separated by commas.</h2>
			<input type="text" id="search-cities" class="search-bar">
		</div>
		<div id="pick-interests" class="page hidden"> 
			<h1></h1>
		</div>
		<div id="results" class="page hidden"> 
			<h1></h1>
		</div>
		<div id="interest-best-cities" class="page hidden"> 
			<h1></h1>
		</div>
		<div id="city-best-interests" class="page hidden"> 
			<h1></h1>
		</div>
	</main>
	<video autoplay muted loop id="background">
		<source src="./backgrounds/globe-whole.mp4" type="video/mp4">
	</video>
</body>
</html>
