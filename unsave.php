<?php
include("mconnect.php");
$sql1="DELETE from recordstudent";
if(mysqli_query($con,$sql1))
{
         echo"<script type='text/javascript'>alert('inserted successfully')</script>";
  
}

require("common.html");
?>

