<?php



$screens = array();

	$a = 1 + 2 * rand(1, 15);
	$b = ($a*$a - 1) / 2 ;
	$c = sqrt($a*$a + $b*$b);



	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q. In a right-angle, ∆ABC Sin(A)=$b/$c ";
	$Ascreen["DATA"][] = "Find  Cos(A), tan(A),Cot(A), Sec(A), and Cosec(A). ";
	$Ascreen["DATA"][] = "";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "Give that, sin(A)=$b/$c";
	$Ascreen["DATA"][] = "Let, Side AC=$c and Side BC=$b then,";
	$Ascreen["DATA"][] = "AB=√{(AC<SUP>2</SUP>)-(BC<SUP>2</SUP>)}";	
	$Ascreen["DATA"][] = "AB=√{($c<SUP>2</SUP>)-($b<SUP>2</SUP>)}";
$value1=$b*$b; 
$value2=$value1; 
$value3=$c*$c; 
$value4=$value3; 
	$Ascreen["DATA"][] = "AB=√{($value4)-($value2)}";
$value5=$value4 - $value2;
	$Ascreen["DATA"][] = "AB= √($value5)";
$value6=sqrt($value5);
	$Ascreen["DATA"][] = "AB= $value6 ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
$value7=$b/$c;
	$Ascreen["DATA"][] = "Sin(A)=$b/$c=$value7";
$value8=$a/$c;
	$Ascreen["DATA"][] = "Cos(A)=$a/$c=$value8";
$value9=$a/$b;
	$Ascreen["DATA"][] = "Cot(A)=$a/$b=$value9";
$value10=$c/$a;
	$Ascreen["DATA"][] = "sec(A)=$c/$a=$value10";
$value11=$c/$b;
	$Ascreen["DATA"][] = "Cosec(A)=$c/$b=$value11";
$value12=$b/$a;
	$Ascreen["DATA"][] = "tan(A)=$b/$a=$value12";

	$Ascreen["DATA"][] = " ";
	$Ascreen["DATA"][] = " ";

 
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/






?>