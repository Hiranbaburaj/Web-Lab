<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
    header .header{
    background-color: #fff;
    height: 45px;
    }
    header a img{
    width: 134px;
    margin-top: 4px;
    }
    .login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
    }
    .login-page .form .login{
    margin-top: -31px;
    margin-bottom: 26px;
    }
    .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .inpt {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
    }

    a {
        font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    text-align: center;
    display: block;
    text-decoration: none !important;
    outline: 0;
    background-color: #328f8a;
    background-image: linear-gradient(45deg,#328f8a,#08ac4b);
    border: 0;
    padding: 15px;
    margin: 0 0 15px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    }

    .btn{
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background-color: #328f8a;
    background-image: linear-gradient(45deg,#328f8a,#08ac4b);
    width: 100%;
    border: 0;
    padding: 15px;
    margin: 0 0 15px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
    }


    .form .message {
    margin: 15px 0 0;
    color: #b3b3b3;
    font-size: 12px;
    }
    .form .message a {
    color: #4CAF50;
    text-decoration: none;
    }

    .container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
    }

    body {
    background-color: #328f8a;
    background-image: linear-gradient(45deg,#328f8a,#08ac4b);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
</style>

<body>
    <div class="login-page">
        <div class="form">
          <div class="login">
            <div class="login-header">
              <h3>Applicant Details</h3>
              <p>Please Enter Details</p>
            </div>
          </div>
 <form action="" method="post">

 <input class="inpt" type="text" name="name" placeholder="Name:"/>
 <input class="inpt" type="text" name="email" placeholder="Email Id:"/>
 <input class="inpt" type="text" name="age" placeholder="Age:"/>
 <input class="inpt" type="text" name="phone" placeholder="Phone No:"/>
 <input class="inpt" type="password" name="password" placeholder="Password:"/>
 <input class="inpt" type="password" name="confirmpassword" placeholder="Confirm Password:"/>
 <input class ="btn" type="submit" name="submit">
 <input class ="btn" type="reset" name="reset">
 </form>
</body>
</html>

<?php

require 'connection.php';

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo "<script>alert('Email Already Exists')</script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO `user`(`email`, `name`, `age`, `password`, `phone`) 
            VALUES ('$email','$name','$age','$password','$phone')";
            mysqli_query($conn, $query);
                echo
                "<script> alert('Data Entered Successfully'); </script>";
        }

        else    {
            echo
            "<script> alert('Password Does not match');</script>";
        }
    }
}

?>