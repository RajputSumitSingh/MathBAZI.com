<?php







$screens = array();


	$a = 2*rand(5, 15);
	$b = 60-$a;
	$c = $a-30;
	 
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Prove that : ";
	$Ascreen["DATA"][] = " Sin$a+Sin$b = Cos$c ";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "We know that:";
	$Ascreen["DATA"][] = " Sin(A)+Sin(B)=2Sin[(A+B)/2]Cos[(A-B)/2]";
	$Ascreen["DATA"][] = "Then,";
	$Ascreen["DATA"][] = "L.H.S=Sin$a+Sin$b";
	$Ascreen["DATA"][] = "     =2Sin[($a+$b)/2]Cos[($a-$b)/2]";
$Value1=$a+$b;
$Value2=$Value1/2;
$Value3=$a-$b;
$Value4=$Value3/2;
	$Ascreen["DATA"][] = "     =2Sin($Value2)*Cos($Value4)";
$Value5=0.5 ;
$Value6=Cos($Value4);
	$Ascreen["DATA"][] = "     =2*$Value5*$Value6";
$Value7=2*$Value5*$Value6;
	$Ascreen["DATA"][] = "     =$Value7";
	$Ascreen["DATA"][] = "R.H.S=Cos($c)";
$Value8= Cos($c) ;
	$Ascreen["DATA"][] = "     =$Value8";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 


	$Ascreen["DATA"][] = " $Value7=$Value8 ";
	$Ascreen["DATA"][] = "ie., L.H.S=R.H.S ";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/











?>