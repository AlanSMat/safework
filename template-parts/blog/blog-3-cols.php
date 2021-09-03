<?php
/**
 * Main template file
 * 
 * @package ASM
 */

get_header();
?>
<?php if( have_posts() ) :  ?>
    <div class="container">
    <div class="row">
        <?php
        $index         = 0;
        $no_of_columns = 3;

        while ( have_posts() ) : the_post();

            if ( 0 === $index % $no_of_columns ) {
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                <?php
            }
            
            get_template_part( 'template-parts/content' );

            $index ++;

            if ( 0 !== $index && 0 === $index % $no_of_columns ) {
                ?>
                </div>
                <?php
            }

        endwhile;
        ?>
    </div>
    </div> <!-- end container -->
<?php endif  ?>
<?php
get_footer();