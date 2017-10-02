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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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

    <!--Custom JavaScript File-->
    <script src="public_html/java-script/common.js"></script>

    <title>Infinite Possibilities</title>
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
                <li><a href="#contact">Let's Connect</a></li>
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
<div class="bg-main">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header jtron-h2" id="portfolio">Portfolio<br>
                        <small>
                            <a href="https://github.com/ethomas12">
                                See My GitHub<img src="images/gitButn.png" alt="octoCat" id="lilKitty"></a>
                        </small>
                    </h1>
                </div>
            </div>

            <!-- /row -->

            <!--tech toolbox progress bar-->
            <h3 class="jtron-h3 center">My Tech Toolbox:</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="75"
                                 aria-valuemin="0"
                                 aria-valuemax="100" style="width:75%">
                                CSS3
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0"
                                 aria-valuemax="100" style="width:70%">
                                HTML5
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                 aria-valuemin="0"
                                 aria-valuemax="100" style="width:40%">
                                PHP 5.6 & 7.0
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10"
                                 aria-valuemin="0"
                                 aria-valuemax="100" style="width:20%">
                                mySQL
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10"
                                 aria-valuemin="0"
                                 aria-valuemax="100" style="width:10%">
                                JavaScript
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="07"
                                 aria-valuemin="0"
                                 aria-valuemax="100" style="width:07%">
                                Angular.js
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
            <div>
                <h3 class="jtron-h3 center">I have also worked with the following technologies:</h3><br>
                <table>
                    <thead>
                    <tr>
                        <th><h4 class="jtron-h4">Frameworks</h4></th>
                        <th><h4 class="jtron-h4">Databases</h4></th>
                        <th><h4 class="jtron-h4">Miscellaneous</h4></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> WordPress</td>
                        <td> My SQL</td>
                        <td> Git</td>
                    </tr>
                    <tr>
                        <td> Sass</td>
                        <td> MongoDB</td>
                        <td> Vagrant</td>
                    </tr>
                    <tr>
                        <td> Bootstrap</td>
                        <td></td>
                        <td></td>
                    <tr>
                        <td> Laravel</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Projects Row 1-->
            <!-- Project 1 -->
            <div class="row padded-bottom">
                <div class="col-md-6 portfolio-item">
                    <img class="img-responsive" src="images/timecrunch.jpg" alt="timecrunch">
                    <h3>
                        Bootcamp Capstone Project
                    </h3>
                    <p>Time Crunch - For Deep Dive Bootcamp, team built schedule management tool
                        developed with Bootstrap, PHP, MySQL, and Angular.js. </p>
                </div>
                <!-- Project 2 -->
                <div class="col-md-6 portfolio-item">
                    <img class="img-responsive" src="images/silverH.jpg" alt="sample page">
                    <h3>
                        Not-for-Profit
                    </h3>
                    <p>I volunteered with Silver Horizons as a web developer to update and further develop their
                        website.</p>
                </div>
            </div>
            <!-- /.row -->

            <!-- Projects Row 2-->
            <!-- Project 3 -->
            <div class="row">
                <div class="col-md-6 portfolio-item">
                    <img class="img-responsive" src="/public_html/images/tinyCpr.jpg" alt="sample page">
                    <h3>
                        University Research Model
                    </h3>
                    <p>Large custom WordPress website showcasing research model and methods including videos and interactive
                        infographics.</p>
                </div>
                <!-- Project 4 -->
                <div class="col-md-6 portfolio-item">
                    <a href="https://plnkr.co/dRZTXo76WOEcqr8ip8fk">
                        <img class="img-responsive" src="images/siMonSiteLink.jpg" alt="screencap of SiMonZon Bootstrap, JS Practice">
                    </a>
                    <h3>
                        <a href="https://plnkr.co/dRZTXo76WOEcqr8ip8fk">SiMonZon</a>
                    </h3>
                    <p>This was an afternoon practice project I created using JavaScript, HTML5, CSS3 and Bootstrap. I
                        started it on the Plunker website and then moved to PhpStorm to complete it. (Plunker Link has no
                        images.)</p>
                </div>
            </div>
        </div>

        <!-- /.row -->

        <!--About Me-->
        <hr>
        <div class="container" id="aboutMe">
            <h1 class="jtron-h2">About Me</h1>
            <h3 class="jtron-h3 center">I'm Elaine Thomas. I'm a Web Developer and..</h3>
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
        <hr>
        <!-- The div class="form-wrap" is the black box containing the form. It's set to a column width of 12 for small screens, and a column width of 6 for medium screens on up -->
        <div class="container">
            <h1 class="jtron-h2">Let's Connect</h1>
            <h3 class="jtron-h3 center" id="contact">I work with <a href="http://11online.us">11 Online</a> as a Web
                Developer / Project Manager.</h3></div>
        <div class="container">
            <div class="row">
                <div class="linkedin center">
                    <h4>Connect With Me on LinkedIn</h4>
                    <!--		LinkedIn-->
                    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async
                            defer></script>
                    <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="en_US"
                         data-type="vertical" data-theme="dark" data-vanity="infinite-possibilities"><a
                            class="LI-simple-link"
                            href='https://www.linkedin.com/in/infinite-possibilities?trk=profile-badge'>Elaine Thomas</a>
                    </div>

                </div><!--/col-->
            </div><!--/container-->

        </div>
        <hr>
        <footer class="footer">
            <div class="container center">
                <p class="text-muted">Contact information: <a href="mailto:info@infinite-possibilities.us">info@infinite-possibilities.us</a>
                </p>
            </div>
        </footer>

</div>
</body>
</html>
