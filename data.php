<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$msg= $_POST['message'];


// Define the CSV file name and open it for appending
$filename = "userdata.csv";
$file = fopen($filename, "a"); // "a" mode for append, creates the file if it doesn't exist

if ($file) {
    // Format the data as a CSV row
    $csvData = "$name, $email,$msg\n";

    // Write the data to the CSV file
    fwrite($file, $csvData);

    // Close the CSV file
    fclose($file);

    echo "User data has been successfully stored in $filename.";
} else {
    echo "Error opening the file for writing.";
}
?>
