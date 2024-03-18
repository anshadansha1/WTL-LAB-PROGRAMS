<!--Write a PHP program to check whether a given number is Armstrong or not.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number Checker with Popup</title>
</head>
<body>

<form method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number">
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input number from the form
    $number = $_POST["number"];
    
    // Function to check if a number is Armstrong
    function isArmstrong($num) {
        $sum = 0;
        $temp = $num;
        $digits = strlen($num);
        
        while ($temp != 0) {
            $remainder = $temp % 10;
            $sum += pow($remainder, $digits);
            $temp = intval($temp / 10);
        }
        
        return $num == $sum;
    }
    
    // Check if the input number is Armstrong
    if (isArmstrong($number)) {
        echo "<script>alert('{$number} is an Armstrong number.')</script>";
    } else {
        echo "<script>alert('{$number} is not an Armstrong number.')</script>";
    }
}
?>

</body>
</html>
