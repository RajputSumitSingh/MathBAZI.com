<?php  

include 'config.php';

$authorized_course_folder_access=false;

    // if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
    //      $url = "https://";   
    // else  
    //      $url = "http://";   
    // // Append the host(domain name, ip) to the URL.   
    // $url.= $_SERVER['HTTP_HOST'];   
    
    // // Append the requested resource location to the URL   
    // $url.= $_SERVER['REQUEST_URI'];    


    // $url=explode('/',$url);
      
    // // echo $url;  
    // print_r($url); 

     ////////////////////////////////////////////////////////////////////////////////////url////////////////******************************** */



    foreach ($authorized_course_folder_array  as $key) {

      $path= $key['CourseFolderPath'];
   
    }
    // print_r($path);
    $exploded_path=explode('/',$path);

   


    $url=$_GET['f'];
    // echo '<br><br>';
    // echo $sk;
    $url=explode('/',$url);
    //  print_r($url);


    for ($i=0; $i < count($exploded_path)-1; $i++) { 

      if($url[$i]==$exploded_path[$i]){
        $authorized_course_folder_access=true;
      }else{

        include 'messages/user_not_purchased.php';
        include 'footer.php';
        exit;
      }
    }
  ?> 