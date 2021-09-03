<?php
/**
 * Front page template file
 * 
 * @package ASM
 */

get_header();
?>
<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
    <?php if( have_posts() ) :  ?>
    <div class="container">
        <div class="row">
            <?php 
                get_template_part('template-parts/content') 
            ?>
		</div>
    </div> <!-- end container -->
    <?php endif  ?>
    </main>
</div>
<?php
get_footer();