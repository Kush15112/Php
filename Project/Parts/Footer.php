<?php 
$connection= mysqli_connect ("localhost", "root", "", "tbl_project"); 
if($_POST){
      $email = $_POST['EMAIL'];

      $eq = mysqli_query($connection,"INSERT INTO `tbl_subscribe`( `user_email`) VALUES ('$email')") or die("Error". mysqli_error ($connection) ) ;
      if($eq)
      {
          echo "<script>alert('Subscribe Email Submitted Successful.');</script>"; 
      }
}
?>
<footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/logo.png" alt=""></a>
                     <p>Welcome to Lifecare.We care for your health.Our unique combination of research and education produces better health outcomes for our patients.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lifecare PVT ltd.</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> Lifecare@gmail.com</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> 108</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="subcriber-info">
                     <h3>SUBSCRIBE</h3>
                     <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                      <div class="subcriber-box">
                        <form id="mc-form" class="mc-form" action='' method='post'>
                           <div class="newsletter-form">
                              <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                              <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                              <div class="clearfix"></div> 
                              <!-- mailchimp-alerts Start -->
                              <div class="mailchimp-alerts">
                                 <div class="mailchimp-submitting"></div>
                                 <!-- mailchimp-submitting end -->
                                 <div class="mailchimp-success"></div>
                                 <!-- mailchimp-success end -->
                                 <div class="mailchimp-error"></div>
                                 <!-- mailchimp-error end -->
                              </div>
                              <!-- mailchimp-alerts end -->
                           </div>
                        </form>
                     </div> 
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>Managed by Kush Modi © 2021 Lifecare. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://gmail.com/"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="https://in.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>