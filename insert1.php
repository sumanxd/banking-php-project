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
$com_name=$_POST['com_name'];
$com_email=$_POST['com_email'];
$com_phone=$_POST['com_phone'];
$com_loans=$_POST['com_loans'];
$com_comment=$_POST['com_comment'];


$sql="INSERT INTO  complaint_box(com_name,com_email,com_phone,com_loans,com_comment) VALUES
('$com_name','$com_email','$com_phone','$com_loans','$com_comment')";
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
