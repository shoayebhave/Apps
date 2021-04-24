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
 
$Name = $_POST['name'];
$Fathername = $_POST['fathername'];
$Mothername = $_POST['mothername'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Phone = $_POST['phone'];
$Objective = $_POST['objective'];
$Permanent = $_POST['permanent'];
$Datebirth = $_POST['datebirth'];
$Maritual = $_POST['maritual'];
$Nationality = $_POST['nationality'];
$Religion = $_POST['religion'];
$Computer = $_POST['computer'];
$Language = $_POST['language'];
$Hobbies = $_POST['hobbies'];
$Experiences = $_POST['experiences'];

skvjbfdkb vdkjvbdkjvdblvk,dfbn kv bvk cndfl,v
$sql = "INSERT INTO shoayeb (Name,Fathername,Mothername,Email,Address,Phone,Objective,Permanent,Datebirth,Maritual,Nationality,Religion,Computer,Language,Hobbies,Experiences) VALUES('$Name','$Fathername','$Mothername','$Email','$Address','$Phone','$Objective','$Permanent','$Datebirth','$Maritual','Nationality','$Religion','$Computer','$Language','$Hobbies','$Experiences')";
if(!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}
else{
	echo 'Inserted';
}

header("refresh:20; url=cv.html");



?>




     