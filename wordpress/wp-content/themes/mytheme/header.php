<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<title><?php bloginfo('name'); ?> <?php wp_title() ?> <?php if(is_front_page()) {
    echo ""; bloginfo('description');}?></title>
    <?php
      wp_head();
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">


</head>

<body>
    <?php 
       $logoimg=get_header_image();
    ?>
<nav class="navbar navbar-expand navbar-light bg-white fixed-top">
        <div class="container align-items-center">
            <div class="logo">
                <a href="javascript:void(0)" class="text-dark fs-1 bar-list icon mt-3" onclick="menu()"><i class="bi bi-list"></i></a>
                <a href="<?php echo site_url(); ?>" class="navbar-brand">
                    <img src="<?php echo $logoimg; ?>" alt="logo" width="120" height="60">
                </a>

            </div>
            <div>
                <a href="#" class="join-btn"><button type="button" class="btn btn-outline-dark">Join Us Now</button></a>
                <div class="navbar-nav nav-links" id="nav-links">
                    <?php wp_nav_menu(array('theme_location'=>'primary-menu', 'menu_class'=>'nav', 'menu_id'=>'nav-links'
                    ))
                    ?>
                    </div>
                    
                </div>
            </div>

        </div>
</nav>