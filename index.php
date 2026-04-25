<!DOCTYPE html>
<!--
	COLORS:
	Golden blodne  #fbe7a1 -> cards
	Pearl white #f8f6f0 -> general
	Earth blue #23b3be -> side menu, titles
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
		<button id="nav-edu" lab>
			<img src="./icons/education-2.svg"></img>
		</button>
		<button id="nav-work">
			<img src="./icons/work-2.svg"></img>
		</button>
		<button id="nav-travel">
			<img src="./icons/travel-2.svg"></img>
		</button>
		<div class="empty"></div>
		<button id="nav-info">
			<img src="./icons/info-2.svg"></img>
		</button>
	</nav>

	<main id="content">
		<div id="home" class="page">
			<h1>Ready to check out a new city?</h1>
			<div class="empty"></div>
			<h2 id="home-message">Ever changing text.</h2>
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

	<script src="./scripts/index.js"></script>
	<script src="./scripts/nav.js"></script>
	<script src="./scripts/home-page.js"></script>
</body>
</html>
