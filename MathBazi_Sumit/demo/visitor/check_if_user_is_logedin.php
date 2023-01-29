<?php
@session_start();



include 'config.php';
if(isset($_SESSION[$course_session_array_key]['IsLogin'])){
  
}else{
  
  header('location:loginform.php');
  
}
