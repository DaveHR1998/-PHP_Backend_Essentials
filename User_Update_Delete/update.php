<?php
include 'db.php';

if (isset($_GET['id'])) {
    $gid = $_GET['id'];

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$gid'";
        $data = $conn->query($sql);

        if ($data) {
            header("Location: index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $gid; ?>" method="post">
        <input type="text" id="name" name="name" placeholder="Name" required>
        <input type="text" id="email" name="email" placeholder="Email" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="hidden" id="id" name="id" value="<?php echo $gid; ?>">
        <input type="submit" value="Update">
    </form>
</body>
</html>
