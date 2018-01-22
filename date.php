<?php
include("mconnect.php");
date_default_timezone_set("Asia/Kolkata");
$current_date=date("Y-m-d");
$current_time= date("h:i:sa");
echo "$current_date";
echo "$current_time";

//$dm=strtotime($current_date);

$sql="INSERT INTO datedemo(dates,times) VALUES('$current_date','$current_time')";
if(mysqli_query($con,$sql))
{
    echo "inserted";
}
else
{
    echo"not inserted";
}
?>
<html>
<head>
    </head>
<body>
   
    
    </body>
</html>