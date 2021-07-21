<!DOCTYPE HTML>
<html>
<head>
    <title>view cart</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <center>
       <h1> View Cart</h1>
     </center>

<?php
$servername="localhost";
$username="root";
$password="";
$database="tutedb";

//create connection
$conn= mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$conn){
    die("connection failed:" . mysqli_connect_error());

}

$sql="SELECT*FROM student";
$result=mysqli_query($conn,$sql);
echo "<table id = 'records'>";
echo "<tr>";
    echo "<th>Customer ID </th>";
    echo "<th>Name </th>";
    echo "<th>Mobile number </th>";
    echo "<th>Email </th>";
    echo "<th>Category </th>";
    echo "<th>Course </th>";
echo"</tr>";

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

      echo "<tr><td>",$row['customerid'],"</td><td>",$row['name'],"</td><td>",$row['mobilenumber'],"</td><td>",$row['email'],"</td><td>",$row['category'],"</td><td>",$row['course'],"</td></tr>";

    }
    echo "</table>";

}else {
    echo "empty table";
}

mysqli_close($conn);
?>