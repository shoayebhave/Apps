<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo 'Not Connnected to server';
}

if(!mysqli_select_db($con,'tutorial'))
{
 echo 'Database Not Selected';
}
 
$Name = $_POST['username'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Address = $_POST['address'];
$Company = $_POST['company'];
$Income = $_POST['income'];
$Designation = $_POST['designation'];

$sql="INSERT INTO person (Name,Email,Phone,Address,Company,Income,Designation) VALUES('$Name','$Email','$Phone','$Address','$Company','$Income','$Designation')";
if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else{
	echo 'Inserted';
}

header("refresh:20; url=index.html");



?>