<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'banking'))
{
	echo 'database not selected';
}
$fed_name=$_POST['fed_name'];
$fed_email=$_POST['fed_email'];
$fed_phone=$_POST['fed_phone'];
$fed_comment=$_POST['fed_comment'];


$sql="INSERT INTO feedback(fed_name,fed_email,fed_phone,fed_comment) VALUES
('$fed_name','$fed_email','$fed_phone','$fed_comment')";
if(!mysqli_query($con,$sql))
{
	echo '<script type="text/javascript">alert("Problem in database");</script>';
}
else
{
	echo '<script type="text/javascript">alert("Data inserted successfully");</script>';
}
header("refresh:0; url=index.html");

?>

