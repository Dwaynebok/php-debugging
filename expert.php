<?php
declare(strict_types=1);

ini_set('display_errors' ,"1" );
ini_set('display_startup_errors',"1");
error_reporting(E_ALL);



function new_exercise() {


    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";

    echo $block;

}


new_exercise();

