<?php
// Retrieve form data
$name = $_POST['username'];
$email = $_POST['password'];

// Create or open the text file for appending data
$file = fopen("data.txt", "a");

if ($file) {
    // Format the data and write it to the file
    $data = "Name: $name, Email: $email\n";
    fwrite($file, $data);

    // Close the file
    fclose($file);

    echo "Form data has been successfully stored in data.txt.";
} else {
    echo "Error opening the file for writing.";
}
?>
