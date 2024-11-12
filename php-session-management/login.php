<?php
// Check if the form was submitted with a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the email and password from the submitted form data
    $mail = $_POST["email"];
    $pass = $_POST["password"];

    // Define the correct email and password for validation
    $email = "b@gmail.com";
    $password = "123";

    // Validate the provided email and password against the stored values
    if ($email === $mail && $password === $pass) {
        // Start the session and set session variables
        session_start();
        $_SESSION['user'] = $mail;
        $_SESSION['password'] = $pass;

        // Redirect to home.php upon successful login
        header('Location: home.php');
        exit(); // Ensure no further code runs after the redirect
    } else {
        // Display an error message if the credentials are invalid
        echo "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- Login form -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
