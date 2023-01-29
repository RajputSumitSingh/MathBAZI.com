<?php



$screens = array();


	$la = rand(7, 15);
	$lc = rand(7, 15);
	$p1 = rand(7, 15);
	$b1 = rand(7, 15);





	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "In ∆ABC lengle(AB)=$la , lengle(AC)=$lc , tan(B) = $p1/ $b1 ";
	$Ascreen["DATA"][] = "Find area of the triangle.";


	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "let AP be perpendicular on BC from A .";
	$Ascreen["DATA"][] = "length(AP)= length(AB)*Sin(B)";
	$Ascreen["DATA"][] = "Sin(B) = {tan(B)}/sqrt{tan<sup>2</sup>(B)+1}";

	$Value1 = $p1 * $p1 + $b1 * $b1 ;
	$Value2 =  sqrt($Value1);
	$Value3 =  $p1 / $Value2 ;


	$Ascreen["DATA"][] = " Sin(B)=$p1/sqrt{($p1)<sup>2</sup>+($b1)<sup>2</sup> } = $Value3 ";
	$Value4 =  $la * $Value3 ;

	$Ascreen["DATA"][] = "length(AP)= $la * $Value3 
	= $Value4 .";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/







	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "length(AP) = length(AC) * sin(C)";
	$Ascreen["DATA"][] = " => sin(C) = length(AP) / length(AC)";
	$Value5 =   $Value4/ $lc ;
	$Ascreen["DATA"][] = " => sin(C) = $Value5 ";

	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = " We know perpendicular.To find area, we need to know base.";
	$Ascreen["DATA"][] = " length(AB) =length(BP)+length(PC)";
	$Ascreen["DATA"][] = " ";
	
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/






	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 


	$Ascreen["DATA"][] = " cos(B) = √{1-sin<sup>2</sup>(B)} 
	 = √{1-($Value3)<sup>2</sup>}";
	$Value7 = 1-($Value3)*($Value3) ;
	$Value8 = Sqrt($Value7) ;
	$Ascreen["DATA"][] = " Cos(B) = $Value8 ";
	$Value9 = 1-($Value5)*($Value5) ;
	$Value10 = sqrt($Value9) ;
	$Ascreen["DATA"][] = " cos(C) = √{1-sin<sup>2</sup>(C)}
         = Sqrt{1-$Value5<sup>2</sup>}";

	$Ascreen["DATA"][] = "=>cos(C)= $Value10 ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Value11 = $la*$Value8 ;
	$Value12 = $lc*$Value10 ;
	$Value14 = $Value11 + $Value12 ;
	$Ascreen["DATA"][] = " length(BC) =length(AB)*cos(B)+length(CA)* cos(C) ";
	$Ascreen["DATA"][] = "=>length(AB)= $la * $Value8 + $lc * $Value10  ";
	$Ascreen["DATA"][] = "=>length(AB)= $Value14 ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/






	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "Area of triangle .. ";
	$Ascreen["DATA"][] = " =(1/2)*Perpendicular*Base ";
	$Ascreen["DATA"][] = " =(1/2)*$Value4 * $Value14";
	$Value15 = (0.5)*$Value4*$Value14 ;
	$Ascreen["DATA"][] = " =$Value15 m<sup>2</sup>.";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/


 


	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 



	$Ascreen["DATA"][] = "";
	$Ascreen["DATA"][] = "";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/







?>