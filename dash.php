<html>
    <head><style>
        
        #dem{
            background-color:darkgrey;
            margin-left: 220px;
           display:inline-block;
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
                 width: 400px;
            text-align: center;
        }
              #imma1
                  {
                           margin-left: 350px;
                           width: 700px;
                           height: 100px;
                           position: fixed;
                           background-image: url(cse.jpeg);
                           background-size: 100%100
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
                           margin-left: 90%;
                  }
                  #log a{
                        text-decoration: none;
                          
                           color:skyblue;
                  }
                  #log a:hover{
                           color:skyblue;
                           text-decoration: underline;
                  }
             body{
                      padding: 0;
                      margin: 0;
             }
            
        
        </style> </head>
        <body >
                  <div id="log">
         <a href="common.html">LOGOUT</a>
         </div>
 
<?php
           
include("mconnect.php");
           
$dep=$_POST['department'];
$semes=$_POST['semester'];
                if($dep=='cse')
                 { 
                          echo"<body style='background-image: url(source.gif);background-size:100% 100%'>";
                  echo"</body>";
                         
                          echo"<div id='imma1'>";
             echo"<img src='cse.jpeg' alt='logo'>";
                          echo"<br><br>";
echo"<label>ENTER ATTENDENCE:";
echo"</label>";
                }
                  else if($dep=='ece')
                 {
                             echo"<body style='background-image: url(ec.gif);background-size: 100% 100%'>";
                  echo"</body>";
                          echo"<div id='imma1'>";
             echo"<img src='ece.jpeg' alt='logo'>";
                          echo"<br><br>";
echo"<label>ENTER ATTENDENCE:";
echo"</label>";
                }
                    if($dep=='me')
                 {
                               echo"<body style='background-image: url(me.gif);background-size: 100% 100%'>";
                  echo"</body>";
                          echo"<div id='imma1'>";
             echo"<img src='me.jpeg' alt='logo'>";
                          echo"<br><br>";
echo"<label>ENTER ATTENDENCE:";
echo"</label>";
                }
$sql="SELECT * FROM student WHERE department='$dep' and sem='$semes'";
$ret=mysqli_query($con,$sql); 


    if(mysqli_num_rows($ret)>0)
    {
          echo"<div id='dem'>";
       
         echo"<table border='1'><tr><th>USN</th><th>NAME</th><th>ATTENDENCE</th><tr>";
        while($row=mysqli_fetch_assoc($ret))
        {
   
         echo"<tr><td>{$row['usn']}</td>
         <td>{$row['name']}</td><td><form action='recordstudent.php' method='post'><input type='checkbox' name='atten[]' value='present'>present<input type='checkbox' name='atten[]' value='absent'>absent</td></tr>";
            
    }
         echo"<input type='hidden' name='department' value='$dep'>";
              echo"<input type='hidden' name='semester' value='$semes'>";
        echo"</table>";
        echo"&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp&nbsp;";
        echo"<input type='submit'><input type='reset'></form>";
        echo"</div>";
                
       
     
    }
else
{
    echo"<script type='text/javascript'>alert('no record found');</script>";
    require("dash.html");
}
                 
                 
         
                 
                 
?>
        
                 </div> 
        </body>
</html>
    