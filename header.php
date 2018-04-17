<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

        <header role="banner">
            <div id="top-header" class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-4">
		            <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
		            <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
		            <?php endif; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-4">
                    <!--                        <span class="logoWidth">-->
                    <!--                            <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/compiled/images/DepEd-Website-header-110px_1.png" alt="site-logo" class="siteLogo" draggable="false" />-->
                    <!--                        </span>-->
                </div>
                <div id="timeCta" class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-4">
                    <div class="row">
                                <span class="timeCheck">
                                    <p>Philippine Standard Time</p>
                                    <h4 id="time" class="timestamp">04:30 PM</h4>
                                    <p id="date">08 May, 2017, Monday</p>
                                </span>
                        <a id="contactCta" class="contactCta btn btn-primary" href="<?php echo get_site_url(); ?>#complaintForm" target="_self">Contact Us</a>
                    </div>
                </div>
            </div>

            <div id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>">
                <nav class="navbar navbar-expand-xl p-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'       => 'div',
                    'container_id'    => 'main-nav',
                    'container_class' => 'collapse navbar-collapse justify-content-start',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav',
                    'depth'           => 3,
                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                    'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>

                    <span id="searchFormWidth" class="searchFormWidth">
                        <form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>">
                            <div class="form-group ml-auto">
                                <input type="text" name="s" id="s" <?php if(is_search()) { ?>value="<?php the_search_query(); ?>" <?php } else { ?>value="Search here &hellip;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"<?php } ?> /><br />
                            </div>
                            <button type="submit" class="btn btn-search ml-auto">
                                <i class="fa fa-search">&nbsp;</i>
                            </button>
                        </form>
                    </span>
                </nav>
            </div>
        </header><!-- #masthead -->

        <div id="rev-slider-area" class="">
            <?php putRevSlider('homeslider', 'homepage'); ?>
        </div>

        <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
            <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
                <div class="container">
                    <h1>
                        <?php
                        if(get_theme_mod( 'header_banner_title_setting' ))
                        {
                            echo get_theme_mod( 'header_banner_title_setting' );
                        }
                        else
                        {
                            echo 'Wordpress + Bootstrap';
                        }
                        ?>
                    </h1>
                    <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' ))
                    {
                            echo get_theme_mod( 'header_banner_tagline_setting' );
                    }
                    else
                        {
                            echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                        }
                        ?>
                    </p>
                    <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
                </div>
            </div>
        <?php endif; ?>

        <div id="content" class="site-content">
            <div class="container">
                <div class="row">
                    <?php endif; ?>