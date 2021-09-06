<?php
/**
 * Footer file
 * 
 * @package asm
 */
?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Icons</h5>
                    <?php get_template_part('template-parts/icons/social-media','grey'); ?>    
                </div>
                <div class="col-lg-4">
                    <h5>Quick Links</h5>
                    <?php get_template_part('template-parts/nav/nav','footer'); ?>    
                </div>
                <div class="col-lg-4">
                    <h5>Contact Info</h5>
                    <a href="#">info@safeworkaustralia.org.au</a>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer() ?>
</body>
</html>