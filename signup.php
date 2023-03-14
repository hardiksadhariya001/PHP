<?php
    $showalert=false;
    $showerror=false;
    include 'partials\config.php';
    if(isset($_POST['submit']))
{
        $uname=$_POST['uname'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        //$exits=false;
        $exitstsql="SELECT * FROM `user` WHERE uname='$uname'";
        $result=mysqli_query($con,$exitstsql);
        $numexitst=mysqli_num_rows($result);
        if($numexitst > 0)
        {
          //$exitst=true;
          $showerror="Username is Already Exits";
        }
        else
        {
         // $exitst=false;
        if(($pass == $cpass))
     {
        $sql="INSERT INTO `user`(`uname`,`pass`) VALUES('$uname','$pass')";
        $result=mysqli_query($con,$sql);
        if($result)
        {
           $showalert=true;
        }
     }      
        else 
        {
          $showerror="Password do not match ";
        }
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
  <?php  require 'partials/nav.php' ?>
  <?php
  if($showalert)
  {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account is now created it.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
 if($showerror)
{
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$showerror.'
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
       </div>';
  } 
?>
    <div class="container">
    <form action="\login\signup.php" method="POST">
   <h4 class="text-center">Sign up to our Website</h4>
   <input type="text" class="form-control mt-2" name="uname" id="uname" placeholder="Enter Username" required>
   <input type="password" class="form-control mt-1" name="pass" id="pass" placeholder="Enter Password" required>
   <input type="password" class="form-control mt-1" name="cpass"  id="cpass"    placeholder="Enter Confirm Password" required>
   <input type="submit" class="btn btn-primary w-100" name="submit"  value="Signup">
</div>    
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>