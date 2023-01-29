<?php

if(isset($_POST['submit'])){

  $Username=$_POST['Username'];

  $Username=explode('.php',$Username);
  $Username=$Username[0];


if($Username[0]=='.' || $Username[0]=='/' || $Username[-1]=='/'){
  header("location:index.php?ls=1"); 
}else{


// include '../config.php';


$RechargeInfo=array();



$RechargeInfo['recharge_date']=$_POST['recharge_date'];

$RechargeInfo['Recharge_amount']=$_POST['Recharge_amount'];

$RechargeInfo['Validity_Start_Date']=$_POST['Validity_Start_Date'];

$RechargeInfo['Validity_End_Date']=$_POST['Validity_End_Date'];

$RechargeInfo['Alloted_Runs']=$_POST['Alloted_Runs'];

$RechargeInfo['Runs_Used']=$_POST['Runs_Used'];

$RechargeInfo['Courses']=$_POST['Courses'];

////////////////////////////////////////////////////////////--Recharge-info--/////////////////////////////////////////////////////////////////////


$UserRunCounterFolderPath = '../RunCounter/';

$UserRunCounterFileName=$Username.'.php';

$FileData=json_encode($RechargeInfo);

$FileData='<?php exit; '.$FileData.' ?>';
file_put_contents($UserRunCounterFolderPath.$UserRunCounterFileName,$FileData);


header("location:index.php?ls=2");
// echo $Username;

}
}


// echo '<br><pre>';
// print_r($RechargeInfo);
// echo '</pre>';

// foreach($RechargeInfo['Courses'] as $val){
//   echo $val;
// }





?>