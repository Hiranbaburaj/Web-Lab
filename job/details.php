<?php
require 'connection.php';
if(!empty($_SESSION["email"])){
  $email = $_SESSION["email"];
  $result = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
<?php echo $row["name"]; ?>
<?php echo $row["email"]; ?>
<?php echo $row["age"]; ?>
<?php echo $row["phone"]; ?>
<a href="logout.php">Logout</a>

</body>
</html>