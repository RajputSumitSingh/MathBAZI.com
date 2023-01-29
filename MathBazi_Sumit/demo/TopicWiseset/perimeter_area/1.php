<?php 



$screens = array();
                                  

                             $a = rand(1,15);
                            $b = rand(1,10);
                            $c = $a * $b;
                                      
                                      
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 
                   $Ascreen["DATA"][] = "Q. :- Find the area of rectangular ground whose length is $a unit and breadth is 1 unit.";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "The rectangular ground can be cut along the length in pieces. So each pieces has length of 1 unit and breadth of  1 unit. Let us call these pieces of type A.";
                   $Ascreen["DATA"][] = "There will be $a number of pieces of type A.  Each piece is of 1unit x  1 unit demension. So each piece has one unit area.";
	

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




                 /*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 

                   $Ascreen["DATA"][] = "As there are $a number of pieces and each piece is of  one unit area.";
	
                   $Ascreen["DATA"][] = "So the area of ground  is equal to $a unit area.";
                   
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/

?>