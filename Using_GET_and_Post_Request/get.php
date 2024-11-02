<?php
// Handling GET request sent by form submission in `index.php`
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = $_GET['get_data'] ?? ''; // Retrieves data if provided, otherwise empty
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Request Result</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>

    <!-- Display the retrieved GET data -->
    <h1><?php echO $data ; ?></h1> <!-- Display data -->

</body>
</html>
<!-- Prepared by: D@VE_HR  -->
