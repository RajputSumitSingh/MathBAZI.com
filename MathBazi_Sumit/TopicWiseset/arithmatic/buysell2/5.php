<?php

$group_question = array();
$group_question[]='2_1.php';
$group_question[]='2_3.php';
$group_question[]='2_3.php';
$group_question[]='2.php';

$group_question_count=count($group_question);
$group_question_count=$group_question_count-1;
$group_question_showindex=rand(0,$group_question_count);

include($group_question[$group_question_showindex]);



?>