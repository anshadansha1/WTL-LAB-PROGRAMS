<!--Write a PHP program to illustrate Cookies.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>

<?php
// Check if the cookie is set
if (!isset($_COOKIE['visited'])) {
    // If not set, set a cookie to track the number of visits
    $count = 1;
    setcookie('visited', $count, time() + (86400 * 30), "/"); // Cookie expires in 30 days
    echo "<p>Welcome! This is your first visit.</p>";
} else {
    // If set, retrieve the cookie value and increment the count
    $count = $_COOKIE['visited'] + 1;
    setcookie('visited', $count, time() + (86400 * 30), "/"); // Update cookie with incremented count
    echo "<p>Welcome back! You have visited this page $count times.</p>";
}
?>

<p>Refresh the page to see the cookie in action.</p>

</body>
</html>
