<?php
// Handling GET request sent through link click in `index.php`
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = $_GET['data'] ?? ''; // Retrieves 'data' if provided, otherwise empty
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link GET Request Result</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>

    <!-- Display the retrieved data sent through link -->
    <h1><?php echo $data; ?></h1> <!-- Display data -->

</body>
</html>
<!-- Prepared by: D@VE_HR -->
