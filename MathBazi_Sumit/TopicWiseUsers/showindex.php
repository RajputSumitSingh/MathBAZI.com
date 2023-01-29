<?php

include 'check_if_user_is_logedin.php';

$page_title='DO Questions';


include 'header.php';

$index_data_file= '../'.$_GET['f'].'.php';


if(file_exists($index_data_file)){

  include $index_data_file;
  
}else{

     echo '<div class="alert alert-danger" role="alert">
            You are not authorized to see this practice set!
          </div>';
  
  include 'footer.php';
  exit;
}


$section_id=0;


foreach ($index_data as $A_DataBlock) {
 

  if(isset($A_DataBlock['TYPE']) and $A_DataBlock['TYPE']=='CHAPTER_HEADING'){

  ?>
  
  
  <section id="hero" class="d-flex align-items-center">
  
  <div class="container" >
    <div class="row">
      <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
        <div>
          <h1 class="text-center" style="font-weight:700;"><?php echo $A_DataBlock['TEXT']?></h1>
  
        </div>
      </div>
      <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
        <img src="<?php echo$pathRealtiveToAssetFolder;?>assets/img/hero-img.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
  
  </section>
  <!-- End Hero -->
  
  
  
  
  <?php


  }//End of if CHAPTER HEADING
  //-----------------------------------------------

  if( isset($A_DataBlock['TYPE']) and $A_DataBlock['TYPE']=='TOPIC_HEADING'){
   echo $A_DataBlock['TEXT'];

  ?>



  <?php
  }// End of if Topic Heading
  //---------------------------------------------------



  if( isset($A_DataBlock['TYPE']) and $A_DataBlock['TYPE']=='SHOW_NOTES' ){
   echo $A_DataBlock['TEXT'];



  ?>

  <?php
  }//End of if Show notes
  //----------------------------------------------

  if(isset($A_DataBlock['TYPE']) and $A_DataBlock['TYPE']=='SHOW_PRACTICE_QUESTION'){
    $section_id=$section_id+1;

    $numberOfQuestion=$A_DataBlock['TILL_QUESTION_NUMBER']-$A_DataBlock['FROM_QUESTION_NUMBER'];
    
    $numberOfQuestion=$numberOfQuestion+1;
    $QuestionIndex=$A_DataBlock['FROM_QUESTION_NUMBER']-1;

    $QuestionSet=array_slice($Function_List,$QuestionIndex,$numberOfQuestion);

  ?>


  <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="accordion-list">
     
  <?php

  $i=0;
  foreach($QuestionSet as $A_function){

    
    $function_number = 2;
    ?>
         <ul>
          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#accordion-list-<?php echo$i;?>" class="collapsed a"><?php echo "<b>$section_id.$i  </b>"; ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="accordion-list-<?php echo$i;?>" class="collapse show" data-parent="#accordion-list-<?php echo$i;?>">
              <hr>
              <p><?php  echo $A_function["sample"];  ?></p><br>

              <?php

              $temp=$A_function["data_link"];
              $temp=explode('../',$temp);
              $temp=explode('.php',$temp[1]);
              $functionpath=$temp[0];

              ?>

              <a  class="btn btn-info a-tag " role="button" target="_blank" target="_blank" href="Run.php?f=<?php echo $functionpath; ?>"><br>Practice<br><br></a>
            </div>
          </li>
        </ul>
    <?php
      $i = $i+1;
    }?>
        
         
        </div>
      </div>
  </section>

  <?php

  }//End of if SHOW_PRACTICE_QUESTION
  //----------------------------------------------


}//End of foreach index data
?>

<?php
include 'footer.php';
?>