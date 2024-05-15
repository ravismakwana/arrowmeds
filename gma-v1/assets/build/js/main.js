/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/menu/index.js":
/*!******************************!*\
  !*** ./src/js/menu/index.js ***!
  \******************************/
/***/ (function() {

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
(function ($) {
  var MenuOption = /*#__PURE__*/function () {
    function MenuOption() {
      _classCallCheck(this, MenuOption);
      this.initMenu();
      this.canvasMenu();
      this.megaCategoryMenu();
      this.bookmarkmsg();
    }
    return _createClass(MenuOption, [{
      key: "initMenu",
      value: function initMenu() {
        if ($('.navbar-main').length) {
          $('.navbar-main .navbar-nav a').on('click', function () {
            $('.navbar-main .navbar-nav').find('li.active a').removeClass('active');
            $(this).parent('li a').addClass('active');
          });
        }
      }
    }, {
      key: "canvasMenu",
      value: function canvasMenu() {
        if ($('.canvas-btn').length) {
          $('.canvas-btn').on('click', function (e) {
            $('.accordion-menu .sub-menu').hide();
          });
        }

        // Toggle the sub-menu on click
        if ($('.accordion-menu').length) {
          $('.accordion-menu li.menu-item.active .arrow').click();
          $(document).on('click', '.accordion-menu .arrow', function () {
            var jQueryparent = jQuery(this).parent();
            jQuery(this).next().stop().slideToggle();
            jQueryparent.toggleClass('open');
          });
        }
      }
    }, {
      key: "megaCategoryMenu",
      value: function megaCategoryMenu() {
        if ($('.mega-menu-title').length) {
          // Product category menu open when click on it - Start
          $('.navbar-main .mega-menu-title').hover(function () {
            $('#mega_menu_block').addClass('d-block visible');
            $('#mega_menu_block').removeClass('d-none invisible');
          }, function () {
            $('#mega_menu_block').removeClass('d-block visible');
            $('#mega_menu_block').addClass('d-none invisible');
          });
          $('#mega_menu_block').hover(function () {
            $(this).addClass('d-block visible');
            $(this).removeClass('d-none invisible');
          }, function () {
            $(this).removeClass('d-block visible');
            $(this).addClass('d-none invisible');
          });
        }
      }
    }, {
      key: "bookmarkmsg",
      value: function bookmarkmsg() {
        if ($('.bookmark-btn').length) {
          $(document).on('click', '.bookmark-btn', function () {
            alert('Press Ctrl+D to bookmark this page.');
          });
        }
      }
    }]);
  }();
  new MenuOption();
})(jQuery);

/***/ }),

/***/ "./src/js/woo/index.js":
/*!*****************************!*\
  !*** ./src/js/woo/index.js ***!
  \*****************************/
