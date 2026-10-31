<?php

/*
PHP supports 3 main types of arrays:
1. Indexed Array
2. Associative Array
3. Multidimensional Array
*/


// INDEXED ARRAY
$skills = ["PHP", "Python", "JavaScript", "SQL"];


// Display individual values
echo $skills[0] . "<br>";
echo $skills[1] . "<br>";
echo $skills[2] . "<br>";
echo $skills[3] . "<br>";

// Display complete array
echo "<pre>";
print_r($skills);
print_r($skills[2]);
echo "</pre>";




// ASSOCIATIVE ARRAY
$student = [
    "name" => "Baban",
    "age" => 24,
    "city" => "Kolkata",
    "course" => "PHP"
];

// Access values using keys
echo "Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "City: " . $student["city"] . "<br>";
echo "Course: " . $student["course"] . "<br>";

// Display complete array
echo "<pre>";
print_r($student);
print_r($student["city"]);
echo "</pre>";



// Multidimensional Array
$students = [
    [
        "name" => "Baban",
        "age" => 24,
        "city" => "Kolkata"
    ],
    [
        "name" => "Rahul",
        "age" => 23,
        "city" => "Delhi"
    ],
    [
        "name" => "Amit",
        "age" => 25,
        "city" => "Mumbai"
    ]
];

// Access individual values
echo $students[0]["name"] . "<br>";
echo $students[1]["name"] . "<br>";
echo $students[2]["name"] . "<br>";

// Display complete array
echo "<pre>";
print_r($students);
echo "</pre>";


?>