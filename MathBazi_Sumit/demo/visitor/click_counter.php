<?php

@session_start();

include 'config.php';
$UserRunCounterFolderPath = 'RunCounter/';


if (isset($_SESSION[$course_session_array_key]['IsLogin'])) {

  $thisusername = $_SESSION[$course_session_array_key]['Username'];
  $UserRunCounterFileName = $thisusername . '.php';

  // echo '===============<br>'.$UserRunCounterFileName.'<br>======================';

// echo $UserRunCounterFolderPath . $UserRunCounterFileName;
  if (!file_exists($UserRunCounterFolderPath . $UserRunCounterFileName)) {

    include 'messages/user_not_purchased.php';
  }

  // echo $UserRunCounterFolderPath . $UserRunCounterFileName;

  
  $OldFileData = file_get_contents($UserRunCounterFolderPath . $UserRunCounterFileName); //function
  //check if no file exist.
  //check if file is ther empty;
  // print_r($OldFileData);

  // echo '<br>===============<br>'.$OldFileData.'<br>======================<br>';

  $OldFileDataArray = explode('<?php exit;', $OldFileData);
  //check if no. of variable is one or two or zero;

  // print_r($OldFileDataArray);

  if (count($OldFileDataArray) == 0) {



  } elseif (count($OldFileDataArray) == 1) {

    
  } elseif (count($OldFileDataArray) == 2) {



    $OldFileDataArray2 = explode(' ?>', $OldFileDataArray[1]);

    // echo '8888888888888888888';
    // print_r($OldFileDataArray2);

    if (count($OldFileDataArray2) == 0) {

    } elseif (count($OldFileDataArray2) >= 1) {

      $jesonData = $OldFileDataArray2[0];


      $jesonData = trim($jesonData);

      $UserOldData = json_decode($jesonData);


      $UserOldData=(array)$UserOldData;

      $UserNewData=$UserOldData;
      $UserNewData['Runs_Used']=$UserNewData['Runs_Used']+1;

      // echo '<br>*************************************';
      // print_r($UserOldData);
      // echo '<br>##########################';
      // print_r($UserNewData);
      // echo '<br><br><br>';





      $TodayDate = date("Y-m-d");


  //  echo $TodayDate;

      if ($UserOldData['Validity_End_Date'] < $TodayDate) {
    
        include 'messages/validity_expired.php';

      }//**********************showing message for over the validity */
    
    
   
      if ($UserOldData['Alloted_Runs'] <= $UserOldData['Runs_Used']) {
    
        include 'messages/count_over.php';

      }//***showing message for over the count





include 'course_authorization_check.php';

   
    $UserNewData=json_encode($UserNewData);
    $UserNewData="<?php exit; $UserNewData ?>";

    file_put_contents($UserRunCounterFolderPath.$UserRunCounterFileName,$UserNewData);
    }
  }
  // if (empty($UserOldData)) {
  // } //show you are not authorized to see this question answer.

  // $TodayDate = date("Ymd");

  // if ($RechargeInfo['validityenddate'] < $TodayDate) {

  //   echo 'You are under validity';
  // } else {
  //   echo 'Your validity has expired.';
  // }


  // if ($rechargeInfo['allotedruns'] <= $rechargeInfo['runsused']) {

  //   echo 'Your Run count is over.Please Recharge for further use';
  // } else {

  //   echo 'please ';
  // }


  //check if todays date is under validity to start date and validity to end date if not show your validity has expired.give information to recharge.

  //check if aloted count is excided if exceeded show that the message that your run count is over.give information to recharge.

  //else increase the run use count encode the array and save in it into usercounter file.


}// end of if session topic wise



/*
$RechargeInfo=array();
$RechargeInfo['rechargedate']="20211102";
// year month date
$RechargeInfo['rechargeamount']=150;
$RechargeInfo['validitystartdate']=20211103;
$rechargeInfo['validityenddate']=20211201;
$rechargeInfo['allotedruns']=2000;
$rechargeInfo['runsused']=1750;




$RunUsedInfo=array();
$RunUsedInfo['runsusedinthisvalidity']=123;
$RunUsedInfo['runstoday']=123;
$RunUsedInfo['runstodaydate']=123;





//userdata

$userdata=array();
$userdata['rechargeinfo']=$RechargeInfo;
$userdata['RunUsedInfo']=$RunUsedInfo;

$FileData=json_encode($userdata);//function
$FileData='<?php exit; '.$FileData.' ?>';





file_put_contents($UserRunCounterFolderPath.$UserRunCounterFileName,$FileData);//function

*/





















//step get the userdata file from userfile in click count folder.
//step remove php exit and php ending tag and get only jeson text.
// step deconde jesson text to get user array.
// step get the previous click count from this array.
// step manupulate the click count based on user package.
//step if click account has expired check whether new recharge have been done this recharge info in another file called usersrecharged.php
// step if new recharge had been done then update the recharge info  in user file inside click_counter 
// if not click recharge is left then show the information to recharge and dont show the question.
