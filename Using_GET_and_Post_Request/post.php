<?php
// Handling POST request sent by form submission in `index.php`
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['post_data'] ?? ''; // Retrieves data if provided, otherwise empty
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Request Result</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file -->
</head>
<body>

    <!-- Display the retrieved POST data -->
    <h1><?php echo $data; ?></h1> <!-- Display data -->

</body>
</html>
<!-- Prepared by: D@VE_HR -->
