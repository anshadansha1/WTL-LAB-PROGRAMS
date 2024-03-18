<!--Write a PHP program to use the global keyword to access a global variable
from within a function.-->
<?php

// Define a global variable
$globalVariable = "I am a global variable.";

// Function to access the global variable using the global keyword
function accessGlobalVariable() {
    // Access the global variable using the global keyword
    global $globalVariable;
    echo $globalVariable;
}

// Call the function to access the global variable
accessGlobalVariable();

?>
