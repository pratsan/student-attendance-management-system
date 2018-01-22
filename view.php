<html>
<head>
    <style>
            
                     
             #dem{
            background-color:olivedrab;
           
        }
        table th{
            color: white;
        }
             table td{
                      color: white;
                      font-family:monospace;
                      
                      
             }
        table{
            border: 1px solid white;
             border-collapse: collapse;
           
            height:auto;
                width: 700px;
            
            text-align: center;
        }
             a{
                      margin-left:90%;
                      text-decoration: none;
             }
             a:hover{
                      text-decoration: underline;
                      color: cadetblue;
             }
                       #imma1
                  {
                           margin-left: 300px;
                           width: 700px;
                           height: 100px;
                           position: fixed;
                          
                  }
                  #imma1 img{
                           width: 700px;
                           height: 300px;
                  }
             #imma1 label{
                      margin-left:250px;
                      font-size:30px;
                      text-decoration: underline;
                      color: coral;
                      
                      text-decoration-color: firebrick;
                      position:sticky;
                      }
              #log{
                           width: 80px;
                           height: 30px;
                           font-size: 30px;
                          margin-left: 80%;
                  }
                  #log a{
                        text-decoration: none;
                           color: red;
                  }
                  #log a:hover{
                           color:#8FB295;
                           text-decoration: underline;
                  }
             body{
                     
             }
        
    </style>
    
    </head>

<body>
  <div id="log">
         <a href="homepage.html">LOGOUT</a>
         </div>
<?php
include("mconnect.php");
$dept=$_POST['department'];
$sem=$_POST['semester'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
         if($dept=='cse')
                 {
                    echo"<body style='background-image: url(source.gif);background-size: 100% 100%'>";
                 
                          echo"<div id='imma1'>";
             echo"<img src='cse.jpeg' alt='logo'>";
                          echo"<br><br>";
                        echo"</body>";

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
$sql="SELECT * FROM finalrecord WHERE sem='$sem' AND department='$dept' AND dates BETWEEN '$sdate' AND '$edate' ";
$ret=mysqli_query($con,$sql);
if(mysqli_num_rows($ret)>0)
{
         echo"<div id=dem>";
         echo"<table border='1'><tr><th>USN</th><th>NAME</th><th>DATE</th><th>TIME</th><th>ATTENDENCE</th><tr>";
        while($row=mysqli_fetch_assoc($ret))
        {
   
         echo"<tr><td>{$row['usn']}</td>
         <td>{$row['name']}</td><td>{$row['dates']}</td><td>{$row['timesed']}</td><td>{$row['atten']}</td></tr>";
            
        }
         echo"</div>";
}
  
 else
    {
       echo"<script type='text/javascript'>alert('no record found');</script>";
        require("common.html");
    }
          
?>
    </body>
</html>