<?php 




$screens = array();
                                  

                             $h = rand(2,20);
                             $r1 = rand(2,20);
                            $r = $r1 * 7;

                            $perimeter =44 *  $r / 7;   
                            $area =$h * $perimeter;         
                                      
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 
                   $Ascreen["DATA"][] = "Q. :-   Find the formula of area and actual area of the curved surface area of a cylinder ,where,   radius of cylinder= $r meters, and height of cylinder = $h meters ";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

                    
                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Process ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 

                   $Ascreen["DATA"][] = "when a hollow cyliner is cut length-wise, it turns into a rectangular sheet, with height of the rectangle= height of the cylinder, and width of the rectangle = perimeter of the cirlular base of the cylinder  = (44/7) x rdius of the cylinder    ";
                     
                   $Ascreen["DATA"][] = "So, area of the curved surface of the cylinder = area of the rectangle made by cutting the cylinder length-wise      ";
                     
                   $Ascreen["DATA"][] = "  Width of the rectangle  x Height of the rectangle    ";
                     
                   $Ascreen["DATA"][] = "   (44/7) x Radius of the cylinder x Height of the cylinder  ";
                     
	$screens[] = $Ascreen;


	                                     /************** screen stop***********************/
                                                         /*************************************************/



                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Process ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 

                   $Ascreen["DATA"][] = "when a hollow cyliner is cut length-wise, it turns into a rectangular sheet, with height of the rectangle= height of the cylinder = $h , and width of the rectangle = perimeter of the cirlular base of the cylinder  = (44/7) x rdius of the cylinder  = $perimeter  ";
                     
                   $Ascreen["DATA"][] = "So, area of the curved surface of the cylinder = area of the rectangle made by cutting the cylinder length-wise      ";
                     
                   $Ascreen["DATA"][] = "  $h  x $perimeter  = $area  ";
                     
	$screens[] = $Ascreen;


	                                     /************** screen stop***********************/
                                                         /*************************************************/


	                                     /************** screen stop***********************/
                                                         /*************************************************/

?>