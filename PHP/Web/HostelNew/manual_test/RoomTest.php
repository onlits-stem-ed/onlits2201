<?php

use hostelnew\hosteller\hosteller;
use hostelnew\room\room;

require_once 'src/requires.php';

$room = new room();
if ("Done!" == $room->index())
    echo "Test passed!";
else
    echo "Test failed!";


$hosteller = new hosteller();
if ("Done!" == $hosteller->index())
    echo "Test passed!";
else
    echo "Test failed!";
