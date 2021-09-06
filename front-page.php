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
        </div>
        <?php endif  ?>

        <!-- temporary filler content to be replaced by widget -->
        <div class="container">
            <div class="row home-block">
                <div class="col-lg-6 overlay-black-300">
                    <img src="<?php echo ASM_ASSETS_URI ?>/images/blocks/abseil.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="block-text-container">
                        <h4>Header Text</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum omnis saepe tempora natus. Explicabo, quibusdam libero. Incidunt, modi dignissimos, nihil corrupti nam inventore eligendi, quas quisquam mollitia corporis quidem reiciendis!</p>
                        <button class="btn btn-lg">Read More...</button>
                    </div>
                </div>
            </div>
            <div class="row home-block">
                <div class="col-lg-6">
                    <div class="block-text-container">
                        <h4>Header Text</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum omnis saepe tempora natus. Explicabo, quibusdam libero. Incidunt, modi dignissimos, nihil corrupti nam inventore eligendi, quas quisquam mollitia corporis quidem reiciendis!</p>
                        <button class="btn btn-lg">Read More...</button>
                    </div>
                </div>
                <div class="col-lg-6 overlay-black-300">
                    <img src="<?php echo ASM_ASSETS_URI ?>/images/blocks/mask.jpg" alt="">   
                </div>
            </div>
            <div class="row home-block">
                <div class="col-lg-6 overlay-black-300">
                    <img src="<?php echo ASM_ASSETS_URI ?>/images/blocks/abseil.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="block-text-container">
                        <h4>Header Text</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum omnis saepe tempora natus. Explicabo, quibusdam libero. Incidunt, modi dignissimos, nihil corrupti nam inventore eligendi, quas quisquam mollitia corporis quidem reiciendis!</p>
                        <button class="btn btn-lg">Read More...</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php
get_footer();