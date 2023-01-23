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
<html>
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
body {

    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    background-color: #ffffff;
    
}

table {
    margin: auto;
    border-collapse: collapse;
    width: 8cm;
}

th {
    color: #ffffff;
    background-color: #04AA6D;
    text-align: left;
    padding: 8px;
}

td{
    color: #000000;
    text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

<h2>Job Applicant Details</h2>


<table>
  <tr>
  <th>Personal Details</th>
  <th></th>
  </tr>
  <tr>
  <td>Name</td>
  <td><?php echo $row["name"]; ?></td>
  </tr>
  <tr>
  <td>Email ID</td>
  <td><?php echo $row["email"]; ?></td>
  </tr>
  <tr>
  <td>Age</td>
  <td><?php echo $row["age"]; ?></td>
  </tr>
  <tr>
  <td>Phone No</td>
  <td><?php echo $row["phone"]; ?></td>
  </tr>
    <tr>
    <td><a href="logout.php">Logout</a></td>
    <td></td>
    </tr>
</table>

</body>
</html>
