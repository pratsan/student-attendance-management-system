<?php
include("mconnect.php");

$user=$_POST['userid'];
$passw=$_POST['pass'];
$sql='SELECT * FROM login';
$ret=mysqli_query($con,$sql);
if(mysqli_num_rows($ret)>0)
{
    while($row=mysqli_fetch_assoc($ret))
    {
        $ue=$row['username'];
        $pe=$row['password'];
    }
}
else
{
    echo"no record";
}
if($user==$ue && $passw==$pe)
{
  require("common.html");
}
else
{
    echo"<script type='text/javascript'>alert('invalid username or password'); </script>";
   require("homepage.html");
 
}
?>