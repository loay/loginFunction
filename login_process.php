<?php

include 'connect_to_database.php'; //connect the connection page
  
if(empty($_SESSION)) // if the session not yet started 
//ini_set('session.save_path', 'tmp');
   session_start();
if(!isset($_POST['submit'])) { // if the form not yet submitted
   header("Location: login.php");
   exit; 
}
//check if the username entered is in the database.
$test_query = "SELECT * FROM user WHERE user.userID = '{$_POST['username']}'";
$query_result = mysql_query($test_query);
//conditions
if(mysql_num_rows($query_result)==0) {
//if username entered not yet exists
    echo "Invalid User name and/or Password";
}else {
//if exists, then extract the password.
    while($row_query = mysql_fetch_array($query_result)) {
        // check if password are equal
        
        if($row_query['password']==$_POST['password']){
	     
            $_SESSION['password'] = $_POST['password'];
            header("Location: index.php");   $_SESSION['username'] = $row_query['userID'];
       //     exit; 
        } else{ // if not
            echo "Invalid User name and/Or Password"; 
        }
    }
}

?>
