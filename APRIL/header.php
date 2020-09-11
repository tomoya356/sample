<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="uft-8">
        <title><?php wp_title('I', true, 'right'); bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
        <script src="https://kit.fontawesome.com/2a5a3de8bc.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="header" class="container">
            <div class="header-title">
                <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
            </div>
            <div class="header-icon">
                <a href=""><i class="fab fa-instagram instagram"></i></a>
                <a href=""><i class="fab fa-facebook-square facebook"></i></a>
            </div>
            <?php wp_nav_menu(); ?>
        </div><!-- /header -->
<?php wp_head(); ?>
