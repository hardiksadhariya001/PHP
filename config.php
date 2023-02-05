<?php   
     $con=mysqli_connect("localhost","root","","alphabet");
     if(!$con)
     {
        die("error".mysqli_connect_error());
     }
     else
     {
        echo "success!</br>";
     }
?>
