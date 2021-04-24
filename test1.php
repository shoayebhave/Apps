<!DOCTYPE html>
<html>
<head>
	<title>Database Personal Information</title>
</head>
<body>
	

<table>
<table align="center" border="1px" style="width:1300px; line-height:40px;">

	   <tr>
	   	<th colspan="17"><h2 style="height:20px ">Personal Information</h2></th>
	   </tr>
	   	<t>
	   	<th>Id</th>
	   	<th>Name</th>
	   	<th>Father Name</th>
        <th>Mother Name</th>
        <th>Email</th>
	    <th>Address</th>
        <th>Phone Number</th>
        <th>Objective</th>
        <th>Permanent Address</th>
        <th>Date Of Birth</th>
        <th>Maritual Status</th>
        <th>Nationality</th>
        <th>Religion</th>
        <th>Computer Skills</th>
        <th>Language Skills</th>
        <th>Hobbies</th>
        <th>Experiences</th>
                </t>
	   
	   <?php

$conn=mysqli_connect("localhost", "root","","tutorial");
if($conn-> connect_error){

	die("Connection failed:". $conn-> connect_error);
}

$sql="SELECT Product_Id, Name,Fathername,Mothername,Email,Address,Phone,Objective,Permanentaddress,Datebirth,Maritual,Nationality,Religion,Computer,Language,Hobbies,Experiences From shoayeb";
$result = $conn-> query($sql);

if($result-> num_rows> 0){

while ($row=$result-> fetch_assoc()){

echo "<tr><td>".$row["Product_Id"]."</td><td>"
.$row["Name"]."</td><td>".$row["Fathername"]."</td><td>".$row["Mothername"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Phone"]."</td><td>".$row["Objective"]."</td><td>".$row["Permanentaddress"]."</td><td>".$row["Datebirth"]."</td><td>".$row["Maritual"]."</td><td>".$row["Nationality"]."</td><td>".$row["Religion"]."</td><td>".$row["Computer"]."</td><td>".$row["Language"]."</td><td>".$row["Hobbies"]."</td><td>".$row["Experiences"]."</td></tr>";



}
echo "</table>";

}
else{

	echo "0 result";
}

$conn-> close();



      ?>

</table>
</body>
</html>