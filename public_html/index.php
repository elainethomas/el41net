<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>

		<!-- IE Rendering Mode = Edge-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />

		<!-- LOAD OUR CUSTOM STYLESHEET HERE!!!!! -->
		<link rel="stylesheet" href="style.css" />

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<title>el41net</title>
	</head>
	<body>
		<div>
			<header class="page-header">
			<!--	<h1>Example page header <small>Subtext for header</small></h1> -->
				<div class="container">
					<div class="bg"></div>
					<div class="jumbotron">
						<h1>&lt;!--   Infinite Possibilities   --></h1>
						<h2>Elaine Thomas</h2>
						<h3>Web Developer</h3>
						<p>design, code, implement, maintain</p>
					</div>
				<div class="container">
				<nav class="navbar navbar-default"> <!--use navbar-inverse for darker bg-->
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<h3>Quality you can see.</h3>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!--<a class="navbar-brand" href="#">Brand</a> remove this line, add <img src="blah.jpg" alt="blah">
							<img src="http://placehold.it/50x50">-->
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="top-nav">
							<ul class="nav navbar-nav navbar-right">
								<li class="active"><a href="#">Link 1<span class="sr-only">(current)</span></a></li>
								<li><a href="#">Link 2</a></li>
								<!--I don't want this here
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">One more separated link</a></li>
									</ul>
								</li>
							</ul>
							<!--I don't want this here
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
							-->

								<li><a href="#">Link 3</a></li>
								<!--
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<!--<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
										-->
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
				<main >
					<div class="container">

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
												<h3>Chania</h3>
												<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
											</div>
										</div>

										<div class="item">
											<img src="http://placehold.it/460x345">
											<div class="carousel-caption">
												<h3>Chania</h3>
												<a href="#">The atmosphere in Chania has a touch of Florence and Venice.</a>
											</div>
										</div>

										<div class="item">

											<img src="http://placehold.it/460x345">
											<div class="carousel-caption">
												<h3>Flowers</h3>
												<p>Beatiful flowers in Kolymbari, Crete.</p>
											</div>
										</div>

										<div class="item">
											<img src="http://placehold.it/460x345">
											<div class="carousel-caption">
												<h3>Flowers</h3>
												<p>Beatiful flowers in Kolymbari, Crete.</p>
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

						</div>
					</div>
				</main>
			</div>
	</body>
</html>