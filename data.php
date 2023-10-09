<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];

// Format the data
$data = "Name: $name\nEmail: $email\n";

// Define the filename and open the file for writing
$filename = "userdata.txt";
$file = fopen($filename, "a"); // "a" mode for append, creates the file if it doesn't exist

if ($file) {
    // Write the data to the file
    fwrite($file, $data);
    
    // Close the file
    fclose($file);

    echo "User data has been successfully stored in $filename.";
} else {
    echo "Error opening the file for writing.";
}
?>
