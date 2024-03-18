<!--Write a PHP program to convert a decimal number into a binary number.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
</head>
<body>

<form method="post">
    <label for="decimal">Enter a decimal number:</label>
    <input type="number" id="decimal" name="decimal" min="0" required>
    <button type="submit">Convert</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the decimal number from the form
    $decimal = $_POST["decimal"];

    // Function to convert decimal to binary
    function decimalToBinary($decimal) {
        $binary = '';
        while ($decimal > 0) {
            // Append the remainder of division by 2 to the binary string
            $binary = ($decimal % 2) . $binary;
            // Divide the decimal number by 2
            $decimal = intval($decimal / 2);
        }
        return $binary;
    }

    // Convert the decimal number to binary
    $binary = decimalToBinary($decimal);
    echo "<p>Binary representation of {$decimal} is {$binary}.</p>";
}
?>

</body>
</html>
