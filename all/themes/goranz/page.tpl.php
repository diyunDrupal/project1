

   
<!-- HEADER -->
<header id="header">
<div class="main_header">

    <!-- Top header bar -->
    <div id="topHeader">
    
    <div class="wrapper">
         
        <div class="top_contact_info">
        
        <div class="container">
        
            <div class="date_wrap">



            <ul class="tci_list">
                    <li><i class="fa fa-phone" title="Phone"></i>   (123) 456-789</li>
                    
                    <li><i class="fa fa-envelope" title="Email"></i> info@yourcompany.com</li>
                    
                </ul>
            </div><!-- end date -->



            <ul class="social-icons tci_list">
                <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="icon-dribbble"></i></a></li>
                <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>

                <!--<li class="empty">Language:</li>-->
                                <li class="country_select"><?php print render($page['lang_menu']); ?>

                                </li>
                
            </ul>
        

            
        </div>
        
        </div><!-- end top contact info -->
            
    </div>
    
    </div>

    <!-- Top header bar -->
    <div id="trueHeader">
    
        <div class="wrapper">
        
             <div class="container">
            
                <!-- Logo -->
                <div class="one_fourth zindex1"><a href="index.html" id="logo">Goranz</a></div>
                
                <!-- Menu -->
                <div class="three_fourth last">
                 
                            <?php print render($page['main_menu']); ?>
                 
                </div>
                
                
                
                
            </div>
        
        </div>
    </div>
</div>
</header><!-- end header -->
   

<div class="clearfix"></div>
 
<!-- Slider
======================================= -->  

<?php if ($page['slider']): ?>
      

          <?php print render($page['slider']); ?>
          <!--enable slider timer -->
          
    <?php endif; ?>

<div class="clearfix"></div>

 <!--< ?php print render(drupal_get_form("user_login")); ?>



  <div class="domain_search">

        <div class="container">

                <div class="goal">
               <p>我们的目标是成为中国的Lullabot，帮助更多的个人、企业、机构使用Drupal，用好Drupal。</p>

                
                </div>         
        </div>
    </div>-->
<?php if ( !$is_front ): ?>
<div class="page_title1">
    
</div>
<div class="page_title">
    <div class="container">
        <div class="title"><h1><?php print $title; ?></h1></div>
        <div class="pagenation"><?php if (!empty($breadcrumb)): print $breadcrumb; endif;?></div>
    </div>
</div><!-- end page title --> 
<div class="container">
    <div class="left_sidebar">
            
            <?php if ($page['sidebar_first']): ?>
      

                <?php print render($page['sidebar_first']); ?>
                
                  
            <?php endif; ?>
    </div>
    <div class="content_right">
            <?php if ($page['content']): ?>
      

                <?php print render($page['content']); ?>
                
                  
            <?php endif; ?>
    </div>
</div>

<?php endif; ?>


 <?php if ( $is_front ): ?> 
<div class="features_sec04">
<div class="container">
           
            <div class="two_third2"> 
                <?php print my_show_view('product_scope_view'); ?>
            
            </div>  

            <div class="one_third2 last">
                <?php print render($page['home_news']); ?>
                   
                    
            </div>
            


</div>
</div><!-- end features section 4 -->
<?php endif; ?> 

<div class="clearfix mar_top1"></div>

<div class="bottom_section">


    
    
    
    <div class="hostplan_offers">
    
        <div class="container">

            <div class="box"><strong>What's Hot</strong></div>
        
        <div class="clearfix"></div>

            
        
<?php print render($page['our_clients']); ?>
        
            <!--<div class="clients">
              
                <ul id="mycarouselthree" class="jcarousel-skin-tango">
                  
                    <li>

                        <a   href="#">
                            <div class="overflow-hidden">
                                <img src="../sites/all/themes/goranz/images/vladstudio_looove_480x320.jpg" alt="产品型号" />
                            </div>
                        </a>
                        <h3>产品型号</h3>

                    </li> 
                    <li>

                        <a   href="#">
                            <div class="overflow-hidden">
                                <img src="../sites/all/themes/goranz/images/vladstudio_looove_480x320.jpg" alt="产品型号" />
                            </div>
                        </a>
                        <h3>产品型号</h3>

                    </li> 
                    <li>

                        <a   href="#">
                            <div class="overflow-hidden">
                                <img src="../sites/all/themes/goranz/images/vladstudio_looove_480x320.jpg" alt="产品型号" />
                            </div>
                        </a>
                        <h3>产品型号</h3>

                    </li> 
                    <li>

                        <a   href="#">
                            <div class="overflow-hidden">
                                <img src="../sites/all/themes/goranz/images/vladstudio_looove_480x320.jpg" alt="产品型号" />
                            </div>
                        </a>
                        <h3>产品型号</h3>

                    </li> 
                    <li>

                        <a   href="#">
                            <div class="overflow-hidden">
                                <img src="../sites/all/themes/goranz/images/vladstudio_looove_480x320.jpg" alt="产品型号" />
                            </div>
                        </a>
                        <h3>产品型号</h3>

                    </li> 
                    <li>

                        <a   href="#">
                            <div class="overflow-hidden">
                                <img src="../sites/all/themes/goranz/images/vladstudio_looove_480x320.jpg" alt="产品型号" />
                            </div>
                        </a>
                        <h3>产品型号</h3>

                    </li> 
                    <li>

                        <a   href="#">
                            <div class="overflow-hidden">
                                <img src="../sites/all/themes/goranz/images/vladstudio_looove_480x320.jpg" alt="产品型号" />
                            </div>
                        </a>
                        <h3>产品型号</h3>

                    </li> 

                    

                      
                  </ul>
            
            </div> end clients -->
        
        </div>
    
    </div><!-- end hostplan_offers section-->
    
    

    
<div class="clearfix"></div>
    
</div><!-- end bottom section -->













<div class="footer">

    <div class="container">

        <div class="center">
                <!--<p class="sub-heading-upper">chanpintuijian</p>-->
            <h3>关注我们</h3>
            <ul class="social-icons">
                <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="icon-dribbble"></i></a></li>
                <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>


            </ul>
        </div>
        
        <div class="one_fourth">
        
            <?php print render($page['footer_firstcolumn']); ?>
            
        </div><!-- end section -->
        
        <div class="one_fourth">
        
            <?php print render($page['footer_secondcolumn']); ?>
            
        </div><!-- end section -->
        
        <div class="one_fourth">
        
            <?php print render($page['footer_thirdcolumn']); ?>
              
        </div><!-- end section -->
        
        
        <div class="one_fourth last">
        
            <?php print render($page['footer_fourthcolumn']); ?>
            

              
        </div><!-- end section -->
        <div class="clearfix"></div>

<div class="copyright_info">

    <div class="container"> 
   
        
        
            <b>Copyright © 2013 xxx.com. All rights reserved.  <a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a></b>
            
        
    

    
    </div>
    
</div>
          
    </div>


</div>



<div class="clearfix"></div>

<!-- Footer
======================================= -->



<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->








 
