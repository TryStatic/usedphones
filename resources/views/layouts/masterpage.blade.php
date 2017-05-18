<!doctype html>
<html class="no-js" lang="">

<!-- Head -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Usedphones - @yield('title')</title>
    <meta name="description" content="A place where you can sell your used smartphone or perhaps buy one.">
    <meta name="author" content="Dimitris Gazis">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png"> <!-- Apple favicon -->
    <link rel="icon" href="favicon.ico?v=0.12"> <!-- Anti browser cache -->


    <!-- CSS Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Slabo+27px" rel="stylesheet">
</head>

    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
            your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand brand-text" href="/">Usedphones</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav custom-font">
                        <li><a href="#">View and Buy</a></li>
                        <li><a href="#">Place and Sell</a></li>
                        <li><a href="#">Search</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">More<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/about">About us</a></li>
                                <li><a href="/faq">FAQ: Questions and Answers</a></li>
                                <li><a href="#">Support</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Technical</li>
                                <li><a href="#">Market Policies</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Protection Plans</a></li>
                            </ul>
                        </li>
                        <li>
                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input type="text" class="form-control input-sm" placeholder="Search"/>
                                    <span class="input-group-btn">
                                                <button class="btn btn-info btn-sm" type="button">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form action="#">
                                <button type="submit" class="btn btn-default custom-login-button btn-primary">Login</button>
                            </form>
                        </li>
                        <li>
                            <form action="#">
                                <button type="submit" class="btn btn-default custom-login-button btn-primary">Register</button>
                            </form>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>


        <main class="main">
            <div id="maincointainer" class="container" style="padding-bottom: 25px">
                @yield('maincontent')
            </div>
        </main>



        <!-- Footer -->
        <footer>
            <div class="footer" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> Buy</h3>
                            <ul>
                                <li><a href="#"> View Listings </a></li>
                                <li><a href="#"> Buy Iphone </a></li>
                                <li><a href="#"> Buy Smartphone </a></li>
                                <li><a href="#"> Buy Tablet </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> SELL </h3>
                            <ul>
                                <li><a href="#"> Create Sell Listing </a></li>
                                <li><a href="#"> View Sell Orders </a></li>
                                <li><a href="#"> Edit your Listing </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> HELP </h3>
                            <ul>
                                <li><a href="/faq"> FAQ: Questions and Answers </a></li>
                                <li><a href="#"> Support </a></li>
                                <li><a href="#"> Market Policies </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> ABOUT US </h3>
                            <ul>
                                <li><a href="/about"> Who we are </a></li>
                                <li><a href="#"> Where to find us </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3> STAY CONNECTED </h3>
                            <ul>
                                <li>
                                    <div class="input-append newsletter-box text-center">
                                        <input type="text" class="full text-center" placeholder="Enter your email address">
                                        <button class="btn btn-primary btn-sm custom-sub-button" type="button"> Subscribe <i
                                                class="fa fa-long-arrow-right"> </i></button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social">
                                <li><a href="http://facebook.com" target="_blank"> <i class="fa fa-facebook">   </i> </a></li>
                                <li><a href="http://twitter.com" target="_blank"> <i class="fa fa-twitter">   </i> </a></li>
                                <li><a href="http://google.com" target="_blank"> <i class="fa fa-google-plus">   </i> </a></li>
                                <li><a href="http://pinterest.com" target="_blank"> <i class="fa fa-pinterest">   </i> </a></li>
                                <li><a href="http://youtube.com" target="_blank"> <i class="fa fa-youtube">   </i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </div>
            <!--/.footer-->

            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left"> Copyright © Dimitris Gazis <?php echo date("Y"); ?>. All right reserved. </p>
                    <div class="pull-right">
                        <ul class="nav nav-pills payments">
                            <li><i class="fa fa-cc-visa"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                            <li><i class="fa fa-cc-paypal"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.footer-bottom-->
        </footer>


        <!-- Scripts -->
        <span>
                <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
                <script>window.jQuery || document.write('<script src="../../public/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
                <script src="js/plugins.js"></script>
                <script src="js/main.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

                <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        </span>



    </body>
</html>
