<?php

/**
 * Header TopBar Template
 *
 * @package Asgard
 */

$menu_class = \ASGARD_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('asgard-main-menu');
?>
<div class="header-top-bar-main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
                <div class="block-currency-wrapper">
                    <ul class="list-inline list-unstyled">
                        <li>
                            US Toll Free:&nbsp;<a href="tel:+1(877) 925-1112">+1(877) 925-1112</a> </li>
                        <li>
                            <div class="bookmark-btn" onclick="bookmarkmsg()">
                                <button class="d-inline-flex justify-content-center align-items-center p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" height="14px" viewBox="0 0 576 512" width="13px" fill="#fff"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                </button>
                                <span>Bookmark</span>
                                <script>
                                    function bookmarkmsg() {
                                        alert("Press Ctrl+D to bookmark this page.");
                                    }
                                </script>
                            </div>
                        </li>
                        <li>
                            <div class="track-btn">
                                <a href="https://arrowmeds.aftership.com/" target="_blank">Track Order</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 pull-right hidden-xs">
                <div class="toplinks">
                    <div class="links d-flex justify-content-center align-items-center">
                        <p class="head_whatsapp mb-0" style="text-align: center !important;"><img src="https://www.arrowmeds.com/wp-content/uploads/2023/04/whatappnew.webp" alt="wp icon" width="26" height="26"><strong><a style="color: #222 !important; font-size: 12px;" href="https://api.whatsapp.com/send?phone=18779251112&amp;text=Hi,%20Arrowmeds,%20Team" class="text-decoration-none">&nbsp;187-7925-1112 (Click to chat)</a></strong></p>
                        <ul id="menu-toplinks" class="top-links1 mega-menu1 show-arrow list-unstyled d-flex align-items-center">
                            <li id="nav-menu-item-4855" class="menu-item menu-item-type-post_type menu-item-object-page  narrow "><a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>" class="text-decoration-none">My account</a></li>
                            <?php
                            if(is_user_logged_in()) {
                                if ( class_exists( 'WooCommerce' ) ) {
                                    $logout_link = wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) );
                                } else {
                                    $logout_link = wp_logout_url( get_home_url() );
                                }
                                ?>
                                <li class="menu-item"><span><a href="<?php echo esc_url($logout_link); ?>" class="text-decoration-none">Logout</a></span></li>
                                <?php
                            }else {
                                $login_link = $register_link = '';
                                if ( class_exists( 'WooCommerce' ) ) {
                                    $login_link = wc_get_page_permalink( 'myaccount' );
                                    if (get_option('woocommerce_enable_myaccount_registration') === 'yes') {
                                        $register_link = wc_get_page_permalink( 'myaccount' );
                                    }
                                } else {
                                    $login_link = wp_login_url( get_home_url() );
                                    $active_signup = get_site_option( 'registration', 'none' );
                                    $active_signup = apply_filters( 'wpmu_active_signup', $active_signup );
                                    if ($active_signup != 'none')
                                        $register_link = wp_registration_url( get_home_url() );
                                }
                                ?>
                                <li class="menu-item"><span><a href="<?php echo esc_url($login_link); ?>" class="text-decoration-none">Login</a></span></li>
                                <?php
                                if ($register_link) {
                                    ?>
                                    <li class="menu-item"><span><a href="<?php echo esc_url($register_link); ?>" class="text-decoration-none">Register</a></span></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- End Header Top Links -->
            </div>
        </div>
    </div>
</div>