<!--Check whether a year is a leap year or not by inserting a year in PHP.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>

<form method="post">
    <label for="year">Enter a year:</label>
    <input type="number" id="year" name="year" min="1" required>
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input year from the form
    $year = $_POST["year"];
    
    // Function to check if a year is a leap year
    function isLeapYear($year) {
        return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
    }
    
    // Check if the input year is a leap year
    if (isLeapYear($year)) {
        echo "<p>{$year} is a leap year.</p>";
    } else {
        echo "<p>{$year} is not a leap year.</p>";
    }
}
?>

</body>
</html>
