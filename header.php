<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Intro Banner Start ***** -->
<div class="intro-banner">
    <?php if(get_theme_mod('header_background')):?>
        <img src="<?php echo esc_url(get_theme_mod('header_background')) ?>" alt="" class="position-absolute top-0 start-0 w-100">
    <?php endif; ?>
    <div class="container d-flex align-items-center justify-content-center" >
        <div class="row" style="width = 100%">
            <div class="col-lg-12 text-center">
                <?php if(get_theme_mod('header_image_logo')):?>
                    <img src="<?php echo esc_url(get_theme_mod('header_image_logo')) ?>" alt="">
                <?php endif; ?>
                <?php if(get_theme_mod('header_text_field')):?>
                    <h1><?php echo get_theme_mod('header_text_field')?></h1>
                <?php endif; ?>
                <?php if(get_theme_mod('header_desc_field')):?>
                    <h4><?php echo get_theme_mod('header_desc_field')?></h4>
                <?php endif ?>
                <?php if(get_theme_mod('header_button')):?>
                <div class="first-button scroll-to-section">
                    <a href="#demos"><?php echo get_theme_mod('header_button')?></a>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
<!-- ***** Intro Banner End ***** -->
