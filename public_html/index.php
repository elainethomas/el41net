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
						<li><a href="#hello">Hello<span class="sr-only">(current)</span></a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#aboutMe">About Me</a></li>
						<li><a href="#contact">Let's Talk</a></li>
					</ul>
				</div>
			</nav>

			<!--jumbotron-->
			<div class="container" id="hello">
				<div class="bg"></div>
				<div class="jumbotron">
					<h1><span class="jtron-h1">&lt;!-- Infinite Possibilities --></span></h1>
					<h2 class="jtron-h2">Elaine Thomas</h2>
					<h3 class="jtron-h3">Web Developer</h3>
					<p class="jtron-h4">design, code, implement, maintain</p>
				</div>
			</div>
			<br>
		</header>
		<main>
			<br id="portfolio">
			<br>

			<!--Portfolio - where I'll have screen shots of my websites mapped to live sites and has hover abilities.-->
			<!-- Page Header -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header"><span class="jtron-h2">Portfolio</span><br>
							<small><a href="https://github.com/ethomas12">
									<span class="jtron-h3">My GitHub</span><img src="images/gitButn.png" alt="octoCat"
																							  id="lilKitty">
							</small>
						</h1>
					</div>
				</div>
				<!-- /row -->

				<!-- Projects Row 1-->
				<div class="row">
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Project One</a>
						</h3>
						<p>Hey! I'm a porno-dealing monster, what do I care what you think? Why would I want to know that?
							Oh sure! Blame the wizards! These old Doomsday Devices are dangerously unstable. This opera's as
							lousy as it is brilliant! Your lyrics lack subtlety.
						</p>
					</div>
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Project Two</a>
						</h3>
						<p>Man, I'm sore all over. I feel like I just went ten rounds with mighty Thor. Are you crazy? I
							can't swallow that. I'll rest easier not knowing where they are. And yet you haven't said what I
							told you to say! How can any of us trust you?</p>
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
						<p>Morbo will now introduce tonight's candidates… PUNY HUMAN NUMBER ONE, PUNY HUMAN NUMBER TWO, and
							Morbo's good friend, Bernie Sanders. You, a bobsledder!? We'll go deliver this crate like
							professionals, and then we'll go home.</p>
					</div>
					<div class="col-md-6 portfolio-item">
						<a href="#">
							<img class="img-responsive" src="http://placehold.it/700x400" alt="">
						</a>
						<h3>
							<a href="#">Project Four</a>
						</h3>
						<p>Perhaps, but perhaps your civilization is merely the sewer of an even greater society above you!
							Ooh, name it after me! I'm Santa Claus! I love this planet! I've got wealth, fame, and access to
							the depths of sleaze that those things bring. It's toe-tappingly tragic! </p>
					</div>
				</div>
			</div>
			<br>
			<br>
			<hr>
			<!-- /.row -->

			<!--About Me-->

			<br id="aboutMe">
			<br>
			<div class="container">
				<h1 class="jtron-h2">About Me</h1>
<!--				<h3 class="jtron-h3">Have secret plans</h3>-->
			</div>

			<!--tech toolbox progress bar-->
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<h2 class="jtron-h2">My Tech Toolbox:</h2>
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
								  aria-valuemin="0"
								  aria-valuemax="100" style="width:40%">
								mySQL
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0"
								  aria-valuemax="100" style="width:40%">
								PHP
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
								  aria-valuemin="0"
								  aria-valuemax="100" style="width:60%">
								CSS
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60"
								  aria-valuemin="0"
								  aria-valuemax="100" style="width:60%">
								HTML
							</div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
			</div>

			<div class="container">
				<div class="row">
<!--					<div class="col-md-1"></div>-->
<!--column 1-->
					<div class="col-md-3">
						<p>
							Cat is love, cat is life pooping rainbow while flying in a toasted bread costume in space lick the
							plastic bag. Kick up litter stares at human while pushing stuff off a table, claws in your leg. Rub
							face on everything lick arm hair put toy mouse in food bowl run out of litter box at full speed
						</p>
						<img src="images/profile.jpg" alt="me last day old job" class="myImages">
					</div>
						<div class="col-md-1"></div>

					<!--column 2-->
					<div class="col-md-3">
						<img src="images/dance.jpg" alt="me at So Ya Think You Can Dance" class="myImages">
						<p>
							walk on car leaving trail of paw prints on hood and windshield. Throwup on your pillow sleep on
							keyboard get
							video posted to internet for chasing red dot yet sun bathe. Leave fur on owners clothes see owner,
							run in
						</p>
					</div>
							<div class="col-md-1"></div>

					<!--column 3-->
					<div class="col-md-3">
						<img src="images/kittyPueblo.jpg" alt="Kitty Pueblo" class="myImages">
						<p>
							kitty power! Attack the dog then pretend like nothing happened give attitude, yet scamper yet eat a
							plant,
							kill a hand intently sniff hand. Chase after silly colored fish toys around the house damn that dog
							or
							brown cats with pink ears for put toy mouse in food bowl run out of litter box at full speed ,
							leave dead
							animals as gifts lounge in doorway.
						</p>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<hr>

			<!--TODO: add the rest of the contact content			-->

			<h2 id="contact">Let's Talk</h2>
			<!--contact form template-->
			<!-- The div class="form-wrap" is the black box containing the form. It's set to a column width of 12 for small screens, and a column width of 6 for medium screens on up -->
			<div class="container">
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
							<label class="control-label">I am interested in:</label>
							<!-- use div class="help-block" to explain the form content -->
							<div class="help-block">Please check all that apply.</div>
							<div class="checkbox">
								<label class="checkbox">
									<!-- name value contains square brackets which makes it easy to create an array on the back end in php -->
									<input id="chkFavoritesKittens" name="chkFavorites[]" type="checkbox" value="Kittens"/>Web
									Development
								</label>
								<label class="checkbox">
									<input id="chkFavoritesPuppies" name="chkFavorites[]" type="checkbox" value="Puppies"/>Database
								</label>
								<label class="checkbox">
									<input id="chkFavoritesRainbows" name="chkFavorites[]" type="checkbox" value="Rainbows"/>Kitties
								</label>
								<label class="checkbox">
									<input id="chkFavoritesUnicorns" name="chkFavorites[]" type="checkbox" value="Unicorns"/>Puppies
								</label>
								<label class="checkbox">
									<input id="chkFavoritesCthulhu" name="chkFavorites[]" type="checkbox" value="Cthulhu"/>Cthulhu
								</label>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label" for="txtareaComments">Have More to Say?</label>
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
