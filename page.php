<?php
/**
 *  Main Page file
 *
 * @package Asgard
 */

get_header();
?>
<div id="primary">
    <div id="main">
        <?php
            if(have_posts()) {
                ?>
                <div class="container">
                    <header>
                        <h1 class="page-title mb-5"><?php single_post_title(); ?></h1>
                    </header>
                    <div class="row">
                        <?php
                        while(have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>

                <?php
            } else {
	            get_template_part('template-parts/content', 'none');
            }
            ?></div><?php
        ?>
    </div>
</div>
<?php
get_footer();