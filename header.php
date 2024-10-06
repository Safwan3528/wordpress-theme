<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="glass-header">
    <div class="container">
        <div id="branding">
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => false,
                'menu_class' => 'nav-menu',
                'fallback_cb' => false
            ));
            ?>
        </nav>
        <div class="social-icons">
            <a href="https://github.com/Safwan3528" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://linkedin.com/in/safwanrahimi" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="dark-mode-switch">
            <label class="switch">
                <input type="checkbox" id="dark-mode-toggle">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
</header>
<div class="header-spacer"></div>
<div class="search-container">
    <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
        <button type="submit" class="search-submit">Search</button>
    </form>
</div>