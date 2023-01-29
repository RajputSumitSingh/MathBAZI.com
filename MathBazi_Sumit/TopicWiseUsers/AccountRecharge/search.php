   <?php
   session_start();
   include 'config.php';

   if(isset($_SESSION[$putcode_session_array_key]['IsLogin'])){

   }else{
    header('location:loginform.php');
   }

$page_title='Search User';

include 'header.php';


if(isset($_GET['ls'])){
  $a=$_GET['ls'];

  if($a==1){
  echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Alert! </strong> You have not entered data in correct way.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if($a==2){
    echo'<div class="alert alert-dark alert-dismissible fade show" role="alert">
    <strong>Alert! </strong>This Username file is not exist.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }



if($a==4){
  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Alert! </strong> This Chapter is not exist.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
}


?>

   
   <!--form part-->
    <section class="inner-page">
      <div class="container mt-5">
      <h2 class="text-center" style="font-weight:700">Search Data</h2>
      <div class="databox ">



      <form name="modifyform" class="form-horizontal col-lg-8 " style="margin: auto;" role="form" action="searchshow.php" method="POST" enctype="multipart/form-data">



  <div class="form-group mt-3">
    <label for="exampleInputfile-name">File Name</label>
    <input type="text" class="form-control" id="exampleInputfile-name" aria-describedby="file-nameHelp" name="file-name" required>
    
  </div>
<!-- 
  <div class="form-group mt-3">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" name="content"></textarea>
  </div> -->



  

  <div class="form-group mt-5 mb-3">

  <button type="submit" class="btn btn-success btn-md btn-block" name="data">Submit</button>
  </div>


</form>






      </div>
      </div>
    </section><!--end of form part-->

    <?php
// $footer_head='Page for Admin!';

include 'footer.php';
    ?>