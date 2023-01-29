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
                   $Ascreen["DATA"][] = "Q. :-   Find the formula of area , and actual area of ground of parallogram shape ABCD , AB = CD = $b , AB || CD , and perpendicular distance between AB and CD  = $a.";

	
	
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
                   $Ascreen["DATA"][] = " = 1/2 x H x ( DC + AB ) = 1/2 x H x (AB + AB) = 1/2 x H x (2 x AB) =  H x AB ";
                   $Ascreen["DATA"][] = " So Area of Parallogram  =  (distance between these two parallel sides) x (length of one of these parallel sides) ";
                    
	
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
                   $Ascreen["DATA"][] = " = 1/2 x $a x $b  + 1/2 x $a x $b   ";
                   $Ascreen["DATA"][] = " =   $a x $b = $c ";
                                        	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

?>