<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(!mysqli_select_db($conn,'tutorial'))
{
 echo 'Database Not Selected';
}
 
$Name = $_POST['username'];
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

$sql = "INSERT INTO shoayeb (Name,Fathername,Mothername,Email,Address,Phone,Objective,Permanentaddress,Datebirth,Maritual,Nationality,Religion,Computer,Language,Hobbies,Experiences) VALUES('$Name','$Fathername','$Mothername','$Email','$Address','$Phone','$Objective','$Permanent','$Datebirth','$Maritual','Nationality','$Religion','$Computer','$Language','$Hobbies','$Experiences')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("refresh:20; url=cv.html");



?>