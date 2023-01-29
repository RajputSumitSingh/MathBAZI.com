<?php


$screens = array();


	$a = rand(20, 40);
	$b = rand(20, 40);
	$c = rand(20, 40);
	$m = rand(2, 10);
	$a1 = $a*$m;
	$b1 = $b*$m;
	$c1 = $c*$m;



	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q. ∆ABC & ∆PQR are similar";
	$Ascreen["DATA"][] = "length(AB)=$a m, length(BC)=$b m, length(CA)=$c m, length(QR)=$b1 m. ";
	$Ascreen["DATA"][] = "find the value of length(PQ) & length(RP)";
	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "As ∆ABC and ∆PQR are similar ";
	$Ascreen["DATA"][] = "=> (PQ/AB)=(QR/BC)=(RP/CA).";

	$Ascreen["DATA"][] = "We know corresponding sides of the trangles:  BC= $b m and QR = $b1 m.";
	$Ascreen["DATA"][] = "=> QR/BC=$b1/$b=$m.";
	$Ascreen["DATA"][] = "so ∆PQR is $m times bigger then ∆ABC in length.";
	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "length(PQ)=$m*length(AB)=$m*$a =$a1";
	$Ascreen["DATA"][] = "length(RP)=$m*length(CA)=$m*$a =$c1";

	$Ascreen["DATA"][] = "";
	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/





?>