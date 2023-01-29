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


	$Ascreen["DATA"][] ="Q. In a ∆ABC tan(A)=$b/$a and angle(B)=90˚ then,";
	$Ascreen["DATA"][] = "Find Sin(A), Cos(A), Cot(A), Sec(A), and Cosec(A). ";

	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "Give that, Tan(A)=$b/$a";
	$Ascreen["DATA"][] = "Let, Side AB=$a and Side BC=$b then,";
	$Ascreen["DATA"][] = "AC=√{(BC<SUP>2</SUP>)+(AB<SUP>2</SUP>)}";	
	$Ascreen["DATA"][] = "AC=√{($b<SUP>2</SUP>)+($a<SUP>2</SUP>)}";
$value1=$b*$b; 
$value2=$value1; 
$value3=$a*$a; 
$value4=$value3; 
	$Ascreen["DATA"][] = "AC=√{($value2)+($value4)}";
$value5=$value2 + $value4;
	$Ascreen["DATA"][] = "AC = √($value5)";

$value6=sqrt($value5);
	$Ascreen["DATA"][] = "AC = $value6=$c";
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

	$Ascreen["DATA"][] = "";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




?>