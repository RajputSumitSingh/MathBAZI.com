<?php

if(isset($_POST['submit']))
{

$group_question_files = array();
$group_question_files[]='1.php';
$group_question_files[]='2.php';
$group_question_files[]='../natural_number_divide/2.php';

$question_bank_question_screen = array();
$question_bank_solution_screen = array();
$question_bank_answer_screen = array();
 
		


foreach($group_question_files as $aquestionfile)

{
	$screens = array();
	include ("$aquestionfile");
	foreach($screens as $Ascreen)
	{
		if($Ascreen["META"]["TYPE"] == "Question")
		{
	$question_bank_question_screen[]=$Ascreen;
	
		}
		
		if($Ascreen["META"]["TYPE"] == "Answer")
		{
	$question_bank_question_screen[]=$Ascreen;
	
		}
		
}
}


$screens = array_slice($question_bank_question_screen,0,2*($_POST['f']));

}

else
{
?>
<!-- HTML form to take input from the user -->
<!DOCTYPE >
<html lang="en">


<body>
<form method="post" action="#">
    
	<div class="form-group mt-3">
<label for="exampleInputUsername">Enter Question Count</label>
<input type="number" class="form-control" id="f" name="f" required="" placeholder="Question count">
</div>
    
	<div class="form-group mt-5 mb-3">
<input type="submit" name="submit" value="Submit" style="font-size:14pt;color:white;background-color:green"><br/>
</div>
	
</form>
</body>
</html>


<?php
}

?>