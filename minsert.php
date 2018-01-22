<?php
include("mconnect.php");
$dname=$_POST['uname'];
$dnumber=$_POST['unumber'];
$demail=$_POST['uemail'];
$daddress=$_POST['uaddress'];
$sql="INSERT INTO phone(name,mobileno,email,address) VALUES('$dname','$dnumber','$demail','$daddress')";
if(!mysqli_query($con,$sql))
{
    echo"not inserted";
}

header("Refresh: 2;url=homepage.html");
?>