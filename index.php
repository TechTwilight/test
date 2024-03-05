<?php

// Check if the 'text' parameter is set in the query
if (isset($_GET['text'])) {
    // Get the value of the 'text' parameter
    $text = $_GET['text'];

    // Output the text
    echo "Received text: $text";
} else {
    // If 'text' parameter is not set, provide a default message
    echo "Please provide a 'text' parameter in the query.";
}

?>
