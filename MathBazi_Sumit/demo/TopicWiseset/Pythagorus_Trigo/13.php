<?php






$screens = array();


	$a = rand(2, 15);
	$b = 60-$a ;
	$c = 90-$a ;
	$d = ($b-$a)/2 ;


	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q. :-";
	$Ascreen["DATA"][] = " Prove Cos$c + Sin$b = Cos$d";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = " L.H.S=Cos$c+Sin$b  ";
	$Ascreen["DATA"][] = "      = sin(90-$c)+sin$b";
	$Ascreen["DATA"][] = "      = sin$a+sin$b";
	$Ascreen["DATA"][] = "      = 2sin{($a+$b)/2}*cos{($b-$a)/2}";
$value1 = $a+$b ;
$value2 = $value1/2 ;
$value3 = $b-$a ;
$value4 = $value3/2 ;
	$Ascreen["DATA"][] = "      = 2sin{$value2}*cos{$value4} ";
$value5 = 0.5 ;

	$Ascreen["DATA"][] = "      = 2*{$value5}*cos{$value4} ";
	$Ascreen["DATA"][] = "      = 1*cos{$value4} ";
	$Ascreen["DATA"][] = "      = cos{$value4} ";
	$Ascreen["DATA"][] = "       ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "R.H.S = Cos$d";
	$Ascreen["DATA"][] = "ie., L.H.S = R.H.S";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









?>