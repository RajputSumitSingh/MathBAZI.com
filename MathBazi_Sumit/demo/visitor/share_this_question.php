


<?php
// Program to display URL of current page.

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$link = "https";
else
	$link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
	
// Print the link
// echo $link;
?>



   <a class="mt-4 " style="text-align:left;" class="btn" href="https://api.whatsapp.com/send?phone=&text=<?php foreach ($q as $quest) {
  // echo '<br>';
  $quest=str_replace (' ','%20',$quest);
  $quest=preg_replace('/<br>|\n/','%0A',$quest);
  echo $quest;
  // print_r($quest);
  }?>%0ALink%20:%20<?php echo$link;?>"  target="_blank" rel="noopener noreferrer"><img  src="<?php echo $pathRealtiveToAssetFolder;?>assets/logo/whatsapp.png" alt="Share to Whatsapp" height="50" width="50" rounded></a>


<!-- /////////////////////////////////////////////////Whatsapp share///////////////////////////////////// -->
