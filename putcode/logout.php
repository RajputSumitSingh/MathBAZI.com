<?php
$page_title='Logedout';
include 'header.php';

session_start();


//destroy the session data on disk
// session_destroy(

  unset($_SESSION[$course_session_array_key]);

;

?>


    <section class="inner-page">
      <div class="container">
      <h2 class="text-center" style="font-weight:700"> Logged Out</h2>
      <div class="databox ">
        
      <p class="lead text-center text-danger"> Thank you for your visit. You are now logged out.</p>

      <a style="width: 100%;" href="../" class="btn btn-secondary btn-lg active mt-5" role="button" aria-pressed="true">Go To Eat Maths</a>
      <a style="width: 100%;" href="index.php" class="btn btn-secondary btn-lg active mt-3" role="button" aria-pressed="true">Go To Put-Code Home</a>

      </div>
      </div>
    </section>

    <?php
    include 'footer.php';
    ?>

  