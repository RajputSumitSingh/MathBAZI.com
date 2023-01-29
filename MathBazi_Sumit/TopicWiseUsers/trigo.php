<?php

include 'check_if_user_is_logedin.php';

$page_title = 'Trigo';
include 'header.php';



?>

<section id="faq" class="faq section-bg">
  <div class="container">

    <div class="section-title mt-5">
      <h2><b>Trigo</b></h2>
    </div>

   

    <div class="accordion-list">


    <?php $i=0;?>
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Perimeter & area<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent="#accordion-list-<?php echo $i; ?>">
            <hr><br>
            <A class="btn btn-info a-tag " role="button" target="_blank" href="showindex.php?f=TopicWiseset/trigo/perimeter_area/index_data"><br><b>Perimeter & area</b><br><br></A>
          </div>
        </li>
      </ul>
    <?php $i=$i+1;?>


  
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Simillar Triangles<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent="#accordion-list-<?php echo $i; ?>">
            <hr><br>
            <A class="btn btn-info a-tag " role="button" target="_blank" href="showindex.php?f=TopicWiseset/trigo/Simillar_Triangles/index_data"><br><b>Simillar Triangles</b><br><br></A>
          </div>
        </li>
      </ul>
    <?php $i=$i+1;?>



      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Pythagorus Trigo<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent="#accordion-list-<?php echo $i; ?>">
            <hr><br>
            <A class="btn btn-info a-tag " role="button" target="_blank" href="showindex.php?f=TopicWiseset/trigo/Pythagorus_Trigo/index_data"><br><b>Pythagorus Trigo</b><br><br></A>
          </div>
        </li>
      </ul>
    <?php $i=$i+1;?>


    </div>
    


    </div>
</section>


<?php
include 'footer.php';
?>