<?php


$screens = array();


	//$k1 = rand(1, 15);
	 

	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = " 'AREA RULE' ";
 	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "1. Meaning of area how much space is occupied dy inclosing boundres . ";
	$Ascreen["DATA"][] = "2. Unit area :- To measure area , we must define a unit area. Unit area or one area = area enclosed by 4 side of square, so that each side is one unit length =/meter.  ";
	$Ascreen["DATA"][] = "3. Area of a rectangle of any size axb.";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "4. Area of right angle triangle =(1/2)a*b .";
	$Ascreen["DATA"][] = "5. Area of any triangle with perpendicular P on base B = (1/2)P*B .";
	$Ascreen["DATA"][] = "P=a*sinθ, => Area of triangle =(1/2)a*b*Sinθ.";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



?>