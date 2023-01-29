<?php

include 'config.php';

$Username='';
$Password='';
$ss=1;


if(isset($_POST['Username']) and isset($_POST['submit'])){
  
$Username=$_POST['Username'];
$Password=$_POST['Password'];



include 'users.php';

foreach($USERS as $u => $k){

if($k['Username']==$Username && $k['Password']==$Password){
  $ss=0;
  break;
 
}

}


if($ss==0){
 
  @session_start();
    
$_SESSION[$course_session_array_key]['IsLogin']='True';
$_SESSION[$course_session_array_key]['Username']=$Username;

  header( "Location:index.php");
 
    }else{

  header("Location:loginform.php?ls=1");
  //echo 'not found';
  }


}else{
  header("Location:loginform.php?ls=2");

}
