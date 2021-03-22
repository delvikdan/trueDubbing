<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/ico/favicon.png">
	<?php if (is_page(array (176, 20))):  ?>
		<?php
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
 
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
	?>
		
	<?php endif; ?>  
	
		  
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    <div class="navbar navbar-inverse navbar-relative-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <?php // bloginfo('name'); ?><img alt="Logo" title=""  src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png" /></a>
					
						<div class="header-phones">
						
						<ul class="lang"><?php pll_the_languages();?></ul> 
						<span class="tel"><a href="tel:<?php the_field('contacts_phone', 20) ?>"><?php the_field('contacts_phone', 20) ?></a></span>
						<span class="email"><a href="mailto:<?php the_field('contacts_email', 20) ?>"><?php the_field('contacts_email', 20) ?></a></span>
						</div>
					

                <?php wp_nav_menu(
                        array(
                            'menu' => 'main-menu',
                            'container_class' => 'nav-collapse collapse',
                            'menu_class' => 'nav',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new Bootstrapwp_Walker_Nav_Menu()
                        )
                    ); ?>


            </div>
        </div>
		
    </div>

    <!-- End Header. Begin Template Content -->