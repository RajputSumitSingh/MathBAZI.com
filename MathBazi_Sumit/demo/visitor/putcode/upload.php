<?php
$num='';
$a33='';
$p='';


if(isset($_POST['data'])){

  // $file_path1= $_POST['file-path'];
  $file_name= $_POST['file-name'];
  $file_content= $_POST['content'];

  $file_path='../RunCounter/';
  $a33=explode('.php',$file_name);

$file_name=$a33[0].'.php';
  
  $path=$file_path.$file_name;
  // $p='../'.$file_path1;

  if($file_name[0]!='/' && file_exists($path) && $file_name[0]!='.'){  
  if(file_exists($path)){


  unlink($path);
 

   $file2=fopen($path,"a");
   fwrite($file2,$file_content);
  // move_uploaded_file($file2,$file_content);
   fclose($file2);
   $num=3;
   header("Location:index.php?ls=$num");
  }else{
    // $b33=explode('/',$file_path);
    
    
      $file2=fopen($path,"a+");
    fwrite($file2,$file_content);
    fclose($file2);
    $num=2;
      header("Location:index.php?ls=$num");
 
  }
  
   
  }else{

  //   if($file_path==''){
  //     if(file_exists($file_name)){
  //       unlink($file_name);
  //       $flag=1;
  //     }

  //     $file2=fopen($path,"a");
  //  fwrite($file2,$file_content);
  //  fclose($file2);
  //  $num=2;
  //  if($flag==1){$num=3;}
  //  header("Location:index?ls=$num");

  //   }else{
  
  //   }
if(!file_exists($path)){
  $num=4;
}else if($file_name[0]=='.' || $file_name[0]=='/'){
  $num=1;
}
    
    header("Location:index.php?ls=$num");
  }


}



?>