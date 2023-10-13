<div class="contact_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="contact_bg">
                     <div class="input_main">
                        <div class="container">
                           <h2 class="request_text">REQUEST A CALL BACK</h2>
                           <form action="">
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Your Name" name="Name">
                              </div>
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Email" name="Email">
                              </div>
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Phone" name="Email">
                              </div>
                           <form action="">
                              <div class="form-group">
                                 <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
                              </div>
                           </form>
                           </form>
                        </div>
                     </div>
                     <div class="send_bt"><a href="">SEND</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
         </div>
         <div class="footer_section_2">
            <div class="container">
               <h2 class="addres_text">Addres</h2>
               <div class="row map_addres">
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="<?php echo get_template_directory_uri();?>/images/map-icon.png"><span class="map_icon">No.123 Chalingt Gates, Supper market New York</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="<?php echo get_template_directory_uri();?>/images/phone-icon.png"><span class="map_icon">( +71 7986543234 )</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="<?php echo get_template_directory_uri();?>/images/email-icon.png"><span class="map_icon">demo@gmail.com</span></div>
                  </div>
               </div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/in-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
      </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
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
