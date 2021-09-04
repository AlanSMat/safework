<?php
/**
 * Header file
 * 
 * @package ASM
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<?php 
    if( function_exists( 'wp_body_open' ) ) :
        wp_body_open();
    endif;
?>
<header id="masthead" class="site-header" role="banner">  
	<?php get_template_part('template-parts/nav/nav','top-bar'); ?>    
	<?php get_template_part('template-parts/nav/nav','main'); ?>    
	<?php if (is_front_page()) : ?>
		<?php get_template_part('template-parts/header/header','carousel'); ?>    
		<!-- <div class="home-page-title">
			<?php is_home() && ! is_front_page() ? single_post_title() : the_title() ?>
		</div> -->
	<?php else : ?>
		<?php get_template_part('template-parts/header/header','page'); ?>    
	<?php endif ?>
</header>


    
