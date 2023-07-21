<!DOCTYPE html>
<html>
<head>
    <title>Company Details Form</title>
    <!-- Add Bootstrap CSS (optional) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="text-center">Company Details</h1>
            </div>
            <div class="card-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="form-group">
                        <label for="companyName">Company Name:</label>
                        <input type="text" class="form-control" name="companyName" required>
                    </div>

                    <div class="form-group">
                        <label for="companyAddress">Company Address:</label>
                        <textarea class="form-control" name="companyAddress" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="companyEmail">Company Email:</label>
                        <input type="email" class="form-control" name="companyEmail" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="submit">Save</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
                    $name = $_POST['companyName'];
                    $address = $_POST['companyAddress'];
                    $email = $_POST['companyEmail'];
                    $phone = $_POST['companyPhone']; // User input for phone (added later)

                    // Database connection settings
                    $servername = "localhost";
                    $username = "root"; // Replace with your MySQL username (usually "root" in XAMPP)
                    $password = ""; // Replace with your MySQL password (usually empty in XAMPP)
                    $dbname = "companydb"; // Replace with the name of your database

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $companydb);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Prepare and execute SQL query to insert data into the database
                    $sql = "INSERT INTO company_details (name, address, email, phone) VALUES ('companyName', 'companyAddress', 'companyEmail', 'companyPhone')";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssss", $name, $address, $email, $phone);

                    if ($stmt->execute()) {
                        echo '<div class="alert alert-success">Company details saved successfully!</div>';
                    } else {
                        echo '<div class="alert alert-danger">Error: ' . $stmt->error . '</div>';
                    }

                    // Close statement and connection
                    $stmt->close();
                    $conn->close();
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
