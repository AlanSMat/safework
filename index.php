<?php
/**
 * Main template file
 * 
 * @package ASM
 */

get_header();
?>

<div id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <?php if( have_posts() ) :  ?>
            <div class="container">
                <?php while( have_posts() ) : the_post(); ?>
                    <?php the_title(); ?>
                    <?php the_excerpt(); ?>
                <?php endwhile ?>
            </div>
        <?php endif  ?>
       
    </main>
</div>

<?php
get_footer();
