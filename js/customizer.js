///**
// * File customizer.js.
// *
// * Theme Customizer enhancements for a better user experience.
// *
// * Contains handlers to make Theme Customizer preview reload changes asynchronously.
// */
//
//( function( $ ) {
//
//    wp.customize( 'fw_options[logo_text]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	jQuery( '.logo a' ).text(newval[0].value);
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[logo_image]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	jQuery( '.logo a' ).html('<img src="'+newval[1].value+'" alt="">');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[logo_image_alternative]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	jQuery( '.footer-logo a' ).html('<img src="'+newval[1].value+'" alt="">');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[header_background_color]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#header_background_color_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="header_background_color_style"></style>');
//            	} 
//            	jQuery( '#header_background_color_style' ).html('.header,.header.fixed { background-color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[wrap_inner]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#wrap_inner_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="wrap_inner_style"></style>');
//            	} 
//            	jQuery( '#wrap_inner_style' ).html('@media (min-width: 1200px) {.fw-container {width: '+newval[0].value+'px;}}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[header_text_color]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#header_text_color_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="header_text_color_style"></style>');
//            	} 
//            	jQuery( '#header_text_color_style' ).html('.header { color: '+newval[0].value+';} .nav-button:after, .nav-button:before, .nav-button div { background: '+newval[0].value+' } ');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[footer_background_color]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#footer_background_color_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="footer_background_color_style"></style>');
//            	} 
//            	jQuery( '#footer_background_color_style' ).html('.footer { background-color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[footer_text_color]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#footer_text_color_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="footer_text_color_style"></style>');
//                } 
//                jQuery( '#footer_text_color_style' ).html('.footer { color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[nav_active]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#nav_active_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="nav_active_style"></style>');
//                } 
//                jQuery( '#nav_active_style' ).html('.full-screen-nav .fsn-container > ul > li.current-menu-item > a, .full-screen-nav .fsn-container > ul > li.current-menu-parent > a, .full-screen-nav .fsn-container > ul > li.current-menu-ancestor > a,.navigation > ul > li.current-menu-item > a, .navigation > ul > li.current-menu-ancestor > a, .navigation > ul > li:hover > a,.navigation .sub-menu li.current-menu-item > a, .navigation .sub-menu li.current-menu-ancestor > a, .navigation .sub-menu li:hover > a, .navigation .sub-menu li.current-menu-item.menu-item-has-children:after, .navigation .sub-menu li:hover.menu-item-has-children:after, .navigation .children li.current_page_item > a, .navigation .children li.current-menu-ancestor > a, .navigation .children li:hover > a, .navigation .children li.current_page_item.page_item_has_children:after, .navigation .children li:hover.page_item_has_children:after { color: '+newval[0].value+';} .navigation > ul > li > .sub-menu, .navigation > ul > li > .children { border-top-color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[nav_submenu_bg1]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#nav_submenu_bg1_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="nav_submenu_bg1_style"></style>');
//                } 
//                jQuery( '#nav_submenu_bg1_style' ).html('.navigation > ul > li .sub-menu, .navigation > ul > li .children { background-color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[nav_submenu_bg2]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#nav_submenu_bg2_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="nav_submenu_bg2_style"></style>');
//                } 
//                jQuery( '#nav_submenu_bg2_style' ).html('.navigation > ul > li .sub-menu .sub-menu, .navigation > ul > li .children .children { background-color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[nav_submenu_bg3]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#nav_submenu_bg3_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="nav_submenu_bg3_style"></style>');
//                } 
//                jQuery( '#nav_submenu_bg3_style' ).html('.navigation > ul > li .sub-menu .sub-menu .sub-menu, .navigation > ul > li .children .children .children { background-color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[nav_submenu_text1]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#nav_submenu_text1_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="nav_submenu_text1_style"></style>');
//                } 
//                jQuery( '#nav_submenu_text1_style' ).html('.navigation > ul > li .sub-menu, .navigation > ul > li .children { color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[nav_submenu_text2]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#nav_submenu_text2_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="nav_submenu_text2_style"></style>');
//                } 
//                jQuery( '#nav_submenu_text2_style' ).html('.navigation > ul > li .sub-menu .sub-menu, .navigation > ul > li .children .children { color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[nav_submenu_text3]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//                if (jQuery( '#nav_submenu_text3_style' ).length == 0) {
//                    jQuery( 'body' ).append('<style id="nav_submenu_text3_style"></style>');
//                } 
//                jQuery( '#nav_submenu_text3_style' ).html('.navigation > ul > li .sub-menu .sub-menu .sub-menu, .navigation > ul > li .children .children .children { color: '+newval[0].value+';}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[typography_body]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#typography_body_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="typography_body_style"></style>');
//            	} 
//            	jQuery( '#typography_body_style' ).html('body { font-size: '+newval[0].value+'px; color: '+newval[1].value+'}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[typography_h1]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#typography_h1_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="typography_h1_style"></style>');
//            	} 
//            	jQuery( '#typography_h1_style' ).html('h1,.h1 { font-size: '+newval[0].value+'px;}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[typography_h2]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#typography_h2_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="typography_h2_style"></style>');
//            	} 
//            	jQuery( '#typography_h2_style' ).html('h2,.h2 { font-size: '+newval[0].value+'px;}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[typography_h3]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#typography_h3_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="typography_h3_style"></style>');
//            	} 
//            	jQuery( '#typography_h3_style' ).html('h3,.h3 { font-size: '+newval[0].value+'px;}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[typography_h4]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#typography_h4_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="typography_h4_style"></style>');
//            	} 
//            	jQuery( '#typography_h4_style' ).html('h4,.h4 { font-size: '+newval[0].value+'px;}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[typography_h5]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#typography_h5_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="typography_h5_style"></style>');
//            	} 
//            	jQuery( '#typography_h5_style' ).html('h5,.h5 { font-size: '+newval[0].value+'px;}');
//            }
//        } );
//    } );
//
//    wp.customize( 'fw_options[typography_h6]', function( value ) {
//        value.bind( function( newval ) {
//            newval = JSON.parse(newval);
//            if(newval[0].value) {
//            	if (jQuery( '#typography_h6_style' ).length == 0) {
//            		jQuery( 'body' ).append('<style id="typography_h6_style"></style>');
//            	} 
//            	jQuery( '#typography_h6_style' ).html('h6,.h6 { font-size: '+newval[0].value+'px;}');
//            }
//        } );
//    } );
//
//} )( jQuery );
