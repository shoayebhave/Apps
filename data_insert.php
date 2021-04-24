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
 

$Board = $_POST['board'];
$Boarda = $_POST['boarda'];
$Boardb = $_POST['boardb'];
$Boardc = $_POST['boardc'];

$Degree = $_POST['degree'];
$Degreea = $_POST['degreea'];
$Degreeb= $_POST['degreeb'];
$Degreec = $_POST['degreec'];

$Passing = $_POST['passing'];
$Passinga = $_POST['passinga'];
$Passingb = $_POST['passingb'];
$Passingc = $_POST['passingc'];

$Grade = $_POST['grade'];
$Gradea = $_POST['gradea'];
$Gradeb = $_POST['gradeb'];
$Gradec = $_POST['gradec'];


$sql = "INSERT INTO education (Board,Boarda,Boardb,Boardc,Degree,Degreea,Degreeb,Degreec,Passing,Passinga,Passingb,Passingc,Grade,Gradea,Gradeb,Gradec) 

VALUES('$Board','$Boarda','$Boardb','$Boardc','$Degree','$Degreea','$Degreeb','$Degreec','$Passing','$Passinga','$Passingb','$Passingc','$Grade','$Gradea','$Gradeb','$Gradec')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("refresh:20; url=qualification.html");



?>