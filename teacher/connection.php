<?php
session_start();
$conn = mysqli_connect("localhost","root","","teacher");
if (!$conn){
    echo "Not Connected";
}

?>
