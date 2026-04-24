<!DOCTYPE html>

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
			<!--
				TODO:
				here (inside the comment), add prompts for the ever changing text.
				it should say something different every few seconds

				1. Look for a job that suits you
				2. Study in the city you dreamt of
				3. ...
				4. ...
				...
			-->
			<button id="goto-pick-cities" class="button">Get started</button>
		</div>
		<div id="pick-cities" class="page hidden">
			<h1>Pick cities you want to explore</h1>
			<!-- WARNING: might change in the future to dynamically add cards of cities entered -->
			<h2>Just type in the names of the cities you want to learn more about, separated by commas.</h2>
			<input type="text" id="search-cities" class="search-bar">
		</div>
		<!--
			TODO:
			add #pick-interests
			add #results
			-> as pages (.page.hidden)
			-> only add a <h1></h1> tag
		-->
		<!--
			TODO:
			add #area-best-cities
			add #city-best-areas
			-> as pages (.page.hidden)
			-> only add a <h1></h1> tag
		-->
	</main>
</body>
</html>
