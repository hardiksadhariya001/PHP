<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<?php
        $showalert=false;
        $showerror=true;
        include 'partials\config.php';
        if(isset($_POST['submit']))
        {
                $uname=$_POST['uname'];
                $pass=$_POST['pass'];
                $cpass=$_POST['cpass'];
                $exits=false;
                if(($pass==$cpass) && $exits==false)
            {
                $sql="insert into `user`(`uname`,`pass`) values('$uname','$pass')";
                $result=mysqli_query($con,$sql);
                if($result)
                {
                    $showalert=true;
                }
                else
                    $showerror="password do not match";
            }

        }
?>
<title>Signup</title>
  <body>
    <?php require 'partials\nav.php' ?>
<?php
if($showalert)
{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>success!</strong> your account is now created.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
if($showerror)
{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>'.$showerror.'
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>
    <div class="container">
    <h1 class="text-center">Sign up to our website</h1>
    <form action="signup.php" method="POST">
    <input type="text" class="form-control mt-1" name="uname" placeholder="Enter User Name" required>
    <input type="password" class="form-control mt-1" name="pass" placeholder="Enter Password" required>
    <input type="password" class="form-control mt-1" name="cpass" placeholder="Enter Confirm Password" required>
    <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
</form>
</div>
</body>