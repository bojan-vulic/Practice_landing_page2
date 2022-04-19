<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Font Awesome 5 | visit: https://fontawesome.com/v5.15/icons?d=gallery&p=2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />
    <!-- owl-carousel | visit: https://owlcarousel2.github.io/OwlCarousel2/-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
    <nav>
        <article class="container">
             <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }         
            ?>
            
            <button class="menuBtn"><i class="fas fa-bars"></i></button>
            <div id="menuList">
               <ul>
                <li class="menuBtn"><i class="fas fa-times"></i></li>
               <?php 
                $args = array(
                'menu_class' => 'nav desktop-menu',
                'theme_location' => 'primary'
                );
                ?>
                <?php wp_nav_menu(); ?>

                <?php 
              if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
                    wp_nav_menu( array(
                    'depth' => 6,
                    'sort_column' => 'menu_order',
                    'container' => 'ul',
                    'menu_id' => 'main-nav',
                    'menu_class' => 'nav mobile-menu',
                    'theme_location' => 'mobile-menu'
                    ) );
                    } else {
                    echo "<ul class='nav mobile-menu'>
                        <font style='color:red'>Mobile Menu has not been set</font>
                    </ul>";
                    }
                ?>
                </ul>
            </div>
        </article>
    </nav>
     <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />