<?php
include("mconnect.php");

date_default_timezone_set("Asia/Kolkata");
$current_date=date("Y-m-d");
$current_time= date("h:i:sa");

$att = $_POST['atten'];
$dep=$_POST['department'];
$sem=$_POST['semester'];
	
$sql="SELECT * FROM student WHERE department='$dep' AND sem='$sem'";
$ret=mysqli_query($con,$sql);
	  
        while($row=mysqli_fetch_array($ret))
        {
            $sem=$row['sem'];
            $dept=$row['department'];
       $na=$row['usn'];
            $nme=$row['name'];
            $no=$row['sno'];
            $c=$no-1;
            if($att[$c]=='absent')
            {
          
        $ins="INSERT INTO recordstudent(name,usn,sem,department,dates,time,attendence) values('$nme','$na','$sem','$dept','$current_date','$current_time','$att[$c]')";
            if(mysqli_query($con,$ins))
		{
                 echo"inserted<br>";
		}
            }
                 else{
                          
                 }
        
		
         
        }
		 
            
		
header("Location:atten.php");
		
		
?>



