
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
<style>
    *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
body{
    font-family: Helvetica;
    -webkit-font-smoothing: antialiased;
    background: rgba( 71, 147, 227, 1);
}
h2{
    text-align: center;
    font-size: 18px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: white;
    padding: 30px 0;
}

/* Table Styles */

.table-wrapper{
    margin: 10px 70px 40px;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

.fl-table {
    border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white;
}

.fl-table td, .fl-table th {
    text-align: center;
    padding: 8px;
}

.fl-table td {
    border-right: 1px solid #f8f8f8;
    font-size: 12px;
}

.fl-table thead th {
    color: #ffffff;
    background: #4FC3A1;
}


.fl-table thead th:nth-child(odd) {
    color: #ffffff;
    background: #324960;
}

.fl-table tr:nth-child(even) {
    background: #F8F8F8;
}

/* Responsive */

@media (max-width: 767px) {
    .fl-table {
        display: block;
        width: 100%;
    }
    .table-wrapper:before{
        content: "Scroll horizontally >";
        display: block;
        text-align: right;
        font-size: 11px;
        color: white;
        padding: 0 0 10px;
    }
    .fl-table thead, .fl-table tbody, .fl-table thead th {
        display: block;
    }
    .fl-table thead th:last-child{
        border-bottom: none;
    }
    .fl-table thead {
        float: left;
    }
    .fl-table tbody {
        width: auto;
        position: relative;
        overflow-x: auto;
    }
    .fl-table td, .fl-table th {
        padding: 20px .625em .625em .625em;
        height: 60px;
        vertical-align: middle;
        box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: auto;
        width: 120px;
        font-size: 13px;
        text-overflow: ellipsis;
    }
    .fl-table thead th {
        text-align: left;
        border-bottom: 1px solid #f7f7f9;
    }
    .fl-table tbody tr {
        display: table-cell;
    }
    .fl-table tbody tr:nth-child(odd) {
        background: none;
    }
    .fl-table tr:nth-child(even) {
        background: transparent;
    }
    .fl-table tr td:nth-child(odd) {
        background: #F8F8F8;
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tr td:nth-child(even) {
        border-right: 1px solid #E6E4E4;
    }
    .fl-table tbody td {
        display: block;
        text-align: center;
    }
}
a {
    display: flex;
    font-family: "Roboto", sans-serif;
text-transform: uppercase;
outline: 0;
text-decoration: none !important;
background-color: #324960;
border-radius: 10px;
width: fit-content;
border: 0;
padding: 15px;
margin-left: 75px;
line-height: 20px;
color: #ffffff;
font-size: 14px;
font-weight: 600;
-webkit-transition: all 0.3 ease;
transition: all 0.3 ease;
cursor: pointer;
}
</style>
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>Roll No</th>
            <th>KTU ID</th>
            <th>Name</th>
            <th>Series 1</th>
            <th>Series 2</th>
            <th>Assignment 1</th>
            <th>Assignment 2</th>
            <th>Attendance</th>
        </tr>
        </thead>
<tbody>

<?php

require 'connection.php';

$sql = "SELECT * FROM `student`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>

  <tr>
  <td><?php echo $row["rollno"]; ?></td>
            <td><?php echo $row["ktuid"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["ser1"]; ?></td>
            <td><?php echo $row["ser2"]; ?></td>
            <td><?php echo $row["as1"]; ?></td>
            <td><?php echo $row["as2"]; ?></td>
            <td><?php echo $row["attn"]; ?></td>
  </tr>
  <?php
  }
} 
  else {
    echo "<script>alert('Database Empty!!!!')</script>";
  }
  ?>
</tbody>
</table>

</div>
<a href="sdetail.php">Enter STUDENT DETAILS</a><br>
<a href="sdetail.php">LOGOUT</a>

</body>
</html>