<?php
 @session_start();
 include 'config.php';
if(isset($_SESSION[$course_session_array_key]['IsLogin'])){
  header('Location:index.php');
}else{



$page = "Login_premium_user";
$page_title='Login Premium User';
include 'header.php';


if(isset($_GET['ls']) and $_GET['ls']==2){

echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Warning! </strong>Please Enter Your Username
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}

if(isset($_GET['ls']) and $_GET['ls']==1){

  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Warning! </strong>Please check your username or password is incorrect.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>';
  }
?>



<section class="inner-page">
  <div class="container">
  <h2 class="text-center" style="font-weight:700">Login User</h2>
  <div class="databox ">


<form name="CheckUsernameform" class="form-horizontal" role="form" action="login.php" method="POST" enctype="multipart/form-data">



<div class="form-group mt-3">
<label for="exampleInputUsername">Enter Your Username</label>
<input type="text" class="form-control" id="exampleInputUsername" aria-describedby="UsernameHelp" name="Username" required placeholder="Username">
</div>



<div class="form-group mt-3">
<label for="exampleInputPassword">Enter Your Password</label>
<input type="password" class="form-control" id="exampleInputPassword" aria-describedby="PasswordHelp" name="Password" required placeholder="Password">
</div>




<div class="form-group mt-5 mb-3">

<button type="submit" class="btn btn-success btn-md btn-block" name="submit">Login</button>
</div>
</form>





  </div>
  </div>
</section>











<?php
include 'registration_information_include_file.php'; 

include 'footer.php';
}

?>