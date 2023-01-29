<?php
// Program to display URL of current page.

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
	$link = "https";
else
	$link = "http";

// Here append the common URL characters.
$link .= "://";

// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];
	
// Print the link
// echo $link;
?>
 
 
 <!-- ======= Class Plan Section ======= -->
 <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2> Calculation Speed Booster </h2>
          <p>
          ✈ Click on the 《more so》 button in the timer panel . 
          <br>✈Another question will appear with different numerical values . 
          <br>✈Now try to solve it faster. <br>✈Check your speed by the timer. 
          
          
          
          <br><br>✈<a class="mt-4 " style="text-align:left;" class="btn" href="https://api.whatsapp.com/send?phone=&text=<?php foreach (
                  $THIS_QUESTION_TEXT_ARRAY
                   as   $quest) {
  // echo '<br>';
  $quest=str_replace (' ','%20',$quest);
  $quest=preg_replace('/<br>|\n/','%0A',$quest);
  echo $quest;
  // print_r($quest);
  }?>%0ALink%20:%20<?php echo$link;?>%0A%0AMySpeedForThisQuestion:%20%0A"  target="_blank" rel="noopener noreferrer">Share your speed on<img  src="https://static.whatsapp.net/rsrc.php/yz/r/lOol7j-zq4u.svg" alt="Share to Whatsapp" height="50" width="50" rounded></a>
  
  
  
          
          <br><br>✈<a class="mt-4 " style="text-align:left;" class="btn" href="https://t.me/share/url?text=<?php 
          
          foreach (
                  $THIS_QUESTION_TEXT_ARRAY
                   as $quest) {
  // echo '<br>';
  $quest=str_replace (' ','%20',$quest);
  $quest=preg_replace('/<br>|\n/','%0A',$quest);
  echo $quest;
  // print_r($quest);
  }?>%0ALink%20:%20<?php echo$link;?>%0A%0AMySpeedForThisQuestion:%20%0A"  target="_blank" rel="noopener noreferrer">Share your speed on <img  src="https://tse1.mm.bing.net/th?id=OIP.kRKgyh2m_R3VonzoIGJ5kQAAAA&pid=Api&P=0&w=334&h=334" alt="Share to Telegram" height="50" width="50" rounded></a>
  
  
  

  
  
          
          <br><br>✈<a href='http://t.me/AptitudeMathSpeedBoosterEatMaths' target="_blank" rel="noopener noreferrer">
          JOIN our TELEGRAM  group : @AptitudeMathSpeedBoosterEatMaths
          
          </a>.



          
          
          </p>

          <br><br>✈<a type="button" class="btn btn-primary" href=' ' rel="noopener noreferrer"><b>REFERESH FOR OTHER QUESTION</b></a><br><br>
          
          <iframe width="360" height="315" src="https://www.youtube.com/embed/nQ_wCUJ_5do" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          <br><br>✈<a type="button" class="btn btn-primary" href=' ' rel="noopener noreferrer"><b>REFERESH FOR OTHER QUESTION</b></a>

        </div>

      </div>
    </section><!-- End Class Plan Section -->
    
    
    
    
    
    
    
    
    
     <!-- ======= Class Plan Section ======= -->
 <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Want some question of your choice</h2>
          <p>If you want to practice some questions which are not available here then send us the details of the question in our whatsapp 
          <a href='https://api.whatsapp.com/send?phone=917291934297."&text=My%20Name:%0AMy%20City%20and%20State:%0AMy%20Question:%0A%0A%0A' target="_blank" rel="noopener noreferrer">7291934297</a>.</p>
        </div>

      </div>
    </section><!-- End Class Plan Section -->
    
    
    
    
    
    
    
    
    
    
    
    
    
     <!-- ======= Class Plan Section ======= -->
 <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Want to practice on hundreds of varity of such questions</h2>
          <p>Call 7463918936, and book your limited premium membership. Monthly rupees 150/- only. Online tutorial classes also available seprately for making your basics and theory strong.</p>
        </div>

      </div>
    </section><!-- End Class Plan Section -->

