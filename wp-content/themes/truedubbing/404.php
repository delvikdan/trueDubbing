<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container">
    <div class="row">
        <div class="span12">
            <?php if (function_exists('bootstrapwp_breadcrumbs')) {
            bootstrapwp_breadcrumbs();
        } ?>
        </div>
    </div>

   <div class="row content">
       <div class="span8">

            <header class="page-title">
                <h1><?php _e('Ошибка 404', 'bootstrapwp'); ?></h1>
            </header>

            <p class="lead"><?php _e(
                'Страница, которую Вы ищете, не существует или была удалена.',
                'bootstrapwp'
            ); ?></p>


        
       </div>

    <?php get_sidebar(); ?>
    <?php get_footer();
