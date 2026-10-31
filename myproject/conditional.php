<?php

/*
Statement	Purpose
if	Checks a single condition
if...else	Checks a condition with an alternative
if...elseif...else	Checks multiple conditions
switch	Matches a variable against multiple values
Nested if	Checks conditions inside other conditions
*/

// IF STATEMENT

$age = 24;

// if ($age >= 18) {
//     echo "You are eligible to vote.";
// }


// $marks = 75;

// if ($marks >= 90) {
//     echo "Grade A+";
// } elseif ($marks >= 80) {
//     echo "Grade A";
// } elseif ($marks >= 70) {
//     echo "Grade B";
// } elseif ($marks >= 60) {
//     echo "Grade C";
// } else {
//     echo "Fail";
// }

$age = 24;
$hasID = false;

if ($age >= 18) {

    if ($hasID == true) {
        echo "You are eligible.";
    } else {
        echo "ID proof is required.";
    }

} else {
    echo "You must be 18 or older.";
}

?>