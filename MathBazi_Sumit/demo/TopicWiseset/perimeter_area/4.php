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
                   $Ascreen["DATA"][] = "Q. :-   Find the area of right angle triangular ground whose length is $a unit and bredth is $b unit.";

	
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/

                    
                                      	/*************************************************/
	                   /************** screen start *****************/

	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Process"; 
                   $Ascreen["DATA"][] = "The right angle triangular ground of $a unit length and $b unit breadth is half of a rectangular ground of $a unit length and $b unit breadth, when the rectangular ground is diagonaly cut into two halves.  ";
                   $Ascreen["DATA"][] = "  ";
                   $Ascreen["DATA"][] = "So, the area occupied by right angle triangular ground is half of the area occupied by the rectangular ground.  ";
                   $Ascreen["DATA"][] = "  ";
                   $Ascreen["DATA"][] = "So, let us first calculate area of the rectangular ground of $a unit length $b unit breadth and by making it's area half, we can get area of right angle triangular ground.  ";
                    
	
	$screens[] = $Ascreen;

	                                     /************** screen stop***********************/
                                                         /*************************************************/




	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "The ground can be cut along the length in pieces. So each pieces has length of 1 unit and breadth of  $b unit. Let us call these pieces of type A.";
                  $Ascreen["DATA"][] = "  ";
                   $Ascreen["DATA"][] = "There will be $a number of pieces of type A. So the pieces are of 1unit x  $b unit demension. As there are $a such type of pieces.";
	

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




                 /*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "Then we cut each of type A pieces along breadth in pieces. So that each resultant pieces has length of 1 unit and breadth of 1 unit. Let us call these type of pieces of type B.";
                    $Ascreen["DATA"][] = "  ";
	$Ascreen["DATA"][] = "Now we have total number of unit pieces $a x $b unit. The total unit areas to occupy the full rectangular ground is $a x$b.";
                 $Ascreen["DATA"][] = "  ";
                   $Ascreen["DATA"][] = "So the area occupied by rectangular ground is equal to $c unit.";
                   
                   
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/
 
                      
	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "As the area of right angle triangular ground is half of the rectangular ground so the area of right angle triangular ground= $c/2 = $d";
                   $Ascreen["DATA"][] = "  ";
                 //  $Ascreen["DATA"][] = "There will be $a number of pieces of type A. So the pieces are of 1unit x  $b unit demension. As there are $a such type of pieces.";
	
                    $Ascreen["DATA"][] = "  ";
	

	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



?>