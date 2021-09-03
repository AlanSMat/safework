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
                </div>
                <div class="col-lg-4">
                    <h5>Quick Links</h5>
                    <?php get_template_part('template-parts/nav/nav','footer'); ?>    
                </div>
                <div class="col-lg-4">
                    <h5>Contact Info</h5>
                </div>
            </div>
        </div>
    </footer>
<?php wp_footer() ?>
</body>
</html>