<?php
//Get Heroku ClearDB connection information
$cleardb_server = "us-cdbr-east-05.cleardb.net";
$cleardb_username = "us-cdbr-east-05.cleardb.net";
$cleardb_password = "afda8907";
$cleardb_db = "heroku_a2b91699957dc8b";
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
