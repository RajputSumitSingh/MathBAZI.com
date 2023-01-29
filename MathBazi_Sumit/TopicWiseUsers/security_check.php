<?php

include 'config.php';
echo '<br><br>';
// echo $function_list;
$checking=explode('/',$function_list);

$running_folder=$checking[0].'/'.$checking[1].'/'.$checking[2];


// echo "$running_folder";
// echo '<br>';

// print_r($security_check_variable_avoiding_other_course_question_run);

if(in_array($running_folder,$security_check_variable_avoiding_other_course_question_run)){


}else{

     echo '<div class="alert alert-danger" role="alert">
   You are not authorized to see this practice set!
</div>';
  
  include 'footer.php';
  exit;
}






  ?>
