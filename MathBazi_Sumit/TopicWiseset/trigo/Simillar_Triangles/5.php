<?php




$screens = array();


	$p = $a =rand(2, 20);
	$q = $b =rand(2, 20);
	$r = $c = 180-($a+$b);



	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "In ∆ABC and ∆PQR ";
	$Ascreen["DATA"][] = " Angle(A)= $a , Angle(B) = $b = Angle(Q), Angle(R)=$c ";
	$Ascreen["DATA"][] = "are the trangles similar ?";
	$Ascreen["DATA"][] = " ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "in ∆ABC Angle(C)=180 degree - {Angle(A)+Angle(B)}";
	$Ascreen["DATA"][] = "    =180-($a+$b)=$c degree";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "To be similar,every corresponding angles of triangles must be equal. ";
	$Ascreen["DATA"][] = "Given Angle(B)=Angle(Q) ,and Angle(R)=$c .";
	$Ascreen["DATA"][] = "but Angle(C)=$c degree. 
=> Angle(R)=Angle(C) ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/








?>