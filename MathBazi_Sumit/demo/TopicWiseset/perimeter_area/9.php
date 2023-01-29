<?php 


$screens = array();
                                  

                             $a = rand(1,15);
                            $b1 = rand(1,10);
                            $b2 = rand(1,10);
                            $b = $b1 +  $b2;
                            $c = $a * $b;
                             $d = ($c/2);         
                                      
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 
                   $Ascreen["DATA"][] = "Q. :-   Find the formula of area , and actual area of ground of trapezium shape ABCD , AB = $b1, CD = $b2 , AB || CD , and perpendicular distance between AB and CD  = $a.";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

                    
                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = "Draw diagonal AC .  So we have two triangles, ADC and ABC. Perpendicular distance from A to DC = Perpendicular distance from C to AB = H (suppose)  ";
                   $Ascreen["DATA"][] = " Area of ABCD = Area of ADC + area of ABC ";
                   $Ascreen["DATA"][] = " = 1/2 x H x DC  + 1/2 x H x AB   ";
                   $Ascreen["DATA"][] = " = 1/2 x H x ( DC + AB )  ";
                   $Ascreen["DATA"][] = " So Area of Parallogram  = 1/2 x  (distance between these two parallel sides) x (sum of two parallel sides) ";
                    
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/


                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = "Draw diagonal AC .  So we have two triangles, ADC and ABC. Perpendicular distance from A to DC = Perpendicular distance from C to AB = $a  ";
                   $Ascreen["DATA"][] = " Area of ABCD = Area of ADC + area of ABC ";
                   $Ascreen["DATA"][] = " = 1/2 x $a x $b2  + 1/2 x $a x $b1   ";
                   $Ascreen["DATA"][] = " =   1/2 x $a x ($b2+$b1)  = 1/2 x $a x $b = $d ";
                                        	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/



?>