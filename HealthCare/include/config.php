<?php
define('DB_SERVER','us-cdbr-east-05.cleardb.net');
mysql://:@/heroku_a2b91699957dc8b 
define('DB_USER','b56702afc843f9');
define('DB_PASS' ,'afda8907');
define('DB_NAME', 'dmkkahi0skp5p');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
