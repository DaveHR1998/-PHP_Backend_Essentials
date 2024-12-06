<?php
include 'db.php';

$sql = 'select * from users';
$data = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
        display: flex;
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
        margin: 0; 
    }
    table {
      border-collapse: collapse; /* Correctly apply collapse */
      width: 50%;
    }
    th, td {
      border: 1px solid black; /* Adds borders to table cells */
      padding: 8px;
      text-align: left;
    }
</style>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>PASSWORD</td>
            <td>STATUS</td>
        </tr>
        <?php
        foreach($data as $row){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">
                    <button>Update</button>
                </a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">
                    <button>Delete</button>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
