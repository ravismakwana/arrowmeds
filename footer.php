<?php
/**
 * Footer Template
 *
 * @package Asgard
 */
?>

</div>
<footer>
    <div class="footer-widget bg-dark pt-sm-4 py-0 py-4 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 pt-4 pt-md-5 pb-md-5 mb-4 mb-md-0">
					<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php } ?>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-4 pt-lg-5 pb-md-5 mb-4 mb-md-0">
		                    <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                        <div class="col-12 col-md-4 pt-lg-5 pb-md-5 mb-4 mb-md-0">
		                    <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                        <div class="col-12 col-md-4 pt-lg-5 pb-md-5 mb-4 mb-md-0">
		                    <?php dynamic_sidebar( 'footer-4' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-dark text-center text-white py-3 border-top border-black">
        <div class="container">
            <div class="row">
	            <?php
	            $domain = get_option('siteurl'); //or home
	            $domain = str_replace('https://www.', '', $domain);
	            ?>
                <div class="col-md-6 col-12 fs-12 text-md-start text-center my-1">Copyright © <?php echo date( 'Y' ); ?> | <a href="<?php echo home_url(); ?>" class="text-white text-decoration-none"><?php echo get_option( 'blogname' ); ?></a>
                </div>
                <div class="col-md-6 col-12 fs-12 text-md-end text-center my-1">Powered By <?php echo get_option( 'blogname' ); ?></div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php
wp_footer();
get_template_part( 'template-parts/content', 'svgs' );
?>
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasGMA" aria-labelledby="offcanvasGMALabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasAMLabel">All Categories</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
		<?php
		echo asgard_canvas_menu();
		?>

    </div>
</div>
<?php echo asgard_canvas_right_cart(); ?>
</body>
</html>
