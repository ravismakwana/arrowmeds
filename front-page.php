<?php

/**
 * Front Page Template
 *
 * @package Asgard
 */

get_header();

?>
<div id="primary" class="container">


		<?php
		if ( have_posts() ) {

			while ( have_posts() ) : the_post();
//				get_template_part( 'template-parts/content', 'page' );
            the_content();
			endwhile;

		} else {
			get_template_part( 'template-parts/content', 'none' );
		}
		?>

    <div class="row">
        <div class="col-12 col-sm-9 order-2">

        </div>
        <div class="col-12 col-sm-3"></div>
    </div>
</div>
<?php get_footer(); ?>

