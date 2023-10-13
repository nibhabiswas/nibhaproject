
<?php 
// Template Name:home
get_header(); 
 ?>



 <!-- banner section start -->
 <div class="banner_section">
         <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-2">
                           <div class="round"><img src="<?php echo get_template_directory_uri();?>/images/round-icon.png"></div>
                           <p class="number_text">02</p>
                           <div class="line"><img src="<?php echo get_template_directory_uri();?>/images/line.png"></div>
                           <p class="number_text">02</p>
                           <div class="round"><img src="<?php echo get_template_directory_uri();?>/images/round-icon.png"></div>
                        </div>
                        <div class="col-sm-5">
                           <div class="taital_main">
                              <h2 class="construction_text">CONSTRUCTION</h2>
                              <h1 class="building_text">BUILDING</h1>
                              <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure </p>
                              <div class="contact_bt"><a href="#">CONTACT US</a></div>
                              <div class="get_bt"><a href="#">GET A QUOTE</a></div>
                           </div>
                        </div>
                        <div class="col-sm-5">
                           <div><img src="<?php echo get_template_directory_uri();?>/images/banner-bg.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-2">
                           <div class="round"><img src="<?php echo get_template_directory_uri();?>/images/round-icon.png"></div>
                           <p class="number_text">02</p>
                           <div class="line"><img src="<?php echo get_template_directory_uri();?>/images/line.png"></div>
                           <p class="number_text">02</p>
                           <div class="round"><img src="<?php echo get_template_directory_uri();?>/images/round-icon.png"></div>
                        </div>
                        <div class="col-sm-5">
                           <div class="taital_main">
                              <h2 class="construction_text">CONSTRUCTION</h2>
                              <h1 class="building_text">BUILDING</h1>
                              <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure </p>
                              <div class="contact_bt"><a href="#">CONTACT US</a></div>
                              <div class="get_bt"><a href="#">GET A QUOTE </a></div>
                           </div>
                        </div>
                        <div class="col-sm-5">
                           <div><img src="<?php echo get_template_directory_uri();?>/images/banner-bg.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-2">
                           <div class="round"><img src="<?php echo get_template_directory_uri();?>/images/round-icon.png"></div>
                           <p class="number_text">02</p>
                           <div class="line"><img src="<?php echo get_template_directory_uri();?>/images/line.png"></div>
                           <p class="number_text">02</p>
                           <div class="round"><img src="<?php echo get_template_directory_uri();?>/images/round-icon.png"></div>
                        </div>
                        <div class="col-sm-5">
                           <div class="taital_main">
                              <h2 class="construction_text">CONSTRUCTION</h2>
                              <h1 class="building_text">BUILDING</h1>
                              <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure </p>
                              <div class="contact_bt"><a href="#">CONTACT US</a></div>
                              <div class="get_bt"><a href="#">GET A QUOTE </a></div>
                           </div>
                        </div>
                        <div class="col-sm-5">
                           <div><img src="<?php echo get_template_directory_uri();?>/images/banner-bg.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="<?php echo get_template_directory_uri();?>/#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="<?php echo get_template_directory_uri();?>/#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <?php
      while(have_posts()){
         the_post();

      }
      

