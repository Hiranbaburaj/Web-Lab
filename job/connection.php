<?php
session_start();
$conn = mysqli_connect("localhost","root","","job");
if (!$conn){
    echo "Not Connected";
}

?>