<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

</head>
<body>
    <h1 class="">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your dashboard .</h1>
    <p>
        <a href="reset-password.php" ">Reset Your Password</a>
        <a href="logout.php" >Sign Out of Your Account</a>
    </p>
   <h3> Add course: <input type="text" name="new_course" />
      
</body>
</html>
