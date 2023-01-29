

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>Math<i>BAZI</i></h3>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact" id="contact" data-aos="fade-up">
            <h3>Contact Us</h3>
              <p>
   
                  <strong>Phone:</strong> +917xxxxxxxx6 <br>

                  <strong>Whatsapp:</strong><a href='https://api.whatsapp.com/send?phone=917xxxxxxx5' target="_blank" rel="noopener noreferrer"> 7291934297 or click here</a><br>
              </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
                <li class="active"><i class="bx bx-chevron-right"></i><a href="../../../">MathBAZI Home</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="index.php">Account Recharge Home</a></li>
                <!-- <li><i class="bx bx-chevron-right"></i><a href="faq.php">F.A.Q</a></li> -->
                <li><i class="bx bx-chevron-right"></i><a href="#contact">Contact Us</a></li>
                
                <?php
              

                          if (isset($_SESSION[$putcode_session_array_key]['IsLogin']))
                          {
                            echo '<li><i class="bx bx-chevron-right"></i><a href="logout.php">Logout</a></li>';
                            if($page_title == "Recharge")
                              {
                                echo '<li><i class="bx bx-chevron-right"></i><a href="search.php" target="_blank">Search User</a></li>'; 
                              }
                          }
                          else
                          {
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
        &copy; Copyright <strong><span>Education</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Math<i>BAZI</i></a>
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