<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
<?php
	include 'config.php';
		if(isset($_POST['submit']))
		{
				$uname=$_POST['uname'];
				$pass=$_POST['pass'];
				$sql="INSERT INTO `user`(`uname`,`pass`)VALUES('$uname','$pass')";
				$result=mysqli_query($con,$sql);
				if($result)
				{
						header('location:display.php');
				}
				else
				{	
					die("error".mysqli_connect_error($con));
				}
		}
?>
<h2><center><i>instagram</i></center></h2>
<div class="container">
<form action="insta.php" method="POST">
	<input type=""text" class="form-control" name="uname" placeholder="User name" required></br>
	<input type="password" class="form-control" name="pass" placeholder="Password" required></br>
	<input type="submit" class="btn btn-primary w-100" name="submit" value="Sign up">
</form>
</div>