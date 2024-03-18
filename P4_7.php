<!--Write a PHP program to store the current date/time in a cookie and display
the ‘last visited on‘ date and time on the web page upon reopening the same
page.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visited On</title>
</head>
<body>

<?php
// Check if the 'last_visited' cookie is set
if (isset($_COOKIE['last_visited'])) {
    $lastVisited = $_COOKIE['last_visited'];
    echo "<p>Last visited on: $lastVisited</p>";
}

// Store the current date/time in a cookie named 'last_visited'
$currentDateTime = date("Y-m-d H:i:s");
setcookie('last_visited', $currentDateTime, time() + (86400 * 30), "/"); // Cookie expires in 30 days
?>

</body>
</html>
