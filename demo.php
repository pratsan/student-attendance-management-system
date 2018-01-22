<?php
include("mconnect.php");
$att=$_POST['atten'];

for($i=0;$i<sizeof($att);$i++)
{
         if($att[$i]=='absent')
         {
                  echo"a[$i]=$att[$i]<br>";
         }
         else
         {
             echo"a[$i]=$att[$i]<br>";         
         }
}


?>