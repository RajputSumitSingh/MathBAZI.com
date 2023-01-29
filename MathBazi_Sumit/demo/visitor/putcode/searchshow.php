<?php
$num='';
$a33='';
$p='';


if(isset($_POST['data'])){

  // $file_path1= $_POST['file-path'];
  $file_name= $_POST['file-name'];
  // $file_content= $_POST['content'];

  $file_path='../RunCounter/';
  $a33=explode('.php',$file_name);
  

$file_name=$a33[0].'.php';
  
  $path=$file_path.$file_name;
  // $p='../'.$file_path1;

  if($file_name[0]!='/' && $file_name[0]!='.' && file_exists($path)){ 
  // if(file_exists($path)){

    session_start();
  //  $_SESSION[$course_session_array_key]['IsLogin'];

    $page_title='user data';
    include 'header.php';

    $name=$a33[0];

    echo "<section id='features' class='features'>
    <div class='container'>

      <div class='section-title'>

        <h2>$name User Data</h2>
       
        <div class='databox'>
        <pre>
        <div style='padding: 6px; border: 2px solid black;border-radius:10px'>
        
       ";

    show_source($path);

   echo '</div></pre></div></div></div></section>';

   include 'footer.php';
 
  
  
   
  }else{


if(!file_exists($path)){
  $num=2;
}else if($file_name[0]=='.' || $file_name[0]=='/'){
  $num=1;
}
    
    header("Location:search.php?ls=$num");
  }


}
