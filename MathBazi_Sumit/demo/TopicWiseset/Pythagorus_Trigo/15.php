<?php








$screens = array();


	 $a = rand(2, 15);
	 $b = 60+$a;



	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q. Prove sin$b - (1/2)sin$a = (√3/2)cos$a ";
	$Ascreen["DATA"][] = "";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "Let, L.H.S= sin$b - (1/2)sin$a ";
	$Ascreen["DATA"][] = "          = [sin$b-sin$a]+(1/2)sin$a";
	$Ascreen["DATA"][] = "          = [2sin{($b-$a)/2}Cos{($b+$a)/2}]+(1/2)sin$a ";
$value1=$b-$a ;
$value2=$value1/2 ;
	$Ascreen["DATA"][] = "          = [2sin{$value2}Cos{(60+$a+$a)/2}]+(1/2)sin$a ";
$value3=0.5;

	$Ascreen["DATA"][] = "          = [2sin{$value2}Cos{(60+2*$a)/2}]+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = [2sin{$value2}Cos(30+$a)]+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = [2*$value3*Cos(30+$a)]+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = [2*$value3*Cos(30+$a)]+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = Cos(30+$a)+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = {Cos(30)*cos$a-sin(30)*sin$a}+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = {(√3/2)*cos$a-(1/2)*sin$a}+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = (√3/2)*cos$a-(1/2)*sin$a+(1/2)sin$a ";
	$Ascreen["DATA"][] = "          = (√3/2)*cos$a";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "R.H.S=(√3/2)*cos$a";
	$Ascreen["DATA"][] = "ie., L.H.S = R.H.S";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









?>