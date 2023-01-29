<?php

@session_start();

$page_title = 'Account Details';
include 'header.php';
$UserRunCounterFolderPath = 'RunCounter/';


if (isset($_SESSION[$course_session_array_key]['IsLogin'])) {

///////////////////////////////////////////////////////////////////////////////////////
  $thisusername = $_SESSION[$course_session_array_key]['Username'];
  $UserRunCounterFileName = $thisusername . '.php';

  if (!file_exists($UserRunCounterFolderPath . $UserRunCounterFileName)) {


    include 'messages/user_not_purchased.php';
  }/////////////////////////////////CHECK USER FOLDER IS EXIST /////////////////////////////////////////////////


  $thisusername = $_SESSION[$course_session_array_key]['Username'];
  $UserRunCounterFileName = $thisusername . '.php';

  $OldFileData = file_get_contents($UserRunCounterFolderPath . $UserRunCounterFileName); //function
  $OldFileDataArray = explode('<?php exit;', $OldFileData);

  $OldFileDataArray2 = explode(' ?>', $OldFileDataArray[1]);


  $jesonData = $OldFileDataArray2[0];


  $jesonData = trim($jesonData);

  $UserOldData = json_decode($jesonData);


  $UserOldData = (array)$UserOldData;
}

?>

<section id="faq" class="faq section-">
  <div class="container">

    <div class="section-title mt-5">

      <h2><b> <i><?php echo$_SESSION[$course_session_array_key]['Username']; ?></i> Your Account Details</b></h2>

    </div>

    <table class="table table-borderless ">
 
      <tbody>
        <?php
        foreach ($UserOldData as $RechargeKey => $RechargeValue) {

          if ($RechargeKey == 'Courses') {
            $RechargeValue = implode(", ", $RechargeValue);
          }
        ?>
          <tr>

            <td style="text-align: left;"><b><?php echo $RechargeKey; ?></b></td>
            <td> : </td>
            <td><?php echo $RechargeValue; ?></td>
           
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
    <hr>


  </div>
</section>


<?php
include 'footer.php';
?>