<?php

include 'config.php';
$Username='';
$Password='';
$ss=1;


if(isset($_GET['Username']) and isset($_GET['submit'])){
  
$Username=$_GET['Username'];
$Password=$_GET['Password'];



include 'users.php';

foreach($USERS as $u => $k){

if($k['Username']==$Username && $k['Password']==$Password){
  $ss=0;
  break;
 
}

  // foreach($k as $s=>$t){
  //   print_r($t);
  // }
}


if($ss==0){
 
  session_start();
  // $_SESSION['Username']=$Username;
  // $_SESSION['TopicWiseUsers']='TopicWiseUsers';


    
$_SESSION[$course_session_array_key]['IsLogin']='True';
$_SESSION[$course_session_array_key]['Username']=$Username;

  header( "Location:index.php");
  // echo $_SESSION['Log_Username'];
  //echo 'found';
    }else{

  header("Location:loginform.php?ls=1");
  //echo 'not found';
  }


}else{
  header("Location:loginform.php?ls=2");

}



?>