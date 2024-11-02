<?php
/*
===========================================================
Title: PHP Array Operations with Detailed Examples
Description: This code demonstrates various ways to work with both 
one-dimensional and two-dimensional arrays in PHP, including 
index-based and associative arrays. Examples cover both indexed 
arrays and associative arrays, utilizing `for` and `foreach` loops.
Prepared by: Dawit Yetmgeta
===========================================================
*/

/*
===================== One-Dimensional Array ======================
*/

// Creating an index-based one-dimensional array
$data = [1, 2, 3, 4, 5];

// Using a `for` loop to iterate over the array by index
for ($i = 0; $i < count($data); $i++) {
    echo $data[$i], '<br>'; // Display each element in the array
}

// Using `foreach` loop for simpler syntax without managing indexes
foreach ($data as $row) {
    echo $row, '<br>'; // Display each element directly
}

// Creating an associative array with key-value pairs
$data_assoc = ['one' => "Abel", 'two' => 'Ruth', 'three' => 'Samuel', 'four' => 'Rachel'];

// Looping over associative array to get values only
foreach ($data_assoc as $row) {
    echo $row, "<br>"; // Display values (e.g., Abel, Ruth, etc.)
}

// Looping over associative array to get both keys and values
foreach ($data_assoc as $key => $value) {
    echo 'Key is: ', $key, " Value is: ", $value, '<br>'; // Display key-value pairs
}

/*
===================== Two-Dimensional Array ======================
*/

// Creating an index-based two-dimensional array
$_2ddata = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
);

// Using nested `for` loops to display elements of the 2D array by index
for ($row = 0; $row < 3; $row++) { // Loop over rows
    for ($col = 0; $col < 3; $col++) { // Loop over columns in each row
        echo $_2ddata[$row][$col], " | "; // Display each element with separator
    }
    echo "<br>"; // Line break after each row
}

// Using `foreach` loops to iterate over the two-dimensional array
foreach ($_2ddata as $row) { // Outer loop iterates over rows
    foreach ($row as $col) { // Inner loop iterates over columns in each row
        echo $col, " | "; // Display each element with separator
    }
    echo "<br>"; // Line break after each row
}

/*
===================== Associative Two-Dimensional Array ======================
*/

// Creating an associative two-dimensional array with nested associative arrays
$_2d_assoc = [
    ['name' => 'Abel', 'age' => '20', 'id' => 'A001'],
    ['name' => 'Ruth', 'age' => '23', 'id' => 'A002'],
    ['name' => 'Samuel', 'age' => '27', 'id' => 'A003'],
    ['name' => 'Hikma', 'age' => '21', 'id' => 'A004'],
];

// Displaying only values in the associative two-dimensional array
foreach ($_2d_assoc as $row) {
    echo "Name: ", $row['name'], " Age: ", $row['age'], " ID: ", $row['id'], "<br>";
}

// Displaying both keys and values in the associative two-dimensional array
foreach ($_2d_assoc as $row) {
    foreach ($row as $key => $value) { // Inner loop to access key-value pairs
        echo $key, " : ", $value, " | "; // Display each key and corresponding value
    }
    echo '<br>'; // Line break after each row
}

?>
