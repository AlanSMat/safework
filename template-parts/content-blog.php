<div id="primary">
    <main id="main" class="site-main" role="main">
        <?php if( have_posts() ) :  ?>
            <div class="container">
                <div class="row">
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-5' ); ?>>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <h3><?php the_title() ?></h3>
                            <?php the_excerpt() ?>
                        <?php endwhile ?>
                    </article>
                </div>
            </div> <!-- end container -->
        <?php endif  ?>
    </main>
</div>