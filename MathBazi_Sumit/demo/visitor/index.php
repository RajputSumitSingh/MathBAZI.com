<?php
@session_start();



// include 'check_if_user_is_logedin.php';


$page_title = 'Demo Chapters';
include 'header.php';



?>

<section id="faq" class="faq section-bg">
  <div class="container">

    <div class="section-title mt-5">

      <h2><b>Demo chapters copy is done</b></h2>

    </div>

    <?php $i = 0; ?>

    <div class="accordion-list">
      <ul>


        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Go To GCset<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent=".accordion-list">
            <hr><br>

            <A class="btn btn-info a-tag " role="button" target="_blank" href="GCset.php"><br><b>Click here</b><br><br></A>


          </div>
        </li>
      </ul>
    </div>
    <?php $i = $i + 1; ?>


    <div class="accordion-list">
      <ul>

        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Go To TopicWiseset<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent=".accordion-list">
            <hr><br>
            <A class="btn btn-info a-tag mt-4 " role="button" target="_blank" href="TopicWiseset.php"><br><b>Click here</b><br><br></A>
          </div>
        </li>

      </ul>
    </div>
    <?php $i = $i + 1; ?>

    









  </div>
</section>

<!-- <a href="showindex.php?f=../3/ctest2/index_data.php">ctest2</a> -->

<?php

//$footer_head='end';
include 'footer.php';
?>