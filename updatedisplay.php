<?php

include("mconnect.php");
date_default_timezone_set("Asia/Kolkata");
$current_time= date("h:i:sa");
$usn=$_POST['uusn'];
$dates=$_POST['dte'];
$at=$_POST['atten'];
$dep=$_POST['department'];

if($at=='present')
{
    $sql="DELETE FROM finalrecord WHERE usn='$usn' AND department='$dep'";
    if(mysqli_query($con,$sql))
    {
        echo"<script type='text/javascript'>alert('updated successfully')</script>";
            require("common.html");
    }
         else
         {
              echo"<script type='text/javascript'>alert('not updated')</script>";
            require("common.html");    
         }
}
if($at=='absent')
{
    $sql="SELECT * FROM student WHERE usn='$usn'";
    $ret=mysqli_query($con,$sql);
         if(mysqli_num_rows($ret)>0)
         {
    while($row=mysqli_fetch_assoc($ret))
    {
       $name=$row['name']; 
             $sem=$row['sem'];
              $dep=$row['department'];        
        $ins="INSERT INTO finalrecord(usn,name,sem,dates,timesed,atten,department) VALUES('$usn','$name','$sem','$dates','$current_time','$at','$dep')";
        
         if(mysqli_query($con,$ins))
        {
            echo"<script type='text/javascript'>alert('updated successfully');</script>";
            require("common.html");
        }
             
    }
         }
}

?>
    