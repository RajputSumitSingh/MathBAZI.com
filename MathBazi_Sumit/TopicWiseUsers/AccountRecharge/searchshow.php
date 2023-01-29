<?php
$num='';
$a33='';
$p='';


if(isset($_POST['data'])){

  $file_name= $_POST['file-name'];

  $file_path='../RunCounter/';
  $a33=explode('.php',$file_name);
  

$file_name=$a33[0].'.php';
  
  $path=$file_path.$file_name;

  if($file_name[0]!='/' && $file_name[0]!='.' && file_exists($path)){ 

    session_start();

    $page_title='User data';
    include 'header.php';

  $OldFileData = file_get_contents($path);
  $OldFileDataArray = explode('<?php exit;', $OldFileData);

  $OldFileDataArray2 = explode(' ?>', $OldFileDataArray[1]);


  $jesonData = $OldFileDataArray2[0];


  $jesonData = trim($jesonData);

  $UserOldData = json_decode($jesonData);


  $UserOldData = (array)$UserOldData;

?>

<section id="faq" class="faq section-">
  <div class="container">

    <div class="section-title mt-5">

      <h2><b> <i><?php echo$a33[0];?></i> Account Details</b></h2>

    </div>

    <table class="table table-borderless ">
 
      <tbody>
        <?php
        foreach ($UserOldData as $RechargeKey => $RechargeValue) {

          if ($RechargeKey == 'Courses') {
            $RechargeValue = implode(", ", $RechargeValue);
          }
        ?>
          <tr style="text-align: center;">

            <td style="text-align: left;"><b><?php echo $RechargeKey; ?></b></td>
            <td > : </td>
            <td ><?php echo $RechargeValue; ?></td>
           
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
  }else{


if(!file_exists($path)){
  $num=2;
}else if($file_name[0]=='.' || $file_name[0]=='/'){
  $num=1;
}
    
    header("Location:search.php?ls=$num");
  }
}
