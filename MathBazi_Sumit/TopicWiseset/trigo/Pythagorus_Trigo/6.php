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

	$Ascreen["DATA"][] = "Q. In ∆ABC, angle(B)=90˚ tan(c) = $a1/$b1 and length(AC) = $c .Find length of other two sides and sin(A) -> [using similar triangle comparison] ";
	$Ascreen["DATA"][] = " ";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/





	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process";
	$Ascreen["DATA"][] = "Let a ∆PQR be similar to ∆ABC  ";
	$Ascreen["DATA"][] = " angle(θ) = angle(B) = 90˚";
	$Ascreen["DATA"][] = "let PQ =$a1 as tan(R) = PQ/QR = $a1/$b1  ";
	$Ascreen["DATA"][] = "=> QR = PQ*($b1/$a1) = $a1($b1/$a1) = $b1 ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "Using:  A<sup>2</sup> = B<sup>2</sup> + C<sup>2</sup>   ";
	$Ascreen["DATA"][] = "=> RP<sup>2</sup> = PQ<sup>2</sup> + QR<sup>2</sup> ";
	$Ascreen["DATA"][] = "=> RP<sup>2</sup> = ($a1)<sup>2</sup> + ($b1)<sup>2</sup> = $c1<sup>2</sup>";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process";
	$Ascreen["DATA"][] = " As ∆PQR and ∆PQR are similar let side of ∆ABC be x time bigger then ∆PQR. ";
	$Ascreen["DATA"][] = "=> AB/PQ = BC/QR = CA/RP ";
	$Ascreen["DATA"][] = "=> x = CA/RP = $c/$c1 = $k ";
	$Ascreen["DATA"][] = "=> AB= x*PQ = $k*$a1 = $a ";
	$Ascreen["DATA"][] = "=> BC= x*RQ = $k*$b1 = $b ";
	$Ascreen["DATA"][] = "sin(A)= sin(P) = $a1/$c1 ";
$value1 = $a1/$c1;
	$Ascreen["DATA"][] = "=>sin(A)= sin(P) = $value1 ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/






?>