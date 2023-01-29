<?php

@session_start();

$page_title='Account Details';
include 'header.php';
$UserRunCounterFolderPath = 'RunCounter/';


if (isset($_SESSION[$course_session_array_key]['IsLogin'])) {

  $thisusername = $_SESSION[$course_session_array_key]['Username'];
  $UserRunCounterFileName = $thisusername . '.php';

  $OldFileData = file_get_contents($UserRunCounterFolderPath . $UserRunCounterFileName); //function
  $OldFileDataArray = explode('<?php exit;', $OldFileData);

  $OldFileDataArray2 = explode(' ?>', $OldFileDataArray[1]);


  $jesonData = $OldFileDataArray2[0];


  $jesonData = trim($jesonData);

  $UserOldData = json_decode($jesonData);


  $UserOldData=(array)$UserOldData;



}

?>

<section id="faq" class="faq section-">
  <div class="container">

    <div class="section-title mt-5">

      <h2><b>Your Account Details</b></h2>

    </div>

    <table class="table table-borderless ">
  <!-- <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead> -->
  <tbody>
    <?php
foreach($UserOldData as $RechargeKey => $RechargeValue){

  if($RechargeKey=='Courses'){
    $RechargeValue=implode(", ",$RechargeValue);
  }
    ?>
    <tr>
      <!-- <th scope="row">1</th> -->
      
      <td style="text-align: left;"><b><?php echo $RechargeKey;?></b></td>
      <td > : </td>
      <td><?php echo $RechargeValue;?></td>
      <!-- <td>@mdo</td> -->
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