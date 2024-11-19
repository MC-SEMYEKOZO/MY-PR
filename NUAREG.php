<?php
$servername='localhost';
$username='root';
$password='';
$dname='nua';

$conn = mysqli_connect($servername, $username, $password, $dname);
if (!$conn) {
	die("connection failed:" . mysqli_connect_error());
}

$first_name=$_POST['first_name'];
$second_name=$_POST['second_name'];
$accademic_year=$_POST['accademic_year'];

$sql="insert into actor values('$first_name','$second_name','$accademic_year')";

if(mysqli_query($conn, $sql)){
	echo "NEW RECORD ADDED.";
}else{
	echo "Error" .$sql .mysqli_error($conn);
}
?>