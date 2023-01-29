
                  
	return $screens;
}//end of function                    




 
function test($func){

$i = 0;
$screenout = "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

$screens = $this->$func();


$i = 1;
foreach($screens as $Ascreen){
	echo "<h2 class=\"head\"> screen $i </h2>";

$divclass = "databox";
if($Ascreen["META"]["TYPE"] == "Question"){$divclass = "questionbox";}

		echo "<div class='$divclass'><pre> ";


	$q = $Ascreen["DATA"];
	foreach($q as $quest){



		echo " \n $quest ";


	}
	$i++;



		echo "  </pre>

</div>";
	echo $screenout;
}









}// end of function

















}// end of class

$expl = "Unit_Measurement_";
$maxqno = 3;

$exe = new TrigoIIT();

if(isset($_POST['f'])){
	$exe->test("f".$_POST['f']);
}

else if(isset($_POST['g'])){
 
 $thisqno = explode( $expl, $_POST['g']   );
 $thisqno = $thisqno[1];
 $thisqno = rand( 1, $thisqno  );
  
 $exe->test("f". $expl . $thisqno );
}

  else{
  $thisqno = rand( 1, $maxqno  );
  $exe->test("f". $expl . $thisqno  );
}



?>












</body>
</html>
