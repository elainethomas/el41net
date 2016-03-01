<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>

		<!-- IE Rendering Mode = Edge-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
				crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
				crossorigin="anonymous"/>

		<!-- LOAD OUR CUSTOM STYLESHEET HERE!!!!! -->
		<link rel="stylesheet" href="el41netStyle.css"/>

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<title>EL41NET</title>
	</head>
	<body>
		<header class="page-header">
			<nav class="navbar navbar-inverse navbar-fixed-top" id="hello"> <!--use navbar-default for lighter bg-->
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<!--<h3>there used to be sumpin here</h3>  88 not sure if i want this here right now-->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							  data-target="#top-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-nav">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Hello</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#aboutMe">About Me</a></li>
						<li><a href="#contact">Let's Talk</a></li>
					</ul>
				</div>
			</nav>

			<!--jumbotron-->
			<div class="container">
				<div class="bg"></div>
				<div class="jumbotron">
					<h1><span class="jtron-h1">&lt;!-- Infinite Possibilities --></span></h1>
					<h2 class="jtron-h2">Elaine Thomas</h2>
					<h3 class="jtron-h3">Web Developer</h3>
					<p class="jtron-h4">design, code, implement, maintain</p>
				</div>
			</div>
		</header>
		<!-- end of jumbotron -->

		<main>
			<br>
			<br>

			<!--Portfolio - where I'll have screen shots of my websites mapped to live sites-->
			<!-- Page Header -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header"><span class="jtron-h2" id="portfolio">Portfolio</span><br>
							<small><a href="https://github.com/ethomas12">
									<span class="jtron-h3">My GitHub</span><img src="images/gitButn.png" alt="octoCat"
																							  id="lilKitty">
							</small>
						</h1>
					</div>
				</div>
				<br>
				<br>
				<!-- /row -->

				<!--tech toolbox progress bar-->
				<div class="container">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<h3 class="jtron-h3">My Tech Toolbox:</h3>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
									  aria-valuemin="0"
									  aria-valuemax="100" style="width:40%">
									mySQL
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
									  aria-valuemin="0"
									  aria-valuemax="100" style="width:40%">
									PHP 5.6 & 7.0
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20"
									  aria-valuemin="0"
									  aria-valuemax="100" style="width:20%">
									JavaScript
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40"
									  aria-valuemin="0"
									  aria-valuemax="100" style="width:40%">
									BootStrap
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
									  aria-valuemin="0"
									  aria-valuemax="100" style="width:70%">
									CSS3
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70"
									  aria-valuemin="0"
									  aria-valuemax="100" style="width:70%">
									HTML5
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
				<br>
				<br>
				<br>
				<!--end of tool box-->

				<!-- Projects Row 1-->
				<div class="row">
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Project One</a>
						</h3>
						<p>Coming Soon!</p>
					</div>
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Project Two</a>
						</h3>
						<p>Coming Soon!</p>
					</div>
				</div>
				<!-- /.row -->

				<!-- Projects Row 2-->
				<div class="row">
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Project Three</a>
						</h3>
						<p>Coming Soon!</p>
					</div>
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="images/siMonSiteLink.jpg"
								  alt="screencap of SiMonZon Bootstrap, JS Practice">
						</a>
						<h3>
							<a href="#">SiMonZon</a>
						</h3>
						<p>This was a fun afternoon practice project I created using JavaScript, HTML5, CSS3 and Bootstrap. I
							started it on the Plunker website and then moved to PhpStorm to complete it.</p>
					</div>
				</div>
			</div>
			<br>
			<br>
			<hr>
			<!-- /.row -->

			<!--About Me-->

			<div class="container" id="aboutMe">
				<h1 class="jtron-h2">About Me</h1>
				<h3 class="jtron-h3">I'm Elaine Thomas. I'm a Freelance Web Developer and..</h3>
			</div>
			<div class="container">
				<div class="row">

					<!--column 1a-->
					<div class="col-md-5">
						<img src="images/telecom.jpg" alt="me last day old job" class="myImages">
						<h4 class="jtron-h4">I Have A Solid Work History</h4>
						<p>
							Working in the telecom industry gave me a chance to learn snippets of proprietary programming
							languages but I yearned to learn more than online courses could teach me. I decided to make a
							career change and returned to school to learn web
							development.
						</p>
					</div>
					<div class="col-md-2"></div>

					<!--column 2a-->
					<div class="col-md-5">
						<img src="images/kittyPueblo.jpg" alt="Kitty Pueblo" class="myImages">
						<h4 class="jtron-h4">I Like Making Stuff</h4>
						<p>
							I enjoy the process of creation. Whether it's the art of baking a lovely loaf of bread or the
							technical specifications necessary to produce a papier-mâché pueblo for cats - there is always
							learning involved and (usually) joy in the results.
						</p>
					</div>
				</div>
				<div class="row">

					<!--column 1b-->
					<div class="col-md-5">
						<img src="images/gaming.jpg" alt="game group" class="myImages">
						<h4 class="jtron-h4">Gaming!</h4>
						<p>
							Cooperative gaming is my favorite game style. I relish gaming in several forms - online (most
							recently Destiny), tabletop (Ascension, Magic The Gathering, Fluxx), and pen & paper role playing
							games (Pathfinder). By no means is this all of the games I enjoy. I like to learn new games too.
						</p>
					</div>
					<div class="col-md-2"></div>

					<!--column 2b-->
					<div class="col-md-5">
						<img src="images/dance.jpg" alt="me at So Ya Think You Can Dance" class="myImages">
						<h4 class="jtron-h4">I <span class="glyphicon glyphicon-heart-empty"></span> to Dance</h4>
						<p>
							“‎Dancing is not just getting up painlessly, like a leaf blown on the wind; dancing is when you
							tear your heart out and rise out of your body to hang suspended between the worlds.” ~Rumi
						</p>
					</div>
				</div>
			</div>
			<br>
			<br>
			<hr>

			<!-- Beginning of contact page contact form template from DDCB -->

			<!-- The div class="form-wrap" is the black box containing the form. It's set to a column width of 12 for small screens, and a column width of 6 for medium screens on up -->

			<br>
			<div class="container">
				<h2 class="jtron-h2" id="contact">Let's Talk</h2>
				<div class="col-xs-12 col-md-7 form-wrap">
					<!-- Form is centered within it's container, and is set to 10 be columns wide RELATIVE TO IT'S CONTAINER, and offset to the right by one column. See classes: col-xs-offset-1 & col-xs-10 -->
					<form method="get" action="#" id="sample-form" class="form-horizontal col-xs-10 col-xs-offset-1">

						<div class="form-group">
							<!-- Labels for each field are places within a <label> tag. Use the "for" attribute. the class="control-label" is for styling. -->
							<label for="inputName1" class="control-label">Name</label>
							<!-- the div class="input-group" contains both the text field and the icon to the left -->
							<div class="input-group">
								<!-- this div and span contains the glyphicon to the left. aria-hidden is so that screen readers don't read this element -->
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								</div>
								<!-- text field input. pay attention to the id, placeholder text, type, and placeholder attributes -->
								<input type="text" class="form-control" id="textName1" placeholder="Your name here."
										 maxlength="150"/>
							</div>
						</div>

						<div class="form-group">
							<label for="email1" class="control-label">Email</label>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</div>
								<input type="email" id="email1" class="form-control" maxlength="150"
										 placeholder="your.email@something.com"/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label">I'm available for freelance work, are you interested in:</label>
							<!-- use div class="help-block" to explain the form content -->
							<div class="help-block">Please check all that apply.</div>
							<div class="checkbox">
								<label class="checkbox">
									<!-- name value contains square brackets which makes it easy to create an array on the back end in php -->
									<input id="chkFavoritesKittens" name="chkFavorites[]" type="checkbox" value="Kittens"/>Personal
									Website
								</label>
								<label class="checkbox">
									<input id="chkFavoritesRainbows" name="chkFavorites[]" type="checkbox" value="Rainbows"/>Business
									Website
								</label>
								<label class="checkbox">
									<input id="chkFavoritesPuppies" name="chkFavorites[]" type="checkbox" value="Puppies"/>Database
									Development, Testing, Maintenance
								</label>
								<label class="checkbox">
									<input id="chkFavoritesUnicorns" name="chkFavorites[]" type="checkbox" value="Unicorns"/>Collaboration
								</label>
								<!--								<label class="checkbox">-->
								<!--									<input id="chkFavoritesCthulhu" name="chkFavorites[]" type="checkbox" value="Cthulhu"/>Cthulhu-->
								<!--								</label>-->
							</div>
						</div>

						<!--comment box-->
						<div class="form-group">
							<label class="control-label" for="txtareaComments">Questions or Comments?</label>
						<textarea class="form-control" rows="5" id="txtareaComments" maxlength="500"
									 placeholder="500 characters max."></textarea>
						</div>

						<div class="form-group">
							<!-- the following <a> tag has been styled as a button with class="btn" -->
							<a id="reset-form" class="btn" role="button">Reset Form</a>
							<button type="submit" class="btn">Submit</button>
						</div>
					</form>
				</div>
			</div>
			<!-- CLOSE FORM WRAP -->
	</body>
</html>
