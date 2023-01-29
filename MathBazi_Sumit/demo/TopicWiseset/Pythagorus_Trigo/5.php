<?php

$screens = array();


	$k = rand(2, 6);


	$a1 = 1 + 2 * rand(1, 15);
	$b1 = ($a1*$a1 - 1) / 2 ;
	$c1 = sqrt($a1*$a1 + $b1*$b1);
	if( rand(0,1) == 0 ){
		$temp = $a1;
		$a1 = $b1;
		$b1 = $temp;
	}



	$a = $a1 * $k;
	$b = $b1 * $k;
	$c = $c1 * $k;



	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q.In ∆ABC, angle(B)=90˚ tan(c) = $a1/$b1 and length(AC) = $c .";
	$Ascreen["DATA"][] = "Find length of other two sides and sin(A) -> [use simple ratio technique]";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/






	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process";
	$Ascreen["DATA"][] = "length(AB)/length(BC)=tan(C)=$a1/$b1";
	$Ascreen["DATA"][] = "=> length(AB)=($a1/$b1)*length(BC)";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/





	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "AC<sup>2</sup> = AB<sup>2</sup>+BC<sup>2</sup>";
	$Ascreen["DATA"][] = "AC<sup>2</sup> = {($a1/$b1)*length(BC)}<sup>2</sup> + BC<sup>2</sup>";
	$Ascreen["DATA"][] = "AC<sup>2</sup> = {length(BC)}<sup>2</sup>[($a1/$b1)<sup>2</sup> + 1]";
	$Ascreen["DATA"][] = "AC<sup>2</sup> = {length(BC)}<sup>2</sup>[($a1<sup>2</sup> +$b1<sup>2</sup>)/$b1<sup>2</sup>]";
	$Ascreen["DATA"][] = "AC<sup>2</sup> = {length(BC)}<sup>2</sup>[($c1<sup>2</sup>)/($b1<sup>2</sup>)]";
	$Ascreen["DATA"][] = "AC = √[{length(BC)}<sup>2</sup>{($c1<sup>2</sup>)/($b1<sup>2</sup>)}] ";
	$Ascreen["DATA"][] = "AC = length(BC)*{($c1)/($b1)} ";
	$Ascreen["DATA"][] = "";
	$Ascreen["DATA"][] = " ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "As AC = $c  then,";
	$Ascreen["DATA"][] = "=>$c = length(BC)*{($c1)/($b1)}";
	$Ascreen["DATA"][] = "=>length(BC) = ($c)($b1)/{($c1)} ";
$value1 = $c*$b1 ;
	$Ascreen["DATA"][] = "=>length(BC) = $value1/{($c1)} ";
$value2 = $value1/$c1 ;
	$Ascreen["DATA"][] = "=>length(BC) =  $value2";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = " AB/BC = tan(C) = $a1/$b1";
	$Ascreen["DATA"][] = "=> AB/BC = $a1/$b1";
	$Ascreen["DATA"][] = "=> AB = BC($a1/$b1)";
$value3 = $a1/$b1;
	$Ascreen["DATA"][] = "=> AB = $b*$value3";
$value4 = $b*$value3;
	$Ascreen["DATA"][] = "=> AB =  $value4";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$value5 = $b/$c;
	$Ascreen["DATA"][] = " Sin(A) = BC/CA = $b/$c = $b1/$c1 = $value5 ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/







?>