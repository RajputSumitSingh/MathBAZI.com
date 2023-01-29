<?php
// $pathRealtiveToAssetFolder="";
// use function PHPSTORM_META\type;
include 'function_list.php';
$index_data=array();

$chapter_heading=array();
$chapter_heading['TYPE']='CHAPTER_HEADING';
$chapter_heading['TEXT']='ITEM PRICES';
$index_data[]=$chapter_heading;




$topic_heading=array();
$topic_heading['TYPE']='TOPIC_HEADING';
$topic_heading['TEXT']='


<section id="features" class="features">
<div class="container mt-5" >

  <div class="section-title" >
    <h2>Single Item Price Calculation</h2>
    <p>In this section we will calculate prices of different numbers of any item or article.</p>
  </div>


</div>
</section>


';
$index_data[]=$topic_heading;



$show_notes=array();
$show_notes['TYPE']='SHOW_NOTES';
$show_notes['TEXT']="

<section id='details' class='details'>
      <div class='container'>

        <div class='row content'>
          <div class='col-md-4' data-aos='fade-right'>
            <img src='$pathRealtiveToAssetFolder/assets/img/details-1.png' class='img-fluid' alt=''>
          </div>
          <div class='col-md-8 pt-4' data-aos='fade-up'>
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class='font-italic'>
            </p>
            <ul>
              <li><i class='icofont-check'></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class='icofont-check'></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class='icofont-check'></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
              <li><i class='icofont-check'></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
            </ul>
            
          </div>
        </div>

        

      </div>
    </section>

";

$index_data[]=$show_notes;



$show_PracticeQuestion=array();
$show_PracticeQuestion['TYPE']='SHOW_PRACTICE_QUESTION';
$show_PracticeQuestion['FROM_QUESTION_NUMBER']=1;
$show_PracticeQuestion['TILL_QUESTION_NUMBER']=2;
$index_data[]=$show_PracticeQuestion;







$topic_heading=array();
$topic_heading['TYPE']='TOPIC_HEADING';
$topic_heading['TEXT']='


<section id="features" class="features">
<div class="container mt-5">

  <div class="section-title">
    <h2>More Single Item Price Calculation</h2>
    <p>In this section we will calculate more prices of different numbers of any item or article. We will also practice of cumulative questions.</p>
  </div>


</div>
</section>


';
$index_data[]=$topic_heading;







$show_PracticeQuestion=array();
$show_PracticeQuestion['TYPE']='SHOW_PRACTICE_QUESTION';
$show_PracticeQuestion['FROM_QUESTION_NUMBER']=3;
$show_PracticeQuestion['TILL_QUESTION_NUMBER']=5;
$index_data[]=$show_PracticeQuestion;





?>