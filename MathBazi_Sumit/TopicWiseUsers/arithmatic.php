<?php

include 'check_if_user_is_logedin.php';

$page_title = 'Arithmatic';
include 'header.php';

?>

<section id="faq" class="faq section-bg">
  <div class="container">

    <div class="section-title mt-5">
      <h2><b>Arithmatic</b></h2>
    </div>

    <div class="accordion-list">

    <?php $i=0;?>
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i;?>" class="collapsed a">Buy Sell 1<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent="#accordion-list-<?php echo $i;?>">
          <hr><br>
          <A class="btn btn-info a-tag " role="button" target="_blank" href="showindex.php?f=TopicWiseset/arithmatic/buysell1/index_data"><br><b>Buy Sell 1</b><br><br></A>
          </div>
        </li>
      </ul>
    <?php $i=$i+1;?>



      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Buy Sell 2<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i;?>" class="collapse show" data-parent="#accordion-list-<?php echo $i;?>">
          <hr><br>
          <A class="btn btn-info a-tag mt-4 " role="button" target="_blank" href="showindex.php?f=TopicWiseset/arithmatic/buysell2/index_data"><br><b>Buy Sell 2</b><br><br></A>
          </div>
        </li>
      </ul>
    <?php $i=$i+1;?>



      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i;?>" class="collapsed a">Buy Sell 3<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i;?>" class="collapse show" data-parent="#accordion-list-<?php echo $i;?>">
          <hr><br>
          <A class="btn btn-info a-tag " role="button" target="_blank" href="showindex.php?f=TopicWiseset/arithmatic/buysell3/index_data"><br><b>Buy Sell 3</b><br><br></A>
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