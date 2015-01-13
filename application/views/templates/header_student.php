<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CSFREB</title>
    <link href="<?php echo css_url('bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo css_url('font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo css_url('prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo css_url('animate.css');?>" rel="stylesheet">
    <link href="<?php echo css_url('main.css');?>" rel="stylesheet">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top main-header" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo images_url('mybarangay_logo_55px.png');?>" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#">My Profile</a>
					</li>
					<li>
						<a href="#">Reserve a Room</a>
					</li>
					<li>
						<a href="#">Borrow Equipment</a>
					</li>
                    <li id="logout" class="buzz-out"><a href="<?php echo base_url('pages/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->