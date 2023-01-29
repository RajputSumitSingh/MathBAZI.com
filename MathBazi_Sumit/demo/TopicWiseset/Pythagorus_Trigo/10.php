<?php





$screens = array();


	$a = 2*rand(10, 20) ;
	$b = 120-$a ;
	$c = 60-$a ;
	$d = (-1)*$c ;


	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q. Prove that :";
	$Ascreen["DATA"][] = " Cos$a +Cos$b = Cos$c =Cos(-$d)";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "Let:-";
	$Ascreen["DATA"][] = "L.H.S= Cos$a+Cos$b";
	$Ascreen["DATA"][] = "We know that,";
	$Ascreen["DATA"][] = "  Cos(A)+Cos(B)=2Cos[(A+B)/2]*Cos[(A-B)/2]";
	$Ascreen["DATA"][] = "Then, ";
	$Ascreen["DATA"][] = "L.H.S=Cos$a+Cos$b";
	$Ascreen["DATA"][] = "     =2Cos[($a+$b)/2]Cos[($a-$b)/2]";
$value1=$a+$b ;
$value2=$value1/2 ;
$value3=$a-$b ;
$value4=$value3/2 ;
	$Ascreen["DATA"][] = "     =2cos($value2)*Cos($value4)";
$value5= 0.5 ;
$value6= Cos($value4);
	$Ascreen["DATA"][] = "     =2*$value5*$value6 ";
$value7=$value5*$value6 ;
	$Ascreen["DATA"][] = "     =2*$value7 ";
$value8=2*$value7 ;
	$Ascreen["DATA"][] = "     =$value8 ";
$value9=Cos(-$d);
	$Ascreen["DATA"][] = "R.H.S=cos($d)";
	$Ascreen["DATA"][] = "Cos($d)=$value9";
	$Ascreen["DATA"][] = "=>Cos($d)=$value9 ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "R.H.S=Cos($c)";
$Value10=Cos($c);
	$Ascreen["DATA"][] = "     =$Value10=$value9";
	$Ascreen["DATA"][] = "ie. L.H.S=R.H.S";
	$Ascreen["DATA"][] = "";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/













?>