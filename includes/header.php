<!DOCTYPE html>
<html lang="en">

<head>
    <title>Franciscan Ministries</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" media="all" href="assets/styles/css/base.css" rel="stylesheet" />
    <link type="text/css" media="all" href="assets/styles/css/style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Dosis|Lora:400,700|Sacramento" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    function replace_title() {
        var url = window.location.toString();
        urlArr = url.split('/');
        var currentTitle = urlArr[urlArr.length - 1];
        document.title = currentTitle;
        console.log(currentTitle);
    }
    </script>
</head>

<body class="home page-template page-template-front-page page-template-front-page-php page page-id-50" onload="replace_title()">
    <!-- Mobile Menu -->
    <div id="navmenuwrapper">
        <nav class="mobilewrapper" id="menu">
            <div class="menu-mobile-container">
                <ul id="menu-mobile" class="menu">
                    <li class="menu-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                        <ul role="menu" class="dropdown-menu">
                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Communities</a>
                        <ul role="menu" class="dropdown-menu">
                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services</a>
                        <ul role="menu" class="dropdown-menu">
                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Philanthropy</a>
                        <ul role="menu" class="dropdown-menu">
                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advisory Services</a>
                        <ul role="menu" class="dropdown-menu">
                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Top Main Nav Desktop -->
    <div class="container-fluid" id="tabletmenu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <a href="#" class="bluebutton-sm-top1 mobile-button-top">1-800-524-6126</a>
                    <a href="#" class="bluebutton-sm-top2 mobile-button-top">Donate</a>
                    <a id="hamburger" class="tablethamburger" href="#menu"> <span class="top-bar"></span> <span class="middle-bar"></span> <span class="bottom-bar"></span> </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Logo Mobile -->
    <div class="container-fluid mobilelogofluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12"> <a href="#"><img class="img-responsive" src="assets/images/Franciscan-Logo.png" alt=""></a></div>
            </div>
        </div>
    </div>
    <!-- Top Menu -->
    <div class="container-fluid topmenu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 logocolumn">
                    <a href="#"> 
                      <img class="img-responsive mainlogo" src="assets/images/Franciscan-Logo.png" alt=""> 
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="menu-header-container">
                        <a href="#" class="bluebutton-sm-top1">1-800-524-6126</a>
                        <ul id="menu-header" class="headermenu left">
                            <li class="menu-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Blog</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">News &amp; Events</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Volunteer</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Careers</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Contact Us</a></li>
                        </ul>
                        <a href="#" class="bluebutton-sm-top2">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Menu 2 -->
    <div class="container-fluid navfluid">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">Brand</a>
                            </div>
                            <div class="">
                                <ul id="menu-primary" class="nav navbar-nav navbar-left">
                                    <li class="menu-item dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <i class="caret"></i></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Communities <i class="caret"></i></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services <i class="caret"></i></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Philanthropy <i class="caret"></i></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advisory Services <span class="caret"></span></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li class="menu-item"><a href="#">Sub Menu Item</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                    </nav>
                </div>
            </div>
        </div>
    </div>