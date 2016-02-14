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
		<link rel="stylesheet" href="style.css"/>

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

		<title>el41net</title>
	</head>
	<body>
			<header class="page-header">

					<nav class="navbar navbar-default"> <!--use navbar-inverse for darker bg-->

						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<h3></h3>
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
									<li><a href="#">Hello<span class="sr-only">(current)</span></a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">About Me</a></li>
									<li><a href="#">Let's Talk</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
					<div class="bg"></div>
					<div class="jumbotron">
						<h1>&lt;!-- Infinite Possibilities --></h1>
						<h2>Elaine Thomas</h2>
						<h3>Web Developer</h3>
						<p>design, code, implement, maintain</p>
					</div>
			</header>
			<main>
					<div class="container">
						<br>
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">

								<div class="item active">
									<img src="http://placehold.it/460x345">
									<div class="carousel-caption">
										<h3>Super Cool Persona</h3>
										<a href="#">Design that works for you.</a>
									</div>
								</div>

								<div class="item">
									<img src="http://placehold.it/460x345">
									<div class="carousel-caption">
										<h3>That Website I designed</h3>
										<a href="#">I can make stuff that looks cool.</a>
									</div>
								</div>

								<div class="item">

									<img src="http://placehold.it/460x345">
									<div class="carousel-caption">
										<h3>TimeCruncher</h3>
										<a href="#">A Handy Scheduling App</a>
									</div>
								</div>

								<div class="item">
									<img src="images/siMonSiteLink.jpg" alt="Praeter Simon">
									<div class="carousel-caption">
										<h3>SiMonZon Nemesis Homage</h3>
										<a href="https://bootcamp-coders.cnm.edu/~enajera2/simonzon/">All Your Bases Belongs to SiMonZon</a>
									</div>
								</div>

							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
	</body>
</html>