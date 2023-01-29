

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Eat Maths</h3>
         
          </div>





          <div class="col-lg-3 col-md-6 footer-contact" id="contact" data-aos="fade-up">
            <h3>Contact Us</h3>
            <p>
              <!-- A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br> -->
              <strong>Phone:</strong> +917463918936 <br>

              <strong>Whatsapp:</strong><a href='https://api.whatsapp.com/send?phone=917291934297' target="_blank" rel="noopener noreferrer"> 7291934297 or click here</a><br>

               
            </p>
          </div>






          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
             


          <li class="active"><i class="bx bx-chevron-right"></i><a href="../">Eat Maths Home</a></li>
          <li><i class="bx bx-chevron-right"></i><a href="index.php">Put Code Home</a></li>
          <li><i class="bx bx-chevron-right"></i><a href="#contact">Contact Us</a></li>
          
          <?php
                if (isset($_SESSION[$course_session_array_key]['IsLogin'])) {
                  echo '<li><i class="bx bx-chevron-right"></i><a href="logout.php">Logout</a></li>';
                  echo '<li><i class="bx bx-chevron-right"></i><a href="search.php" target="_blank">Search User</a></li>';
                  
                } else {
                  echo '<li><i class="bx bx-chevron-right"></i><a href="loginform.php">Login</a></li>';
                }
                ?>



            </ul>
          </div>




        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $pathRealtiveToAssetFolder;?>assets/js/main.js"></script>

</body>

</html>