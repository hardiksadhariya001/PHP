<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
<?php
        include 'config.php';
        if(isset($_POST['submit']))
        {
            $course=$_POST['course'];
            $sql="INSERT INTO `course` (`course`) VALUES ('$course')";
            $result=mysqli_query($con,$sql);
        }
?>
<div class="container">
<form action="course.php" method="post">
    <input type="text" class="form-control mt-2" name="course" placeholder="course" required></br>
        <input type="submit"class="btn btn-primary w-100" name="submit" value="save">
</form>
</div>