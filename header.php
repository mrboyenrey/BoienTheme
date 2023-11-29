<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<container>
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">  
        <!--Logo Brand HERE-->  
        <a class="navbar-brand" href="#">

            <?php
            // Display the custom logo 
            the_custom_logo();
            ?>         

        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>', 
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()    
            ));
            ?>
        </div> 
    </div>
</nav>   
</container>     