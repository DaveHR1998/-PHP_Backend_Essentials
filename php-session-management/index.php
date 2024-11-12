<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Login form directing to login.php -->
    <form action="login.php" method="post">
        <label for="e">Email:</label>
        <input type="email" name="email" id="e" required>
        <br>

        <label for="p">Password:</label>
        <input type="password" name="password" id="p" required>
        <br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
