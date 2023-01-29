<?php
@session_start();

// echo '<br><br><br><br>';
// print_r($_SESSION);
include 'check_if_user_is_logedin.php';


$page_title = 'Topic Wise';
include 'header.php';



?>

<section id="faq" class="faq section-bg">
  <div class="container">

    <div class="section-title mt-5">
      <h2><b>Topic Wise</b></h2>
    </div>





    <div class="accordion-list">


    <?php $i = 0; ?>

    
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Go To Trigo Chapters<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent="#accordion-list-<?php echo $i; ?>">
            <hr><br>
            <A class="btn btn-info a-tag " role="button" target="_blank" href="trigo.php"><br><b>Click here</b><br><br></A>
          </div>
        </li>
      </ul>
    <?php $i = $i + 1; ?>


   
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Go To Arithmatic Chapters<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent="#accordion-list-<?php echo $i; ?>">
            <hr><br>
            <A class="btn btn-info a-tag mt-4 " role="button" target="_blank" href="arithmatic.php"><br><b>Click here</b><br><br></A>
          </div>
        </li>
      </ul>
      <?php $i = $i + 1; ?>

      
      


    </div>
    
    



  </div>
</section>

<!-- <a href="showindex.php?f=../3/ctest2/index_data.php">ctest2</a> -->

<?php

//$footer_head='end';
include 'footer.php';
?>