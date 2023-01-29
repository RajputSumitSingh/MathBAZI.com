<?php 




$screens = array();


                   $u=rand(12,90); // unit price
                  $C1=rand(12,50); // count of items
                  $P=($u * $C1); // total price 

                  $C2=rand(2,20);
                  $P2=($C2  * $u);
                   $C3=($C2 * 12);











	/*************************************************/
	/************** screen start *****************/







     /*************************************************/
	/************** screen start *****************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "TopicHeading"; 
	$Ascreen["HEADING_TEXT"]= "Item Price Calculation";

  $Ascreen["DATA"][] = "Calculating the price of few item by knowing the price of some count of items.";
        $screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	/*********** Question ************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Question"; 

	$Ascreen["DATA"][] = "यदि $C1 नारियलों का मूल्य $P रूपए हो तो $C2 नारियल का मूल्य लगभग कितने रूपए होगा? ";
	$Ascreen["DATA"][] = " ";
	$screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/




			       /*************************************************/
	/************** screen start *****************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Method_Count_Box"; 
        $Ascreen["DATA"][] = " Solving by common sense.";

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






	/*************************************************/
	/************** screen start *****************/
	$Ascreen = array();

	$Ascreen["META"]["TYPE"] = "Process"; 
	$Ascreen["DATA"][] = "1 नारियल का मूल्य = $u रूपए ";
	$Ascreen["DATA"][] = "$C2 नारियल का मूल्य = $u + $u+ $u ... ($C2 बार ) रूपए = $u x $C2 = $P2 रूपए ";
                     $screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/










	       /*************************************************/
	/************** screen start *****************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "ShowNotes"; 
        $Ascreen["DATA"][] = '<section id="details" class="details">
				<div class="container">
	
					<div class="row content">
						<div class="col-md-4" data-aos="fade-right">
							<img src="../../assets/img/details-1.png" class="img-fluid" alt="">
						</div>
						<div class="col-md-8 pt-4" data-aos="fade-up">
							<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
							<p class="font-italic">
							</p>
							<ul>
								<li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
								<li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
								<li><i class="icofont-check"></i> Iure at voluptas aspernatur dignissimos doloribus repudiandae.</li>
								<li><i class="icofont-check"></i> Est ipsa assumenda id facilis nesciunt placeat sed doloribus praesentium.</li>
							</ul>
							
						</div>
					</div>
	
					
	
				</div>
			</section>';

        $screens[] = $Ascreen;

	/************** screen stop *****************/
	/*************************************************/









	
			       /*************************************************/
	/************** screen start *****************/
	$Ascreen = array();
	$Ascreen["META"]["TYPE"] = "Method_Count_Box"; 
        $Ascreen["DATA"][] = " Solving by Unitery Method.";

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


