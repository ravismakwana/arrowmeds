(function( $ ){
    class AsgardWoocommerce {
        constructor() {
            this.slideEffectAjax();
        }

        slideEffectAjax(){
            jQuery('.top-cart-contain').on('mouseenter',function() {
                jQuery(this).find(".top-cart-content").stop(true, true).show();
            });
            jQuery('.top-cart-contain').on('mouseleave',function() {
                jQuery(this).find(".top-cart-content").stop(true, true).hide();
            });
        }
    }

    new AsgardWoocommerce();

})(jQuery)