<?php
declare(strict_types=1);

ini_set('display_errors' ,"1" );
ini_set('display_startup_errors',"1");
error_reporting(E_ALL);


// === Exercise 2 ===

function new_exercise() {

    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";

    echo $block;
}
new_exercise();




// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[1];


echo $week[0];





