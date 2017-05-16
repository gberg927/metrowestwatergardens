<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MetroWest Water Gardens</title>

    <!-- Bootstrap Core CSS -->
    <link href="<? echo base_url(); ?>includes/bootstrap.css" rel="stylesheet">
    <link href="<? echo base_url(); ?>includes/site.css" rel="stylesheet">
    <link href="<? echo base_url(); ?>includes/photoswipe/photoswipe.css" rel="stylesheet">
    <link href="<? echo base_url(); ?>includes/photoswipe/default-skin/default-skin.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="<? echo base_url(); ?>images/favicon.png" />
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" id="header">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed inverse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<? echo base_url(); ?>">
                    <img src="<? echo base_url(); ?>images/logo.png" alt="Metrowest Water Gardens">
                </a>
                <div class="navbar-text">
                  <a class="navbar-brand" href="<? echo base_url(); ?>">
                    <h3 class="title">Metrowest Water Gardens</h3>
                    <p class="slogan">"Your Water Feature Specialist"</p>
                  </a>
                </div>
            </div>
            <div id="navbar" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li <?php if ($this->router->fetch_class() == "home") echo 'class="active"'; ?>>
                        <a href="<? echo base_url(); ?>">Home</a>
                    </li>
                    <li <?php if ($this->router->fetch_class() == "about") echo 'class="active"'; ?>>
                        <a href="<? echo base_url(); ?>about">About</a>
                    </li>
                    <li <?php if ($this->router->fetch_class() == "services") echo 'class="active"'; ?>>
                        <a href="<? echo base_url(); ?>services">Services</a>
                    </li>
                    <li <?php if ($this->router->fetch_class() == "gallery") echo 'class="active"'; ?>>
                        <a href="<? echo base_url(); ?>gallery">Photo Gallery</a>
                    </li>
                    <li <?php if ($this->router->fetch_class() == "contact") echo 'class="active"'; ?>>
                        <a href="<? echo base_url(); ?>contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>