﻿<?php 




$screens = array();


                   $u=rand(12,90); // unit price
                  $C1=rand(12,50); // count of items
                  $P=($u * $C1); // total price 

                  $C2=rand(2,20);
                  $P2=($C2 * 12 * $u);
                   $C3=($C2 * 12);



	/*************************************************/
	/************** screen start *****************/









	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "यदि $C1 नारियलों का मूल्य $P रूपए हो तो 1 नारियल का मूल्य लगभग कितने रूपए होगा? ";
	$Ascreen["DATA"][] = " ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/











	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "$C1 नारियलों का मूल्य =$P रूपए ";
	$Ascreen["DATA"][] = "1 नारियल का मूल्य = ($P/$C1)रूपए = $u रूपए ";

                     $screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/



	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "$C1 नारियलों का मूल्य =$P रूपए ";
	$Ascreen["DATA"][] = "चुकि $C1 नारियल हैं, इसलिए $P में से $C1 रुपये निकाल  कर हरेक नारियल के नीचे एक एक रुपया रख देते हैं। फिर $C1 रुपये निकाल  कर हरेक नारियल के निचे एक एक रूपये रख देते हैं । इस तरह से एक एक कर के तब तक रुपये नारियल के निचे रखते हैं जबतक सरे रुपये समाप्त हो जाये । इस तरह से हरेक नारियल के निचे $u रुपये होते हैं। अतः एक नारियल का मूल्य रुपये हैं  = $u रूपए ";

                     $screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/





?>