/***/ (function() {

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
(function ($) {
  var AsgardWoocommerce = /*#__PURE__*/function () {
    function AsgardWoocommerce() {
      _classCallCheck(this, AsgardWoocommerce);
      this.slideEffectAjax();
      this.addToCartAjax();
      this.dropZoneCheckout();
    }
    return _createClass(AsgardWoocommerce, [{
      key: "slideEffectAjax",
      value: function slideEffectAjax() {
        jQuery('.top-cart-contain').on('mouseenter', function () {
          jQuery(this).find('.top-cart-content').stop(true, true).show();
        });
        jQuery('.top-cart-contain').on('mouseleave', function () {
          jQuery(this).find('.top-cart-content').stop(true, true).hide();
        });
      }
    }, {
      key: "addToCartAjax",
      value: function addToCartAjax() {
        if (jQuery('.btn-add-to-cart-ajax').length) {
          $(document).on('click', '.btn-add-to-cart-ajax', function () {
            var data_variation,
              product_id,
              variation_id,
              qty,
              variation_key,
              variation_val,
              var_data = '';
            var var_data = {};
            product_id = jQuery(this).attr('data-product_id');
            variation_id = jQuery(this).attr('data-variation_id');
            qty = jQuery(this).attr('data-quantity');
            //console.log("Product ID = "+product_id+ "Variation ID = "+ variation_id + "Quantity = "+ qty);
            data_variation = jQuery(this).attr('data-variation');
            var_data = data_variation.split('=');
            variation_key = var_data['0'];
            variation_val = var_data['1'];
            var_data[variation_key] = variation_val;
            //jQuery(this).prop("disabled", true);
            var btn = jQuery(this);
            jQuery(this).html('<div class="spinner-border spinner-border-sm text-danger" role="status"> <span class="visually-hidden">Loading...</span> </div>');
            btn.parent('.footable-last-visible').find('.checkout_button').remove();
            console.log('Product ID = ' + product_id + ' Variation ID = ' + variation_id + ' Quantity = ' + qty + ' variation_key=' + variation_key + ' variation_val=' + variation_val);
            jQuery.ajax({
              url: ajax_object.ajax_url,
              data: {
                action: 'woocommerce_add_variation_to_cart',
                product_id: product_id,
                variation_id: variation_id,
                quantity: qty,
                variation: var_data
              },
              type: 'POST',
              success: function success(data) {
                btn.html('<svg width="25" height="25" fill="var(--bs-danger)"><use href="#icon-cart"></use></svg>');
                setTimeout(function () {
                  btn.html('<svg class="d-block mx-auto m-0" width="25" height="25" fill="var(--bs-danger)"> <use href="#icon-cart"></use> </svg>');
                }, 1000);
                console.log(ajax_object.checkout_url);
                btn.parent('.footable-last-visible').append('<a href="' + ajax_object.checkout_url + '" title="Checkout" alt="Checkout" class="btn checkout_button p-0 ms-2" ><svg width="25" height="25" fill="var(--bs-primary)"><use href="#icon-circle-check"></use></svg></a>');
                jQuery('.mini-cart').replaceWith(data.fragments['.mini-cart']);
                jQuery('div.button-group-single-product').replaceWith(data.fragments['div.button-group-single-product']);
                jQuery('div.widget_shopping_cart_content').replaceWith(data.fragments['div.widget_shopping_cart_content']);
                jQuery('.top-cart-content').css('display', 'block');
              }
            });
          });
        }
      }
    }, {
      key: "dropZoneCheckout",
      value: function dropZoneCheckout() {
        var prescription_upload_url = ajax_object.ajax_url + '?action=upload_prescription';
        var prescription_delete_url = ajax_object.ajax_url + '?action=delete_prescription';
        /* file upload at checkout page*/
        if (jQuery('#uploader').length) {
          $('#uploader').uploadFile({
            url: prescription_upload_url,
            fileName: 'prescription',
            showDelete: true,
            returnType: 'json',
            multiple: false,
            dragDrop: true,
            uploadButtonClass: 'ajax-file-upload lh-1 bg-primary',
            dragDropContainerClass: 'ajax-upload-dragdrop w-100',
            allowedTypes: 'pdf,jpg,jpeg,png',
            onSuccess: function onSuccess(files, data, xhr, pd) {
              $('#prescription_name').val(data);
            },
            deleteCallback: function deleteCallback(data, pd) {
              $.post(prescription_delete_url, {
                op: 'delete',
                name: data
              }, function (resp, textStatus, jqXHR) {});
              pd.statusbar.hide(); //You choice.
            }
          });
        }
      }
    }]);
  }();
  new AsgardWoocommerce();
})(jQuery);

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _menu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./menu */ "./src/js/menu/index.js");
/* harmony import */ var _menu__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_menu__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _woo__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./woo */ "./src/js/woo/index.js");
/* harmony import */ var _woo__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_woo__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../sass/main.scss */ "./src/sass/main.scss");
// import './clock';
// import './carousel';


// import './posts/loadmore';

// Styles


// Images
// import '../img/patterns/bg.jpeg';
// import '../img/patterns/c1-150x150.jpeg';
// import '../img/patterns/c2-150x150.jpeg';
// import '../img/patterns/c3-150x150.jpeg';
// import '../img/email.webp';
// import '../img/payment.webp';
// import '../img/secure-with-macfee.webp';
}();
/******/ })()
;
//# sourceMappingURL=main.js.map