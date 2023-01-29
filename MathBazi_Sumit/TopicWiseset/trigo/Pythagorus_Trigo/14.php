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
	$Ascreen["DATA"][] = " Prove Cos$a + cos$b = √(3)Cos$d";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = " L.H.S=Cos$a+cos$b  ";
	$Ascreen["DATA"][] = "      = cos$a+Cos$b";
	$Ascreen["DATA"][] = "";
	$Ascreen["DATA"][] = "      = 2cos{($a+$b)/2}*cos{($b-$a)/2}";
$value1 = $a+$b ;
$value2 = $value1/2 ;
$value3 = $b-$a ;
$value4 = $value3/2 ;
	$Ascreen["DATA"][] = "      = 2cos{$value2}*cos{$value4} ";
$value5 = 1/2 ;

	$Ascreen["DATA"][] = "      = 2*{√3*$value5}*cos{$value4} ";
	$Ascreen["DATA"][] = "      = √3*cos{$value4} ";
	$Ascreen["DATA"][] = "      = √3cos{$value4} ";
	$Ascreen["DATA"][] = "       ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "R.H.S = √3Cos$d";
	$Ascreen["DATA"][] = "ie., L.H.S = R.H.S";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/










?>