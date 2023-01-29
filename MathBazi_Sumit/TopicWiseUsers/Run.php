<?php

include 'check_if_user_is_logedin.php';

$page_title = 'Run';
include 'header.php';


$function_list = $_GET["f"];


$function_list='../'.$function_list.'.php';


include 'security_check.php';

include 'click_counter.php';




if(file_exists($function_list)){

  include $function_list;
  
}else{

     echo '<div class="alert alert-danger" role="alert">
   You are not authorized to see this practice set!
</div>';
  
  include 'footer.php';
  exit;
}






?>

<div data-aos="fade-up" data-aos-delay="100" id="timer_menu" class="mb-1">
  <h1><time>00:00:00</time></h1>
  <div id="inner_timer_menu">
    <button style="font-weight:300" class="btn btn-info mb-1" role="button" id="stop">stop</button>
    <button style="font-weight:300" class="btn btn-info mb-1" role="button" id="start">start</button>
    <button style="font-weight:300" class="btn btn-info mb-1" role="button" id="clear">clear</button>

    <button style="font-weight:300" class="btn btn-info mb-1" role="button" id="clearww" onClick="document.location.reload(true)">more so</button>

  </div>
</div>


<script>
  var h1 = document.getElementsByTagName('time')[0],
    start = document.getElementById('start'),
    stop = document.getElementById('stop'),
    clear = document.getElementById('clear'),
    seconds = 0,
    minutes = 0,
    hours = 0,
    t;

  function add() {
    seconds++;
    if (seconds >= 60) {
      seconds = 0;
      minutes++;
      if (minutes >= 60) {
        minutes = 0;
        hours++;
      }
    }

    h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);


    //    h1.textContent = "<time>" +  h1.textContent + "</time>";
    timer();
  }

  function timer() {
    t = setTimeout(add, 1000);
  }
  timer();


  /* Start button */
  start.onclick = timer;

  /* Stop button */
  stop.onclick = function() {
    clearTimeout(t);
  }

  /* Clear button */
  clear.onclick = function() {
    h1.textContent = "00:00:00";
    seconds = 0;
    minutes = 0;
    hours = 0;
  }
</script>


<?php
$i = 0;
// $i = 1;
$OldScreenType = "0";
$MethodCount = 0;
$StepCount = 0;
  /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    
