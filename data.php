    <?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$msg= $POST['message']

// Create or open the text file for appending data
$file = fopen("data.txt", "a");

if ($file) {
    // Format the data and write it to the file
    $data = "Name: $name, Email: $email, Message: $message\n";
    fwrite($file, $data);

    // Close the file
    fclose($file);

    echo "Form data has been successfully stored in data.txt.";
} else {
    echo "Error opening the file for writing.";
}
?>
