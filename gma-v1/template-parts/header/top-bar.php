<?php

/**
 * Header TopBar Template
 *
 * @package Asgard
 */

$menu_class     = \ASGARD_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'asgard-main-menu' );
?>
<div class="header-top-bar-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 hidden-xs d-none d-sm-none d-md-block">
                <div class="links d-flex justify-content-start align-self-center align-self-stretch">
                    We Are Shipping Australia, USA, UK and Canada
                </div>
                <!-- End Header Top Links -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center text-sm-center text-md-end">
                <div class="block-currency-wrapper">
                    <ul class="list-inline list-unstyled mx-0">
                        <li class="">
                            <a href="tel:+61731032369" class="text-decoration-none" aria-label="US Toll Free">+61 7 3103 2369
                            </a>
                        </li>
                        <li class="d-none d-sm-inline-block px-md-3">
                            <a href="javascript:void(0);"
                               class="bookmark-btn d-inline-flex justify-content-center align-items-center text-decoration-none fw-normal"
                               onclick="bookmarkmsg();">
                                Bookmark
                            </a>
                        </li>
                        <li class="px-md-0">
                            <div class="track-btn">
                                <a href="https://genericmedsaustralia.aftership.com/" target="_blank"
                                   class="text-decoration-none fw-normal">Track
                                    Order</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>