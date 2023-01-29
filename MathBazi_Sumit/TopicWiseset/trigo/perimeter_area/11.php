<?php 




$screens = array();
                                  

                             $r1 = rand(2,20);
                            $r = $r1 * 7;

                            $perimeter =44 *  $r / 7;   
                            $area =22 * $r * $r / 7;         
                                      
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 
                   $Ascreen["DATA"][] = "Q. :-   Find the formula of area and actual area within a circle,where,  circle radius = $r meter ";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

                    
                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Process ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 

                   $Ascreen["DATA"][] = "Area within circular arc = (1/2)  x Radius of the circle x Arc Length      ";
                     
                   $Ascreen["DATA"][] = "Length of circular arc of a circle =  (44/7)  x Radius of the circle        ";
                     
                   $Ascreen["DATA"][] = "So area within a circule = (1/2)  x Radius of the circle x (44/7)  x Radius of the circle      ";
                     
                   $Ascreen["DATA"][] = "So area within a circule = (22/7)  x Radius of the circle  x Radius of the circle      ";
                     

	$screens[] = $Ascreen;


	                                     /************** screen stop***********************/
                                                         /*************************************************/



                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Process ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 

                   $Ascreen["DATA"][] = "Area within circular arc = (1/2)  x Radius of the circle x Arc Length      ";
                     
                   $Ascreen["DATA"][] = "Length of circular arc of a circle =  (44/7)  x Radius of the circle    = (44/7)  x $r = $perimeter     ";
                     
                   $Ascreen["DATA"][] = "So area within a circule = (1/2)  x $r x $perimeter  = $area   ";
                     
                   
	$screens[] = $Ascreen;


	                                     /************** screen stop***********************/
                                                         /*************************************************/


	                                     /************** screen stop***********************/
                                                         /*************************************************/

?>