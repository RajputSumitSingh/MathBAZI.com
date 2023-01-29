<?php







$screens = array();


	$a = rand(2, 40);
	$b = rand(20, 40);
	$c = rand(20, 40);
	$m = rand(2, 10);
	$a1 = $a*$m ;
	$b1 = $b*$m ;
	$c1 = $c*$m ;






	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "∆ABC and ∆PQR are similar. ";
	$Ascreen["DATA"][] = "length(AB)=$a , length(BC)=$b , length(CA)=$c,";
	$Ascreen["DATA"][] = "Find the ratios of the lengths of side. PQ/QR , QR/RP , RP/PQ .";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = " As ∆ABC and ∆PQR are similar corresponding sides ∆PQR will be all N time bigger or smaller , where N is some number.";
	$Ascreen["DATA"][] = " ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "=> PQ = N*AB , QR= N*BC , RP = N*CA .  ";
	$Ascreen["DATA"][] = "=> PQ/QR =[(N*AB)/(N*BC)] = (AB/BC) = $a/$b .";
	$value =$a/$b ;
	$Ascreen["DATA"][] = " PQ/QR = AB/BC =$value ";
	$Ascreen["DATA"][] = " ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/







?>