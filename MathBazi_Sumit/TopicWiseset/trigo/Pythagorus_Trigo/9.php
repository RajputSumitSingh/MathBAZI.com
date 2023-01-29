<?php


$screens = array();


	$ap = rand(3, 15);
	$ab = rand(3, 15) ;
	$bp = rand(3, 15) ;
	$bb = rand(3, 15) ;
	$ah = sqrt($ap * $ap + $ab * $ab) ;
	$bh = sqrt($bp * $bp + $bb * $bb) ;

	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Question"; 
	$Ascreen["DATA"][] = "Q. :- ";
	$Ascreen["DATA"][] = "tan(A)= $ap/$ab ";
	$Ascreen["DATA"][] = "tan(B)= $bp/$bb ";
	$Ascreen["DATA"][] = " Find Sin(A),Cos(A),Sin(B),Cos(B), Sin(A+B), Cos(A+B) . ";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/





	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "Sin(A) = tan(A)/√{1+tan<sup>2</sup>(A)} 
        = $ap/√{($ap)<sup>2</sup>+($ab)<sup>2</sup>} ";

	$value1 = sqrt($ap * $ap + $ab * $ab) ;
	$value2 = $ap/ $value1 ;

	$Ascreen["DATA"][] = "<b><i> Sin(A)= $value2 </i></b>";
	$Ascreen["DATA"][] = " Cos(A)= 1/√{1+tan<sup>2</sup>(A)} ";
	$Ascreen["DATA"][] = " Cos(A)= $ab/√{($ap)<sup>2</sup>+($ab)<sup>2</sup>}";

	$Value4 = $ab/sqrt($ap * $ap + $ab * $ab) ;
	  
	$Ascreen["DATA"][] = " <b><i>Cos(A)= $Value4  </i></b>";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "Similarly find Sin(B), Cos(B) .";
	$Ascreen["DATA"][] = "Sin(B)=tan(B)/√{1+tan<sup>2</sup>(B)}";
	$value5=sqrt($bp*$bp + $bb*$bb);
	$value6=$bp/$value5 ;

	$Ascreen["DATA"][] = "<b>Sin(B)=$value6 </b>";
	$Ascreen["DATA"][] = "Cos(B)=1/√{1+tan<sup>2</sup>(B)}";	

	$value7=  $bb /sqrt($bp * $bp + $bb * $bb);
	
	$Ascreen["DATA"][] = "<b>Cos(B)= $value7 </b>";

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 


	$Ascreen["DATA"][] = "Sin(A+B)=Sin(A)*Cos(B)+Cos(A)*Sin(B)";
$value8= $value2* $value7 + $Value4*$value6 ;

	$Ascreen["DATA"][] = "<b>Sin(A+B)=$value8 </b>";
	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/





	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

	$Ascreen["DATA"][] = "Cos(A+B)=Cos(A)*Cos(B)-Sin(A)*Sin(B)";
$value9= $Value4* $value7 - $value2*$value6 ;

	$Ascreen["DATA"][] = "<b>Cos(A+B)=$value9</b>";
	$Ascreen["DATA"][] = "";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	
	$Ascreen["DATA"][] = "<b>Sin(A)=$value2</b>";
	$Ascreen["DATA"][] = "<b>Cos(A)=$Value4</b>";
	$Ascreen["DATA"][] = "<b>Sin(B)=$value6</b>";
	$Ascreen["DATA"][] = "<b>Cos(B)=$value7</b>";

	$Ascreen["DATA"][] = "<b>Sin(A+B)=$value8</b>";
	$Ascreen["DATA"][] = "<b>Cos(A+B)=$value9</b>";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/






?>