<?php
session_start();
include 'config.php';

if (isset($_SESSION[$putcode_session_array_key]['IsLogin'])) {
} else {
  header('location:loginform.php');
}

$page_title = 'Recharge';


include 'header.php';


if (isset($_GET['ls'])) {
  $a = $_GET['ls'];

  if ($a == 1) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Alert! </strong> You have not entered data in correct way.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  if ($a == 2) {
    echo '<div class="alert alert-success" role="alert">
  You Successfully file created and data Uploaded!
</div>';
  }
  if ($a == 3) {
    echo '<div class="alert alert-danger" role="alert">
  You Successfully file replaced!
</div>';
  }

  if ($a == 4) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Alert! </strong> This Chapter is not exist.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
}

require_once '../config.php';
?>


<!--form part-->
<section class="inner-page">
  <div class="container mt-5">
    <h2 class="text-center" style="font-weight:700">User Data Input</h2>
    <div class="databox ">




      <form name="userdata" class="form-horizontal col-lg-8 " style="margin: auto;" role="form" action="user_data.php" method="POST" enctype="multipart/form-data">


        <div class="form-group mt-3 ">
          <label for="exampleInputUsername">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="file-pathHelp" name="Username" required>

        </div>




        <div class="form-group mt-3 ">
          <label for="exampleInputRecharge">Recharge Date</label>
          <input type="date" class="form-control" id="exampleInputRecharge" aria-describedby="file-pathHelp" name="recharge_date" required>

        </div>

        <div class="form-group mt-3">
          <label for="exampleInputRecharge_amount">Recharge Amount</label>
          <input type="number" class="form-control" id="exampleInputRecharge_amount" aria-describedby="file-nameHelp" name="Recharge_amount" required placeholder="Rs.">

        </div>


        <div class="form-group mt-3 ">
          <label for="exampleInputValidity_Start_Date">Validity Start Date</label>
          <input type="date" class="form-control" id="exampleInputValidity_Start_Date" aria-describedby="file-pathHelp" name="Validity_Start_Date" required>

        </div>


        <div class="form-group mt-3 ">
          <label for="exampleInputValidity_End_Date">Validity End Date</label>
          <input type="date" class="form-control" id="exampleInputValidity_End_Date" aria-describedby="file-pathHelp" name="Validity_End_Date" required>

        </div>


        <div class="form-group mt-3">
          <label for="exampleInputAlloted_Runs">Alloted Runs</label>
          <input type="number" class="form-control" id="exampleInputAlloted_Runs" aria-describedby="file-nameHelp" name="Alloted_Runs" required>

        </div>



        <div class="form-group mt-3">
          <label for="exampleInputRuns_Used">Runs Used</label>
          <input type="number" class="form-control" id="exampleInputRuns_Used" aria-describedby="file-nameHelp" name="Runs_Used" required>

        </div>

        <div class="form-group mt-3">


          <?php

          $i = 0;
          foreach ($authorized_course_folder_array  as $key) {

            // echo $key['CourseName'];
          ?>



            <div class="form-check form-check-inline">

              <input class="form-check-input" name="Courses[]" type="checkbox" id="inlineCheckbox<?php echo $i; ?>" value="<?php echo $key['CourseName']; ?>">
              <label class="form-check-label" for="inlineCheckbox<?php echo $i; ?>"><?php echo $key['CourseName']; ?></label>

            </div>



          <?php
            $i++;
          }

          ?>
        </div>



        <div class="form-group mt-5 mb-3">

          <button type="submit" class="btn btn-success btn-md btn-block" name="submit">Submit</button>
        </div>


      </form>




    </div>
  </div>
</section>
<!--end of form part-->

<?php
// require_once 'config.php';
include 'footer.php';
?>









<!-- $RechargeInfo=array();
$RechargeInfo['rechargedate']="20211102";
// year month date
$RechargeInfo['rechargeamount']=150;
$RechargeInfo['validitystartdate']=20211103;
$rechargeInfo['validityenddate']=20211201;
$rechargeInfo['allotedruns']=2000;
$rechargeInfo['runsused']=1750; -->