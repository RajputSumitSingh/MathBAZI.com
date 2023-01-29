<?php



$screens = array();


	$a = rand(2, 15);
	$b = rand(2, 15);
	$lc = rand(5, 15);
	$lb = rand(5, 15);

	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q. In ∆ABC tan(c)=$a/$b ";
	$Ascreen["DATA"][] = " length(AC)= $lc m, length(BC)= $lb m, ";
	$Ascreen["DATA"][] = " What is the area of triangle ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/


	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "Length of perpendicular from A to BC= P(say) ";
	$Ascreen["DATA"][] = " =length(AC)*sin(C)";
	$Ascreen["DATA"][] = "tan(C)=$a/$b 
=>sin(C)={tan(C)}/√{tan<sup>2</sup>(C)+1}";
	
	$Value1 = $a * $a + $b * $b ;
	$Value2 = sqrt($Value1) ;
	$Value4 = $a/$Value2 ;

	$Ascreen["DATA"][] = "=>Sin(C) = $a/sqrt[ ($a)<sup>2</sup>+($b)<sup>2</sup>]
	   =$Value4 ";
	
	$screens[] = $Ascreen ;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	
	$Value5 = $lc * $Value4 ;
	
	$Ascreen["DATA"][] = "lenght of perpendicular. 
P=lenght(AC)*sin(C)= $lc * $Value4 
		  =$Value5 ";
		
	$Ascreen["DATA"][] = "Area =(1/2)*Perpendicular*length(BC) ";
	$Value6 = (1/2) * $Value5 * $lb ;
	$Ascreen["DATA"][] = "Area =(1/2)*$Value5*$lb ";
	$Ascreen["DATA"][] = "  = $Value6 m<sup>2</sup>";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/






?>