<?php

echo "Enter Day Number (1-5): ";

$day = (int) readline();

switch ($day) {

    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    case 4:
        echo "Thursday";
        break;

    case 5:
        echo "Friday";
        break;

    default:
        echo "Invalid Day";
}

?>