<?php
/**
 * The template for displaying the footer
 *  alfiroze theme
 */

?>
    </main>
        <footer>
                <div class="section size--container theme--dark">
                <div class="component type--footer">
                    <div class="right-widget">
                        <?php dynamic_sidebar( 'footer-right-widget' ); ?>
                    </div>
                    <hr>
                    <div class="mid-widget">
                        <?php dynamic_sidebar( 'footer-mid-widget' ); ?>
                    </div>
                    <hr>
                    <div class="left-widget">
                        <?php dynamic_sidebar( 'footer-left-widget' ); ?>
                    </div>
            <div>
            <?php $value = myprefix_get_theme_option( 'input_copyright' );echo $value;?>

            </div>
        </footer>
     <?php wp_footer(); ?>
        <script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo get_theme_file_uri(); ?>/assets/js/library.functions.js"></script>
        <script src="<?php echo get_theme_file_uri(); ?>/assets/js/plugin.slider.js"></script>
        <script src="<?php echo get_theme_file_uri(); ?>/assets/js/plugin.slider--doctors.js"></script>
        <script src="<?php echo get_theme_file_uri(); ?>/assets/js/plugin.scrolling.js"></script>
        <script src="<?php echo get_theme_file_uri(); ?>/assets/js/plugin.galleries.js"></script>
        <script src="<?php echo get_theme_file_uri(); ?>/assets/js/main.js"></script>
    </body>
</html>
