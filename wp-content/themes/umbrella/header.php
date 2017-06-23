<!DOCTYPE html>
<html>

<head>
    <!-- %APP_VERSION% -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title and Meta Text -->
    <title><?php bloginfo('name'); ?></title>
    <meta content="<?php bloginfo('description'); ?>" name="description">
    <!-- Facebook Meta -->
    <meta property="og:url" content="Site URL">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Link Title">
    <meta property="og:description" content="Link Description">
    <meta property="og:image" content="Link Image">
    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TheDemocrats">
    <meta name="twitter:creator" content="@TheDemocrats">
    <meta name="twitter:title" content="Link Title">
    <meta name="twitter:description" content="Link Description">
    <meta name="twitter:image" content="Link Image">
    <!-- Pure CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,400i,700,700i" rel="stylesheet">
    <!-- Favicon -->

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <!-- Twitter Popup -->
    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    <!-- Slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
     <?php wp_head(); ?>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <div class="logo">
                <?php the_custom_logo(); ?>
                <?php get_site_icon_url(); ?>
            </div>
            <div class="nav">
                <a class="nav-link" href="#about">Home</a>
                <a class="nav-link" href="#services">Services</a>
                <a class="nav-link" href="#bio">Bio</a>
                <a class="nav-link" href="#contact">Contact</a>
            </div>
        </div>
