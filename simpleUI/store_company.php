<?php
// Database connection settings
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = "";     // Change this to your MySQL password
$dbname = "com";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the input data to prevent SQL injection
    $company_name = mysqli_real_escape_string($conn, $_POST["company_name"]);
    $company_address = mysqli_real_escape_string($conn, $_POST["company_address"]);
    $company_email = mysqli_real_escape_string($conn, $_POST["company_email"]);

    // Insert the data into the database
    $sql = "INSERT INTO details (company_name, company_address, company_email) 
            VALUES ('$company_name', '$company_address', '$company_email')";

    if ($conn->query($sql) === TRUE) {
        echo "Company details stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
