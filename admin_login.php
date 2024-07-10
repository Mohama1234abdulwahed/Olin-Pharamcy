<!DOCTYPE html>
<?php
include('Admin-erea/includes/connect.php'); 
//  include('../common_function.php');
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form using HTML CSS Only | Codehal</title>

    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #1f293a;
}
.container {
    position: relative;
    width: 256px;
    height: 256px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container span {
    position: absolute;
    left: 0;
    width: 32px;
    height: 6px;
    background: #2c4766;
    border-radius: 8px;
    transform-origin: 128px;
    transform: scale(2.2) rotate(calc(var(--i) * (360deg / 50)));
    animation: animateBlink 3s linear infinite;
    animation-delay: calc(var(--i) * (3s / 50));
}
@keyframes animateBlink {
    0% {
        background: #0ef;
    }
    25% {
        background: #2c4766;
    }
}
.login-box {
    position: absolute;
    width: 400px;
}
.login-box form {
    width: 100%;
    padding: 0 50px;
}
h2 {
    font-size: 2em;
    color: #0ef;
    text-align: center;
}
.input-box {
    position: relative;
    margin: 25px 0;
}
.input-box input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: 2px solid #2c4766;
    outline: none;
    border-radius: 40px;
    font-size: 1em;
    color: #fff;
    padding: 0 20px;
    transition: .5s ease;
}
.input-box input:focus,
.input-box input:valid {
    border-color: #0ef;
}
.input-box label {
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
    transition: .5s ease;
}
.input-box input:focus~label,
.input-box input:valid~label {
    top: 1px;
    font-size: .8em;
    background: #1f293a;
    padding: 0 6px;
    color: #0ef;
}
.forgot-pass {
    margin: -15px 0 10px;
    text-align: center;
}
.forgot-pass a {
    font-size: .85em;
    color: #fff;
    text-decoration: none;
}
.forgot-pass a:hover {
    text-decoration: underline;
}
.btn {
    width: 100%;
    height: 45px;
    background: #0ef;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #1f293a;
    font-weight: 600;
}
.signup-link {
    margin: 20px 0 10px;
    text-align: center;
}
.signup-link a {
    font-size: 1em;
    color: #0ef;
    text-decoration: none;
    font-weight: 600;
}
.signup-link a:hover {
    text-decoration: underline;
}
    </style>
</head>

<body>
<div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="" method="post"> 
         <div class="input-box">
          <input type="text"  name="user_username" placeholder="Username" required> 
           <label for="user_username">Username</label>  </div>
        <div class="input-box">
          <input type="password"  name="user_password" placeholder="Password" required>
          <label for="user_password">Password</label>
        </div>

        <button type="submit"  value="Login" class="btn" name="user_login">Login</button>
        <div class="signup-link">
          <a href="admin-erea/user-erea/user_registration.php">Signup</a>
        </div>


</html>

<?php


// Check if the login form is submitted


// Assuming your database connection is already established ($con)

if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    // Retrieve user data from database based on username
    global $con;
    $select_query = "SELECT * FROM `users` WHERE user_name='$user_username'";
    $result = mysqli_query($con, $select_query);
    $row = mysqli_fetch_assoc($result);
    $row_count = mysqli_num_rows($result); // Count rows returned from the query

    if ($row_count > 0) {
    
       
        
        
     if($row["user_type"] =="admin"){
        echo "<script>window.open('Admin-erea/index.php','_self')</script>";
    }
    elseif($row["user_type"] =="manager"){
        echo "<script>window.open('file-erea/manager.php','_self')</script>";
    }
    elseif($row["user_type"] =="delivery"){
        echo "<script>window.open('View_Delevery.php','_self')</script>";
    }
    
    else {
        // User not found
        echo "<script>alert('User not found');</script>";
    }
    }}




?>
</div>

<span style="--i:0;"></span>
<span style="--i:1;"></span>
<span style="--i:2;"></span>
<span style="--i:3;"></span>
<span style="--i:4;"></span>
<span style="--i:5;"></span>
<span style="--i:6;"></span>
<span style="--i:7;"></span>
<span style="--i:8;"></span>
<span style="--i:9;"></span>
<span style="--i:10;"></span>
<span style="--i:11;"></span>
<span style="--i:12;"></span>
<span style="--i:13;"></span>
<span style="--i:14;"></span>
<span style="--i:15;"></span>
<span style="--i:16;"></span>
<span style="--i:17;"></span>
<span style="--i:18;"></span>
<span style="--i:19;"></span>
<span style="--i:20;"></span>
<span style="--i:21;"></span>
<span style="--i:22;"></span>
<span style="--i:23;"></span>
<span style="--i:24;"></span>
<span style="--i:25;"></span>
<span style="--i:26;"></span>
<span style="--i:27;"></span>
<span style="--i:28;"></span>
<span style="--i:29;"></span>
<span style="--i:30;"></span>
<span style="--i:31;"></span>
<span style="--i:32;"></span>
<span style="--i:33;"></span>
<span style="--i:34;"></span>
<span style="--i:35;"></span>
<span style="--i:36;"></span>
<span style="--i:37;"></span>
<span style="--i:38;"></span>
<span style="--i:39;"></span>
<span style="--i:40;"></span>
<span style="--i:41;"></span>
<span style="--i:42;"></span>
<span style="--i:43;"></span>
<span style="--i:44;"></span>
<span style="--i:45;"></span>
<span style="--i:46;"></span>
<span style="--i:47;"></span>
<span style="--i:48;"></span>
<span style="--i:49;"></span>

</div>