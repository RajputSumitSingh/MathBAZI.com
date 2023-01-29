<?php 




$screens = array();
                                  

                             $a = rand(1,15);
                            $b = $a;
                            $c = $a * $b;
                                      
                                      
	/*************************************************/
	/************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 
                   $Ascreen["DATA"][] = "Q. :-   Find the area of square ground whose length is $a unit and bredth is $b unit.";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "The ground can be cut along the length in pieces. So each pieces has length of 1 unit and breadth of  $b unit. Let us call these pieces of type A.";
                   $Ascreen["DATA"][] = "There will be $a number of pieces of type A. So the pieces are of 1unit x  $b unit demension. As there are $a such type of pieces.";
	

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




                 /*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "Then we cut each of type A pieces along breadth in pieces. So that each resultant pieces has length of 1 unit and breadth of 1 unit. Let us call these type of pieces of type B.";
	$Ascreen["DATA"][] = "Now we have total number of unit pieces $a x $b unit. The total unit areas to occupy the full square ground is $a x $b.";
                   $Ascreen["DATA"][] = "So the area occupied by square ground is equal to $c unit.";
                   
                   
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/

?>