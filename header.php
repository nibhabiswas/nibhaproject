<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Gravitao</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>

      <!-- section header start -->
      <div class="header_section">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
               <?php if( get_field('logo') ): ?>
    

    <div class="logo"><a href="index.php">   <img src="<?php  echo the_field('logo'); ?>" alt="kkk" ></a></div>
    <?php endif; ?>
                 </div>

               <div class="col-md-9">
                  <div class="menu_text">
                     <?php wp_nav_menu(array('theme_location'=>'primary-menu')) ?>
            </div>
         </div>
      </div>
      <!-- section header end -->

      

        <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.0.0.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?php echo get_template_directory_uri();?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
      <!-- javascript --> 
      <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>