<?php




$screens = array();


	$a = rand(1, 89);
	$c = 90-$a;




	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "Q. ∆ABC and ∆PQR similar.";
	$Ascreen["DATA"][] = "Angle(B)=90 degree and Angle(Q)=90 degree ";
	$Ascreen["DATA"][] = "Angle(A)=$a degree. Find Angle(C), Angle(P), Angle(R). ";
	$Ascreen["DATA"][] = "";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "in ∆ABC: Angle(A)+Angle(B)+Angle(C)=180 degree";
	$Ascreen["DATA"][] = "Angle(B)=90 degree=> Angle(A)+Angle(C) = 90 degree";
	$Ascreen["DATA"][] = "=>Angle(C)=90 degree - $a degree ";
	$Ascreen["DATA"][] = "     =$c degree ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "As ∆ABC and ∆PQR are similar.";
	$Ascreen["DATA"][] = " Angle(P)=Angle(A) = $a degree";
	$Ascreen["DATA"][] = " Angle(Q)= Angle(B) =90 degree as given. ";
	$Ascreen["DATA"][] = "Angle(R)= Angle(C)=$c degree ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/





?>