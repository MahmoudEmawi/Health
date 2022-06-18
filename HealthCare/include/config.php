<?php
define('DB_SERVER','ec2-54-157-16-196.compute-1.amazonaws.com:5432');
define('DB_USER','vvhmdnzdzcqhtm');
define('DB_PASS' ,'1822ba4e5b23b328cc0e1b0a7c197473b61c1ebb69073b50c49ee513ea3ac80e');
define('DB_NAME', 'dmkkahi0skp5p');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
