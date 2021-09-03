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
<!-- ******************* The Hero Widget Area ******************* -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri()  ?>/assets/images/banner/construction-roof.jpg)" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri()  ?>/assets/images/banner/construction.jpg)" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo get_template_directory_uri()  ?>/assets/images/banner/inspection.jpg)" alt="Third slide">
		</div>
		<?php //dynamic_sidebar( 'hero' ); ?>

	</div>

	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

		<span class="carousel-control-prev-icon" aria-hidden="true"></span>

		<span class="sr-only"><?php esc_html_e( 'Previous', 'understrap' ); ?></span>

	</a>

	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

		<span class="carousel-control-next-icon" aria-hidden="true"></span>

		<span class="sr-only"><?php esc_html_e( 'Next', 'understrap' ); ?></span>

	</a>

</div><!-- .carousel -->

<script>
jQuery( ".carousel-item" ).first().addClass( "active" );
</script>
	<div class="page-title">
		<?php is_home() && ! is_front_page() ? single_post_title() : the_title() ?>
	</div>
</header>


    
