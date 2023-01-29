<?php

// include 'check_if_user_is_logedin.php';

$page_title = 'F.A.Q';
include 'header.php';

?>




    <!-- ======= Syllabus Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Question</h2>
        </div>

        <div class="accordion-list">

        <?php $i = 1; ?>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <a data-toggle="collapse" href="#accordion-list-<?php echo$i;?>" class="collapsed"><b>F.A.Q - <?php echo$i;?></b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-<?php echo$i;?>" class="collapse show" data-parent="#accordion-list-<?php echo$i;?>">
              <hr>
              <p>Please call if you face any kind of problem</p>
              </div>
            </li>
          </ul>
          <?php $i = $i + 1;?>


          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <a data-toggle="collapse" href="#accordion-list-<?php echo$i;?>" class="collapsed"><b>F.A.Q - <?php echo$i;?></b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-<?php echo$i;?>" class="collapse show" data-parent="#accordion-list-<?php echo$i;?>">
              <hr>
              <p>You can whatsapp us.</p>
              </div>
            </li>
          </ul>
          <?php $i = $i + 1;?>


          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <a data-toggle="collapse" href="#accordion-list-<?php echo$i;?>" class="collapsed"><b>F.A.Q - <?php echo$i;?></b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-<?php echo$i;?>" class="collapse show" data-parent="#accordion-list-<?php echo$i;?>">
              <hr>
              <p>For purchasing this course please whatsapp on give link given in our website.</p>
              </div>
            </li>
          </ul>
          <?php $i = $i + 1;?>



          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <a data-toggle="collapse" href="#accordion-list-<?php echo$i;?>" class="collapsed"><b>F.A.Q - <?php echo$i;?></b><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-<?php echo$i;?>" class="collapse show" data-parent="#accordion-list-<?php echo$i;?>">
              <hr>
              <p>If you did not purchased any course you are not authorized to access that course.</p>
              </div>
            </li>
          </ul>
          <?php $i = $i + 1;?>



        </div>
      </div>
    </section>





<?php
include 'footer.php';
?>