include 'run_file_topside_advertesment.php';
foreach ($screens as $Ascreen) {
  
  $ThisScreenType = $Ascreen["META"]["TYPE"];
  $q = $Ascreen["DATA"];
  // echo '<br>'.$ThisScreenType;
  /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    
  if (($ThisScreenType == 'Question'  or $ThisScreenType == 'Process' or $ThisScreenType == 'Answer') and ( $OldScreenType != 'Question' and $OldScreenType != 'Process' and $OldScreenType != 'Answer' )) {
?>
    <section id="faq" class="faq section-bg">
      <div class="container">
        




      <?php    }


    if (($OldScreenType == 'Question'  or $OldScreenType == 'Process' or $OldScreenType == 'Answer') and ($ThisScreenType != 'Question' and $ThisScreenType != 'Process' and $ThisScreenType != 'Answer' )) {
      ?>

      </div>
    </section>
    
    
    
    
  <?php
    }
    $OldScreenType = $ThisScreenType;

  /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    
    if ($ThisScreenType == 'Question') {


  ?>
    <div class="accordion-list ">


      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Question<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse show" data-parent="#accordion-list-<?php echo $i; ?>">
          <hr>
          <div class="databox">
              <p>
                <?php
                $THIS_QUESTION_TEXT_ARRAY=$q;
                  
                $data_line_count=count($q);
                $data_line_sequence=0;
                
                
                foreach ($q as $quest) {
                  $data_line_sequence++;
                  echo $quest;
                  if($data_line_sequence < $data_line_count){
                  echo '<br>';
                  }
                }

                ?>        
              </p>
            </div>
          </div>
        </li>
      </ul>
      <?php $i++; ?>


    </div>
 
    <?php

    } //end of screen type is question
  /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    

    elseif ($ThisScreenType == 'Process') {
      $StepCount = $StepCount + 1;


   ?>
    <div class="accordion-list ">

      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Step : <?php echo $StepCount; ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse " data-parent="#accordion-list-<?php echo $i; ?>">
            <hr>
            <div class="databox">
              <p>
                <?php
                $data_line_count=count($q);
                $data_line_sequence=0;
                foreach ($q as $quest) {
                  $data_line_sequence++;
                  echo $quest;
                 

                  if($data_line_sequence < $data_line_count)
                  {
                  echo '<br>';
                  }
                }
                ?>
              </p>
            </div>
          </div>
        </li>
      </ul>
      <?php  $i++; ?>


    </div>
    <?php


    } //End of screen type is process

  /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    

  else if ($ThisScreenType == 'Answer') {



    ?>
    <div class="accordion-list ">

      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" href="#accordion-list-<?php echo $i; ?>" class="collapsed a">Answer<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
          <div id="accordion-list-<?php echo $i; ?>" class="collapse" data-parent="#accordion-list-<?php echo $i; ?>">
            <hr>
            <div class="databox">
              <p>
              <?php
                $data_line_count=count($q);
                $data_line_sequence=0;
                foreach ($q as $quest) {
                  $data_line_sequence++;
                  echo $quest;
                  if($data_line_sequence < $data_line_count){
                  echo '<br>';
                  }
                }
                ?>
              </p>
            </div>
          </div>
        </li>
      </ul>
      <?php $i++;?>

    </div>
    <?php

    } // End of screen type is Answer
  /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    
    elseif ($ThisScreenType == 'TopicHeading') {


  ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container">
        <div class="row">
          
          
          <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
            <div>
              <h1>    <?php
                $data_line_count=count($q);
                $data_line_sequence=0;
                foreach ($q as $quest) {
                  $data_line_sequence++;
                  echo $quest;
                  if($data_line_sequence < $data_line_count){
                  echo '<br>';
                  }
                }
                ?>
                  
                </h2>

            </div>
          </div>
          
          
          <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
            <img src="<?php echo$pathRealtiveToAssetFolder;?>assets/img/hero-img.png" class="img-fluid" alt="">
          </div>
          
          
        </div>
      </div>

    </section><!-- End Hero -->
  <?php


    } // End of screen type is TopicHeading

  /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    
    else if ($ThisScreenType == 'ShowNotes') {

    
      $data_line_count=count($q);
      $data_line_sequence=0;
      foreach ($q as $quest) {
        $data_line_sequence++;
        echo $quest;
        if($data_line_sequence < $data_line_count){
        echo '<br>';
        }
      }
      

  ?>
  <?php


    } // End of screen type is ShowNotes
      /*************************************************/
    
    
    
    
    
    
    
    /*************************************************/
    else if ($ThisScreenType == 'Method_Count_Box') {
      $MethodCount = $MethodCount + 1;
  ?>
    <!-- ======= Class Plan Section ======= -->
    <section id="features" class="features">
      <div class="container">


        <div class="section-title">
          <h2>Method-<?php echo $MethodCount; ?></h2>
          <p>    <?php
                $data_line_count=count($q);
                $data_line_sequence=0;
                foreach ($q as $quest) {
                  $data_line_sequence++;
                  echo $quest;
                  if($data_line_sequence < $data_line_count){
                  echo '<br>';
                  }
                }
                $i++;
                ?>
              </p>
        </div>


      </div>
    </section><!-- End Class Plan Section -->
  <?php

      $StepCount = 0;
    } // End of screen type is method count box



  }// end of for each screen




  if (($ThisScreenType == 'Question' or $ThisScreenType == 'Answer' or $ThisScreenType == 'Process')) {

  ?>
  </div>
  </section>
<?php

  }
  
include 'run_file_bottomside_advertesment.php';
?>


<?php
include 'footer.php';
?>

<!------------------------------------------------------------>
<!------------------------------------------------------------>