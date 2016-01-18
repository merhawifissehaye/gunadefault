<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->
<?php $template_directory = get_bloginfo('template_directory', 'display'); ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guna Trading House PLC</title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>

    <!-- Custom CSS -->
    <link href="<?php echo $template_directory .'/lib/fontawesome/css/font-awesome.min.css'; ?>" rel="stylesheet">

    <!-- Google Font -- Oswald -->
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
    <?php menu ?>
    <section id="topper" class="hidden-xs">
        <div class="navbar">
            <ul class="navbar-nav nav navbar-left">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#">My Wishlist</a></li>
            </ul>
            <ul class="navbar-nav nav navbar-right">
                <li><a href="#">Languages</a></li>
                <li><a href="https://www.facebook.com/gthplc/" class="social-icon" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="social-icon disabled"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="social-icon"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-center" href="#">Guna</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#/">Home</a>
                    </li>
                    <li>
                        <a href="#/about">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <i class="caret"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <ul>
                                    <li class="dropdown-menu-header"><a class="text-center" href="#">Imports</a></li>
                                    <li><a class="text-center" href="#service/#Imports">Import Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="dropdown-menu-header"><a class="text-center" href="#">Exports</a></li>
                                    <li><a class="text-center" href="#service/#Exports">Export Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="dropdown-menu-header"><a class="text-center" href="#">Local Products</a></li>
                                    <li><a class="text-center" href="#service/#Local">Local Products</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="dropdown-menu-header"><a class="text-center" href="#">Order Us</a></li>
                                    <li><a class="text-center" href="#">Order Online</a></li>.
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#/news">News</a>
                    </li>
                    <li>
                        <a href="#/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>