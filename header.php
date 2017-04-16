<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Hireapplicants</title>
	
	<!-- core CSS -->
   <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->
    
</head><!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +919810669912</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                               
                            </ul>
                            
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src='public/img/companyimages/logo.png' alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="<?php if($page=='home') echo 'active'?>"><a href="index.php">Home</a></li>
                        <li class="<?php if($page=='about') echo 'active'?>">
							<a href="aboutus.php">About Us</a>
						</li>
                        <li class="<?php if($page=='service') echo 'active'?>"><a href="services.php">Services</a></li>
                        <li class="<?php if($page=='portfolio') echo 'active'?>"><a href="portfolio.php" >Portfolio</a></li>                   
                        <li class="<?php if($page=='contactus') echo 'active'?>"><a href="contactus.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    
    