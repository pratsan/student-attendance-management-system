<html>
<head>
<style>
#imma1
{
	margin-left:250px;
	 width: 700px;
                           height: 300px;
}
 #imma1 img{
                           width: 700px;
                           height: 300px;
                  }
            
					     
        #dem{
            background-color:darkgrey;
            margin-left: px;
           display:inline-block;
		    width: 700px;
        }
        table th{
            color: white;
        }
             table td{
                      color: white;
             }
        table{
            border: 1px solid white;
             border-collapse: collapse;
           
            height:auto;
                 width: 700px;
            text-align: center;
        }
		 #log{
                           width: 80px;
                           height: 30px;
                           font-size: 30px;
                          margin-left: 90%;
                  }
                  #log a{
                        text-decoration: none;
                           color: red;
                  }
                  #log a:hover{
                           color:#8FB295;
                           text-decoration: underline;
                  }
					  </style>
					  <body>
					   <div id="log">
         <a href="common.html">LOGOUT</a>
         </div>
<?php
include("mconnect.php");


$dates=$_POST['dte'];
$dept=$_POST['department'];
$sem=$_POST['semester'];
$sql="SELECT * FROM finalrecord WHERE department='$dept' AND sem='$sem' AND dates='$dates'";

 if($dept=='cse')
                 { 
                          echo"<body style='background-image: url(source.gif)'>";
                  echo"</body>";
                         
                          echo"<div id='imma1'>";
             echo"<img src='cse.jpeg' alt='logo'>";
                          echo"<br><br>";
                 }
				 else if($dept=='ece')
                 {
                             echo"<body style='background-image: url(ec.gif);background-size: 100% 100%'>";
                          echo"<div id='imma1'>";
             echo"<img src='ece.jpeg' alt='logo'>";
                          echo"<br><br>";
                           
                }
				if($dept=='me')
                 {
                               echo"<body style='background-image: url(me.gif);background-size: 100% 100%'>";
                  echo"</body>";
                          echo"<div id='imma1'>";
             echo"<img src='me.jpeg' alt='logo'>";
                          echo"<br><br>";

                }
				 echo"<hr>";



$ret=mysqli_query($con,$sql);
if(mysqli_num_rows($ret)>0)
{
	echo"<div id='dem'>";
    echo"<table border='1'><tr><th>USN<th>NAME<th>DATE<th>TIME<th>ATTENDENCE</tr>";

while($row=mysqli_fetch_assoc($ret))
{
    echo"<tr><td>{$row['usn']}</td><td>{$row['name']}</td><td>{$row['dates']}</td><td>{$row['timesed']}</td><td>{$row['atten']}</td></tr>";
}

echo"</div>";
echo"</table>";
}

echo"<form action='updatedisplay.php' method='post'>";
        echo"<label>USN*:</label>";
        echo"<input type='text'  name='uusn' Required>";
        echo"<input type='date' name='dte' Required>";
        echo"<input type='radio' name='atten' value='present'>Present
         <input type='radio' name='atten' value='absent'>Absent";
         echo"<input type='hidden' name='department' value='$dept'>";
         echo"&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp;";
		 echo"<br><br>";
		    echo"&nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp;"; 
			echo"&nbsp  &nbsp  &nbsp   &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp;";
        
             echo"<input type='submit' value='Update'>";
               echo"&nbsp  &nbsp;";
        echo"<input type='Reset'>";
        
        
         
        echo"</form>";
		



?>
</body>
</html>