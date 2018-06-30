<?php
$host="localhost";
$username="root";
$password="";
$db_name="banking";

$conn=mysqli_connect($host,$username,$password,$db_name);
if($conn)
	echo "Database connected successfully.";
else
	echo "Unable To connect with the Database.";


?>