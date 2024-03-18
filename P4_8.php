<!--Write a PHP program to create an array and store 10 names in the array. Do 
the following operations. 
4.8.1 : Display the contents using each statement. 
4.8.2 : Display the array in sorted order. 
4.8.3 : Display the array without the duplicate elements. 
4.8.4 : Remove the last element and display. 
4.8.5 : Display the array in reverse order. 
4.8.6 : Search for an element in the given array. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operations</title>
</head>
<body>
<?php
// Fixed array values
$names = array("Majo", "Anshad", "Nihal", "Hari", "Majo");
echo "<br><b>Contents of the array using each statement:</b><br><hr>";
    foreach ($names as $name) {
        echo $name . "<br>";
    }
    echo "<br>";
?>
<form method="post">
    <label for="search">Enter name to search:</label><br>
    <input type="text" id="search" name="search" required><br>
    <button type="submit">Submit</button>
</form>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the search element from the form
    $searchName = $_POST["search"];

   // 4.8.6 : Search for an element in the given array
   if (in_array($searchName, $names)) {
        echo "$searchName is found in the array.";
    } else {
        echo "$searchName is not found in the array.";
    }

    // 4.8.2 : Display the array in sorted order
    echo "<br><hr><b>Array in sorted order:</b><br><hr>";
    sort($names);
    foreach ($names as $name) {
        echo $name . "<br>";
    }
    echo "<br>";

    // 4.8.3 : Display the array without duplicate elements
    echo "<hr><b>Array without duplicate elements:</b><br><hr>";
    $uniqueNames = array_unique($names);
    foreach ($uniqueNames as $name) {
        echo $name . "<br>";
    }
    echo "<br>";

    // 4.8.4 : Remove the last element and display
    echo "<hr><b>Array after removing the last element:</b><br><hr>";
    array_pop($names);
    foreach ($names as $name) {
        echo $name . "<br>";
    }
    echo "<br>";

    // 4.8.5 : Display the array in reverse order
    echo "<hr><b>Array in reverse order:</b><br><hr>";
    $reversedNames = array_reverse($names);
    foreach ($reversedNames as $name) {
        echo $name . "<br>";
    }
    echo "<br>";

    
}
?>

</body>
</html>
