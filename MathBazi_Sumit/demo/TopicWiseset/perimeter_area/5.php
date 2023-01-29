<?php 




$screens = array();
                                  

                             $a = rand(1,15);
                            $b = rand(1,10);
                            $b = (2 * $b);
                            $c = $a * $b;
                             $d = ($c/2);         
                                      
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 
                   $Ascreen["DATA"][] = "Q. :-   Find the formula of area , and actual area of Acute angle triangular ground ABC whose perpenidcular length from vertex A is $a unit and side length (BC)opposite to the vertex is $b unit.";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

                    
                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = "Draw AD perpendicular to BC. so ADB and ADC are two right angled triangles  ";
                   $Ascreen["DATA"][] = " Area of ABC = Area of ADB + area of ADC ";
                   $Ascreen["DATA"][] = " = 1/2 x AD x BD  + 1/2 x AD x DC   ";
                   $Ascreen["DATA"][] = " = 1/2 x AD x ( BD + DC ) = 1/2 x AD x BC ";
                   $Ascreen["DATA"][] = " So Area of An acute triangle = 1/2 x Perpendicular length  x Base length  ";
                    
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = "Draw AD perpendicular to BC. so ADB and ADC are two right angled triangles  ";
                   $Ascreen["DATA"][] = " Area of ABC = Area of ADB + area of ADC ";
                   $Ascreen["DATA"][] = " = 1/2 x $a x BD  + 1/2 x $a x DC   ";
                   $Ascreen["DATA"][] = " = 1/2 x $a x ( BD + DC ) = 1/2 x $a x BC ";
                   $Ascreen["DATA"][] = "= 1/2 x $a x $b = 1/2 x $c = $d  ";
                    
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

?>