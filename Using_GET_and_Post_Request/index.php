<?php 
// Initializing a variable to be sent via a GET request link
$data3 = "DATA THREE"; // This will be used in the "Send Get Request by link" section
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to CSS file for consistent styling -->
</head>
<body>

    <!-- GET Request Form -->
    <h3>Get Request</h3>
    <form action="get.php" method="get">
        <input type="text" name="get_data" id="" placeholder="Enter data for GET">
        <input type="submit" value="Get Submit">
    </form>

    <!-- POST Request Form -->
    <h3>Post Request</h3>
    <form action="post.php" method="post">
        <input type="text" name="post_data" id="" placeholder="Enter data for POST">
        <input type="submit" value="Post Submit">
    </form>

    <!-- Section to trigger GET request through link click -->
    <section>
        <h3>Get by using Link</h3>
        <a  href="link.php?data=<?php echo $data3; ?>">Send Get Request by link</a>
    </section>

</body>
</html>
<!-- Prepared by: D@VE_HR -->
