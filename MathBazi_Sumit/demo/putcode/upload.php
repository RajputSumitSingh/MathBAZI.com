<?php
$num='';

// print_r($_FILES["fileToUpload"]);

// if(isset($_FILES["fileToUpload"])){

//   $fn=$_FILES["fileToUpload"]['name'];
//   $ft=$_FILES["fileToUpload"]['type'];
//   $ftn=$_FILES["fileToUpload"]['tmp_name'];

//   $fd='chapter_folder/';
//   if($ft=='application/octet-stream'){
//   move_uploaded_file($ftn,$fd.$fn);
  
//   echo 'file is uploaded';
//   $num=2;
//   header("Location:write_form.php?ls=$num");
//   }else{
//     $num=1;
//     header("Location:write_form.php?ls=$num");
//   }
// }

if(isset($_POST['data'])){

  $file_path= $_POST['file-path'];
  $file_name= $_POST['file-name'];
  $file_content= $_POST['content'];
  
  $path=$file_path.$file_name;


  if(substr($file_path,-1)=='/' and substr($file_path,-2)!='/'){   
  if(file_exists($path)){


  unlink($path);
 

   $file2=fopen($path,"a");
   fwrite($file2,$file_content);
  // move_uploaded_file($file2,$file_content);
   fclose($file2);
   $num=3;
   header("Location:index.php?ls=$num");
  }else{
    if(substr($file_path,0)=='/'){
      $num=1;
      header("Location:index.php?ls=$num");
    }else{
mkdir($file_path);
    
    $file2=fopen($path,"a+");
    fwrite($file2,$file_content);
    fclose($file2);
    $num=2;
    header("Location:index.php?ls=$num");
    }
  }
  
   
  }else{

    if($file_path==''){
      if(file_exists($file_name)){
        unlink($file_name);
        $flag=1;
      }

      $file2=fopen($path,"a");
   fwrite($file2,$file_content);
   fclose($file2);
   $num=2;
   if($flag==1){$num=3;}
   header("Location:index?ls=$num");

    }else{
    $num=1;
    header("Location:index.php?ls=$num");
    }
  }


}



?>