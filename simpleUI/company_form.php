<!DOCTYPE html>
<html>
<head>
    <title>Company Details Form</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS for advanced styling and background image -->
    <style>
        body {
            background-image: url("https://source.unsplash.com/1920x1080/?nature,landscape");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height: 100%;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Enter Company Details</h1>
        <form method="post" action="store_company.php">
            <div class="form-group">
                <label for="company_name">Company Name:</label>
                <input type="text" class="form-control" name="company_name" required>
            </div>
            <div class="form-group">
                <label for="company_address">Company Address:</label>
                <input type="text" class="form-control" name="company_address" required>
            </div>
            <div class="form-group">
                <label for="company_email">Company Email:</label>
                <input type="email" class="form-control" name="company_email" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js (needed for certain Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
