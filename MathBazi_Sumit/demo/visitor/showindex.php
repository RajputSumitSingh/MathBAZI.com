<?php

// include 'check_if_user_is_logedin.php';

$page_title='DO maths';


include 'header.php';
// include '../3/ctest2/index_data.php';
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
$i=0;
// $Function_List=$_POST['f'];
foreach ($index_data as $A_DataBlock) {
 

// print_r($A_DataBlock);
// $A_DataBlock['TYPE'];
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
        <img src="<?php echo $pathRealtiveToAssetFolder;?>assets/img/hero-img.png" class="img-fluid" alt="">
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



//   $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,-2,1));

?>





<?php
}//End of if Show notes
//----------------------------------------------

if(isset($A_DataBlock['TYPE']) and $A_DataBlock['TYPE']=='SHOW_PRACTICE_QUESTION'){
  $section_id=$section_id+1;

// echo 1234;

  $numberOfQuestion=$A_DataBlock['TILL_QUESTION_NUMBER']-$A_DataBlock['FROM_QUESTION_NUMBER'];
  
  $numberOfQuestion=$numberOfQuestion+1;
  $QuestionIndex=$A_DataBlock['FROM_QUESTION_NUMBER']-1;
  // echo $numberOfQuestion;

  $QuestionSet=array_slice($Function_List,$QuestionIndex,$numberOfQuestion);

  // echo '<pre>';
  // print_r($QuestionSet);
  // echo '</pre>';
  ?>


<section id="faq" class="faq section-bg">
      <div class="container">

        <div class="accordion-list">
          <ul>


<?php


  foreach($QuestionSet as $A_function){

    
    $function_number = 2;
    // $A_function = $Function_List[$function_number];
    // echo $function_number;
    ?>
       <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#accordion-list-<?php echo$i;?>" class="collapsed a"><?php echo "<b>$section_id.$i  </b>"; ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="accordion-list-<?php echo$i;?>" class="collapse show" data-parent=".accordion-list">
              <hr>
              <p><?php  echo $A_function["sample"];  ?></p><br>

              <?php
              $temp=$A_function["data_link"];
              
              $temp=explode('../',$temp);
              // print_r($temp);
              $temp=explode('.php',$temp[1]);


              // print_r($temp);

              $functionpath=$temp[0];
              // echo $functionpath;
              
              

              ?>

              <a  class="btn btn-info a-tag " role="button" target="_blank" target="_blank" href="Run.php?f=<?php echo $functionpath; ?>"><br>Practice<br><br></a>
            </div>
          </li>
          <?php
        $i = $i+1;
  }?>
        
          </ul>
        </div>
      </div>
</section>

<?php



}//End of if SHOW_PRACTICE_QUESTION
//----------------------------------------------








} //End of foreach index data
?>




<?php



include 'footer.php';
?>