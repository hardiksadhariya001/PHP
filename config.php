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
      //  $course=$_POST['course'];
       // $sql="INSERT INTO `course` (`course`) VALUES ('$course')";
      //  $result=mysqli_query($con,$sql);
?>