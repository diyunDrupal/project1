<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!doctype html>
<!--[if IE 7 ]>    <html lang="zh-CN" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="zh-CN" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="zh-CN" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php print $language->language; ?>" class="no-js"> <!--<![endif]-->

<head>

  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
<?php print $styles; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
   
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


</head>
<body >

     
  


<div class="site_wrapper">

  <?php print $page; ?>
  </div><!--end wrapper-->



  <!-- ######### JS FILES ######### -->

<?php print $scripts; ?>
<?php $current_path = drupal_get_path_alias($_GET["q"]); ?>
<?php if  (($current_path != 'gallery/99')&&($current_path != 'gallery/100')): ?> 
     

<script type="text/javascript" src="/sites/all/themes/goranz/js/universal/jquery.js"></script>
<script type="text/javascript" src="/sites/all/themes/goranz/js/mainmenu/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="/sites/all/themes/goranz/js/jcarousel/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/sites/all/themes/goranz/js/tabs/tabs.js"></script>



<?php endif; ?>






<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>

<!--<script type="text/javascript">
    $(document).ready(function(){
 
            $('.breadcrumb a').each(function(index) {

              $item = $(this);
              $item_value = $(this).text();
              $item.html('<span>' + $item_value + '</span>');

            });

            $('.breadcrumb a:first').addClass('first_bc');
            $('.breadcrumb a:last').addClass('last_bc');
            $('ul.links').addClass('arrowed');
            $('.sidebar .block-search .button_search').after($('.sidebar .block-search input[name="search_block_form"]'));
 
    });
</script>-->

<!-- jquery jcarousel -->
<script type="text/javascript">

  jQuery(document).ready(function() {
      jQuery('#mycarousel').jcarousel();
  });
  
  jQuery(document).ready(function() {
      jQuery('#mycarouseltwo').jcarousel();
  });
  
  jQuery(document).ready(function() {
      jQuery('#mycarouselthree').jcarousel();
  });
  
  jQuery(document).ready(function() {
      jQuery('#mycarouselfour').jcarousel();
  });
  
</script>

<!-- accordion -->
<script type="text/javascript" src="/sites/all/themes/goranz/js/accordion/custom.js"></script>

<?php if ( $is_front ): ?>

  <link rel="stylesheet" type="text/css" href="/sites/all/themes/goranz/js/tabs/tabs.css" />
<!-- REVOLUTION SLIDER -->

<script type="text/javascript" src="/sites/all/themes/goranz/js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">

  var tpj=jQuery;
  tpj.noConflict();

  tpj(document).ready(function() {

  if (tpj.fn.cssOriginal!=undefined)
    tpj.fn.css = tpj.fn.cssOriginal;

    var api = tpj('.fullwidthbanner').revolution(
      {
        delay:9000000,
        startwidth:1170,
        startheight:600,

        onHoverStop:"on",           // Stop Banner Timet at Hover on Slide on/off

        thumbWidth:100,             // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
        thumbHeight:50,
        thumbAmount:3,

        hideThumbs:200,
        navigationType:"none",        // bullet, thumb, none
        navigationArrows:"solo",        // nexttobullets, solo (old name verticalcentered), none

        navigationStyle:"round",        // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


        navigationHAlign:"center",        // Vertical Align top,center,bottom
        navigationVAlign:"bottom",          // Horizontal Align left,center,right
        navigationHOffset:30,
        navigationVOffset:-40,

        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:0,
        soloArrowLeftVOffset:0,

        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:0,
        soloArrowRightVOffset:0,

        touchenabled:"on",            // Enable Swipe Function : on/off


        stopAtSlide:-1,             // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
        stopAfterLoops:-1,            // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

        hideCaptionAtLimit:0,         // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
        hideAllCaptionAtLilmit:0,       // Hide all The Captions if Width of Browser is less then this value
        hideSliderAtLimit:0,          // Hide the whole slider, and stop also functions if Width of Browser is less than this value


        fullWidth:"on",

        shadow:0                //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

      });

});



</script>
<?php endif; ?> 

<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){
$(".controlls li a").click(function(e) {
    e.preventDefault();
    var id = $(this).attr('class');
    $('#slider div:visible').fadeOut(500, function() {
        $('div#' + id).fadeIn();
    })
});
});//]]>  

</script>




<?php if  ( !$is_front ): ?> 


<!-- tabs css -->
    <link rel="stylesheet" type="text/css" href="/sites/all/themes/goranz/js/tabs/tabwidget/tabwidget.css" />


    <!-- tab widget -->
<script type="text/javascript" src="/sites/all/themes/goranz/js/tabs/tabwidget/tabwidget.js"></script>









<?php endif; ?>



</body>
</html>
