// append-header

jQuery(document).ready(function() {
 	if(jQuery(window).width() < 1025) {
  		jQuery(".headmenu").prependTo(jQuery(".elementor-image")); 
 	}
        jQuery(".page_title_breadcrumb").prependTo(jQuery(".page_title_sidebar_breadcrumb"));       //blog page
        jQuery(".page_title").prependTo(jQuery(".page_title_sidebar"));                             //blog page
        jQuery(".blog_content_column .entry-title").prependTo(jQuery(".page_title_sidebar"));       //single blog page
        jQuery(".archive_content_column .page-title").prependTo(jQuery(".page_title_sidebar"));     //archive page
 });
// append-header

//prepend-blog-sidebar
jQuery(document).ready(function() {
 	if(jQuery(window).width() < 768) {
  		jQuery(".content_column").prependTo(jQuery(".blog_lr_column")); 
          jQuery(".archive_content_column").prependTo(jQuery(".blog_lr_column")); 
          jQuery(".blog_content_column").prependTo(jQuery(".blog_lr_column")); 
          //jQuery(".bdt-slideshow-item .bdt-width-1-1:first-child").appendTo(jQuery(".bdt-image-match-height-mobile--yes .bdt-prime-slider .bdt-match-height")); 
 	}
 });
//prepend-blog-sidebar

// footer //
function SidebarFooterToggle(){ 
"use strict";   
jQuery('.ekit-template-content-footer .footerheading').on( "click",function () {
if(jQuery(this).parent().hasClass('toggled-on')){      
        jQuery(this).parent().removeClass('toggled-on');
        jQuery(this).parent().addClass('toggled-off');
}else {
        jQuery(this).parent().addClass('toggled-on');
        jQuery(this).parent().removeClass('toggled-off');
}
return (false);
});
}
jQuery(document).ready(function() { "use strict";  SidebarFooterToggle()});

// footer //


// sidebar //
function SidebarWidgetToggle(){ 
"use strict";   
jQuery('.blog_lr_column .widget-title').on( "click",function () {
if(jQuery(this).parent().hasClass('toggled-on')){      
        jQuery(this).parent().removeClass('toggled-on');
        jQuery(this).parent().addClass('toggled-off');
}else {
        jQuery(this).parent().addClass('toggled-on');
        jQuery(this).parent().removeClass('toggled-off');
}
return (false);
});
}
jQuery(document).ready(function() { "use strict";  SidebarWidgetToggle()});
// sidebar //

//scroll
jQuery(document).ready(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 100) {
                jQuery('#scroll').fadeIn();
            } else {
                jQuery('#scroll').fadeOut();
            }
        });
        jQuery('#scroll').click(function () {
                jQuery("html, body").animate({scrollTop: 0}, 600);
            return false;
        });
});
//scroll


// blog
jQuery('.home .ekit-blog-posts-content').slick({
       // dots: true,
        infinite: false,
        speed: 300,
        rows: 1,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
              breakpoint: 1024,
              settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          },
          {
              breakpoint: 768,
              settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
              breakpoint: 480,
              settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
//blog













