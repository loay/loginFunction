<?php
ob_start();
include 'connect_to_database.php'; //connect the connection page
if(empty($_SESSION)) // if the session not yet started 
ini_set('session.save_path', 'tmp');
   session_start();


if(isset($_SESSION['username'])) { // if already login
   header("location: index.php"); // send to home page
   exit; 
}

ob_flush();
?>
<html>
<head>
<title>Login Page</title>

</head>
<body>

<p align="center">
<table>
<form action = "login_proccess.php" method = "post">
Username: </td><td><input type="text" name="username" /> </td></tr>
<tr><td>Password: </td><td><input type="password" name="password" /> </td></tr>
<tr><td ><input class="button" type = "submit" name="submit" value="Login" /></td></tr>
 
</form>
</td></tr></table>
</p>

</body>
</html>
