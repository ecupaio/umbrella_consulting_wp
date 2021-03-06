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
    <meta property="og:url" content="https://umbrellaconsultingllc.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:description" content="<?php bloginfo('description'); ?>">

    <meta property="og:image" content="<?php get_logo_url(); ?>">
    <!-- Twitter Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@umbrella_dc">
    <meta name="twitter:creator" content="@umbrella_dc">
    <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
    <meta name="twitter:image" content="<?php get_logo_url(); ?>">
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
                <?php get_page(6);?>
                <a href="<?php get_home_url();?>"><img src="<?php the_field('navbar_logo');?>"></a>
            </div>
            <div class="nav">
                <a class="nav-link" href="#about">Home</a>
                <a class="nav-link" href="#services">Services</a>
                <a class="nav-link" href="#clients">Clients</a>
                <a class="nav-link" href="#bio">Bio</a>
                <a class="nav-link" href="#contact">Contact</a>
            </div>
        </div>
