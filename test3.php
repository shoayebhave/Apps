<!DOCTYPE html>
<html>
<head>
	<title>Education Qualification</title>
	<style>
	
	body {background-color: #edf1f7;}

</style>
</head>
<body>
	

<table>
<table align="center" border="1px" style="width:1300px; line-height:40px;">

	   <tr>
	   	<th colspan="18"><h2 style="height:20px;padding-bottom: 6px;padding-top: -1px ">Education Qualification Information</h2></th>
	   </tr>

	   <tr>
	   	<th colspan="5">Board/University</th>
        <th colspan="4">Name Of Degree</th>
        <th colspan="4">Passing year</th>
        <th colspan="4">Grade</th>
      	</tr>
	     
	     <tr>
	    <th colspan="1" rowspan="1">ID</th>
	   	<th>MSC/MBA</th>
	   	<th>BSC/BBA</th>
        <th>HSc</th>
        <th>SSC</th>

        <th>MSC/MBA</th>
	   	<th>BSC/BBA</th>
	   	<th>HSC</th>
        <th>SSC</th>

        <th>MSC/MBA</th>
	   	<th>BSC/BBA</th>
	   	<th>HSC</th>
        <th>SSC</th>

        <th>MSC/MBA</th>
	   	<th>BSC/BBA</th>
	   	<th>HSC</th>
        <th>SSC</th>
        </tr>
 
	   

	   	   <?php

$conn=mysqli_connect("localhost", "root","","tutorial");
if($conn-> connect_error){

	die("Connection failed:". $conn-> connect_error);
}

$sql="SELECT Id,Board,Boarda,Boardb,Boardc,Degree,Degreea,Degreeb,Degreec,Passing,Passinga,Passingb,Passingc,Grade,Gradea,Gradeb,Gradec  From education";
$result = $conn-> query($sql);

if($result-> num_rows> 0){

while ($row=$result-> fetch_assoc()){

echo "<tr><td>".$row["Id"]."</td><td>"

.$row["Board"]."</td><td>".$row["Boarda"]."</td><td>".$row["Boardb"]."</td><td>".$row["Boardc"]."</td><td>".$row["Degree"]."</td><td>".$row["Degreea"]."</td><td>".$row["Degreeb"]."</td><td>".$row["Degreec"]."</td><td>".$row["Passing"]."</td><td>".$row["Passinga"]."</td><td>".$row["Passingb"]."</td><td>".$row["Passingc"]."</td><td>".$row["Grade"]."</td><td>".$row["Gradea"]."</td><td>".$row["Gradeb"]."</td><td>".$row["Gradec"]."</td></tr>";



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