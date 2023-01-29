<?php 




$screens = array();
                                  

                             $r1 = rand(2,20);
                            $r = $r1 * 100;
                             $a = rand(2,20);
                            $area = $a * $r;
                            $area =$area / 2;         
                                      
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 
                   $Ascreen["DATA"][] = "Q. :-   Find the formula of area and actual area within an arc of a circle,where, arc length = $a c.m and radius = $r1 meter ";

	
	$screens[] = $Ascreen;
	                                     /************** screen stop***********************/
                                                         /*************************************************/

                    
                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = " let arc be AB and center of circle be C  ";
                   $Ascreen["DATA"][] = " draw straight line AC and BC . ";
                   $Ascreen["DATA"][] = " AB is very small compared to the actual circumference.  AB looks a like straight line. ";
                   $Ascreen["DATA"][] = " = so ABC looks like a trianle
AB  ";
                   $Ascreen["DATA"][] = "  draw CD so that AD  = BD.   From symmetry CD is perpedicular to AB.";

                   $Ascreen["DATA"][]  = " so perpendiculars distance of AB from C =CD = radius of circle  ";

                   $Ascreen["DATA"][] = " so area of ABC =(1/2) x (CD) x (AB)";
                   
                   $Ascreen["DATA"][] = "= (1/2)  x Radius of the circle x Arc Length      ";
                     
                   $Ascreen["DATA"][] = "So area within circular arc = (1/2)  x Radius of the circle x Arc Length      ";
                     
                     

                                   
	
	$screens[] = $Ascreen;


	                                     /************** screen stop***********************/
                                                         /*************************************************/



                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = " let arc be AB and center of circle be C  ";
                   $Ascreen["DATA"][] = " draw straight line AC and BC . ";
                   $Ascreen["DATA"][] = " AB is very small compared to the actual circumference.  AB looks a like straight line. ";
                   $Ascreen["DATA"][] = " = so ABC looks like a trianle
AB = $a ";
                   $Ascreen["DATA"][] = "  draw CD so that AD  = BD.   From symmetry CD is perpedicular to AB.";

                   $Ascreen["DATA"][]  = " so perpendiculars distance of AB from C =CD = radius of circle =$r1  meters = $r cm. ";

                   $Ascreen["DATA"][] = " so area of ABC =(1/2)* (CD) * (AB)";
                   
                   $Ascreen["DATA"][] = "= (1/2)  ($a)  ($r)     ";
                     
                     
                   $Ascreen["DATA"][] = "=  $area   ";
                                   
	
	$screens[] = $Ascreen;


	                                     /************** screen stop***********************/
                                                         /*************************************************/

?>