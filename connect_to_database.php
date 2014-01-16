<?php
mysql_connect("localhost","username","password") or die(mysql_error()); 
mysql_select_db("databaseName");

//or if it is not localhost then it could be like that

//mysql_connect("mysql.freehosting.com","username","password") or die(mysql_error()); 
//mysql_select_db("databaseName");
?> 
