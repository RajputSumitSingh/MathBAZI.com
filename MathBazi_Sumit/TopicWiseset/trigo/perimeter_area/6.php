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
                   $Ascreen["DATA"][] = "Q. :-   Find the formula of area , and actual area of Obtuse triangular ground ABC , obtuse at angle B. BC = $b, and the perpendicular distance from A to BC = $a.";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

                    
                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = "Draw AD perpendicular to BC. so ADB and ADC are two right angled triangles  ";
                   $Ascreen["DATA"][] = " Area of ABC = Area of ADC - area of ADB ";
                   $Ascreen["DATA"][] = " = 1/2 x AD x DC  + 1/2 x AD x DB   ";
                   $Ascreen["DATA"][] = " = 1/2 x AD x ( DC - DB ) = 1/2 x AD x BC ";
                   $Ascreen["DATA"][] = " So Area of An  obtuse triangle = 1/2 x Perpendicular length  x Base length  ";
                    
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/


                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = "Draw AD perpendicular to BC. so ADB and ADC are two right angled triangles  ";
                   $Ascreen["DATA"][] = " Area of ABC = Area of ADC - area of ADB ";
                   $Ascreen["DATA"][] = " = 1/2 x $a x DC  + 1/2 x $a x DB   ";
                   $Ascreen["DATA"][] = " = 1/2 x $a x ( DC - DB ) = 1/2 x $a x BC ";
                   $Ascreen["DATA"][] = "= 1/2 x $a x $b = 1/2 x $c = $d  ";
                    	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

?>