<!DOCTYPE html>
<html>    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
        <title><?php wp_title(''); ?></title>
        <meta name="theme-color" content="#db5945">
        <link rel="icon"
              type="image/png"
              href="<?php bloginfo('template_url'); ?>/favicon.png"> <!-- get image from theme directory -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> <!-- font awesome -->
        <?php wp_head()?> <!-- Needed for Wordpress stuff -->
    </head>
    <body <?php body_class(); ?>> <!-- Wordpress generates different body classes depending on if blog, single page... -->
        <div id="top"></div>
        <div id="side">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo"><img src="<?php bloginfo('template_url'); ?>/logo.png" alt="&#9730;" /></a> <!--Unicode umbrella as alt -->
            <ul>
            <?php wp_nav_menu(); ?>
            </ul>
        </div>

    