<?php

/**
 * Header MiddleBar Template
 *
 * @package Asgard
 */

$menu_class = \ASGARD_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('asgard-main-menu');
?>
<div class="middle-bar-main">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block">
                <!-- Header Logo -->
                <div class="logo">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                    ?>
                    <div class="whatsapp_in_mobile">
                        <a href="https://api.whatsapp.com/send?phone=18779251112&text=Hi,%20Arrowmeds,%20Team" target="_blank">
                            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="25" height="25" fill="#1fc0a0">
                                <title>whatsapp-brands-svg</title>
                                <style>
                                    .s0 { fill: #1fc0a0 } 
                                </style>
                                <path id="Layer" fill-rule="evenodd" class="s0" d="m30 14.9c0 8.2-6.8 14.8-15 14.8-2.5 0-4.9-0.6-7.1-1.8l-7.9 2.1 2.1-7.7c-1.3-2.3-2-4.8-2-7.4 0-8.2 6.7-14.9 14.9-14.9 4 0 7.7 1.5 10.5 4.4 2.8 2.8 4.5 6.5 4.5 10.5zm-2.5 0c0-3.3-1.4-6.4-3.8-8.8-2.3-2.3-5.4-3.6-8.7-3.6-6.8 0-12.4 5.6-12.4 12.4 0 2.3 0.7 4.6 1.9 6.5l0.3 0.5-1.2 4.6 4.6-1.3 0.5 0.3c1.9 1.1 4.1 1.7 6.3 1.7 6.8 0 12.5-5.5 12.5-12.3zm-5 3.5c0.1 0.2 0.1 0.9-0.2 1.8-0.3 0.9-1.8 1.7-2.5 1.8-1.2 0.1-2.1 0-4.5-1-3.7-1.6-6.2-5.3-6.4-5.6-0.1-0.2-1.5-2-1.5-3.8 0-1.9 1-2.8 1.3-3.1 0.4-0.4 0.8-0.5 1-0.5q0.4 0 0.7 0c0.3 0 0.6-0.1 0.9 0.7 0.3 0.7 1 2.5 1.1 2.7 0.1 0.2 0.2 0.4 0 0.7-0.7 1.4-1.4 1.3-1 2 1.4 2.5 2.8 3.3 5 4.4 0.4 0.2 0.6 0.2 0.8-0.1 0.2-0.2 0.9-1.1 1.2-1.4 0.2-0.4 0.5-0.4 0.8-0.2 0.4 0.1 2.2 1 2.6 1.2 0.3 0.2 0.6 0.3 0.7 0.4z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- End Header Logo -->
            </div>

            <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
                <div class="search-box">
                    <?php //echo linea_search_form(); ?>
                    <?php echo do_shortcode('[fibosearch]'); ?>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">

                <div class="mm-toggle-wrap">
                    <div class="mm-toggle mobile-toggle d-sm-none d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="#ffffff" viewBox="0 0 448 512"><path d="M448 64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32zm0 256c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32zM0 192c0 17.7 14.3 32 32 32H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32zM448 448c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H416c17.7 0 32-14.3 32-32z"/></svg>
                    </div>
                </div>
                <div class="visible-xs mobile-search-new-place d-sm-none d-block">
                    <?php //echo linea_mobile_search(); ?>
                    <?php echo do_shortcode('[fibosearch]'); ?>
                </div>
                <?php if (class_exists('WooCommerce')) : ?>
                    <div class="top-cart-contain">
                        
                    </div>
                <?php endif;
                ?>

            </div>
        </div>
    </div>
</div>