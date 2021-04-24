<!DOCTYPE html>
<html>
<head>
	<title>Table With Database</title>
</head>
<body>
	

<table>
<table align="center" border="1px" style="width:1300px; line-height:40px;">

	   <tr>
	   	<th colspan="8"><h2 style="height:20px ">Office Information</h2></th>
	   </tr>
	   	<t>
	   	<th>Id</th>
	   	<th>Name</th>
	   	<th>Email</th>
        <th>Phone</th>
        <th>Address</th>
	    <th>Company</th>
        <th>Income</th>
        <th>Designation</th>
        </t>
	   
	   <?php

$conn=mysqli_connect("localhost", "root","","tutorial");
if($conn-> connect_error){

	die("Connection failed:". $conn-> connect_error);
}

$sql="SELECT Id, Name,Email,Phone,Address,Company,Income,Designation From person";
$result = $conn-> query($sql);

if($result-> num_rows> 0){

while ($row=$result-> fetch_assoc()){

echo "<tr><td>".$row["Id"]."</td><td>"
.$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["Company"]."</td><td>".$row["Income"]."</td><td>".$row["Designation"]."</td></tr>";



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