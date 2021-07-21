<?php
$servername="localhost";
$username="root";
$password="";
$database="tutedb";

//create connection
$conn = mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$conn){
    die("connection faild:". mysqli_connect_error());
}

    $name=$_POST['name'];
    $customerid=$_POST['customerid'];
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['emailid'];
    $category=$_POST['category'];
	$course=$_POST['course'];

    $sql="INSERT INTO student(customerid,name,mobilenumber,email,category,course) values('$customerid','$name','$mobilenumber','$email','$category','$course')";

if (mysqli_query($conn,$sql)===TRUE) {
    echo "<script>alert('Details Added');window.location.href='index.php';</script>";
}else{
    echo "Error" . $sql2 . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);



?>