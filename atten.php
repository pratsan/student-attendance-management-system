<?php 
include("mconnect.php");

$sql='SELECT * FROM recordstudent';
$ret=mysqli_query($con,$sql);
	  
        while($row=mysqli_fetch_array($ret))
        {
       $na=$row['usn'];
            $nme=$row['name'];
			$d=$row['dates'];
			$t=$row['time'];
			$att=$row['attendence'];
            $sem=$row['sem'];
            $dept=$row['department'];
			
        $ins="INSERT INTO finalrecord(name,usn,sem,department,dates,timesed,atten) values('$nme','$na','$sem','$dept','$d','$t','$att')";
            if(mysqli_query($con,$ins))
            {
            }
        }
header("Location:unsave.php");
		
		
		 ?>
		
     
	  
