<?php
		include 'insta.php';
?>
<div class="container">
	<button class="btn btn-primary"><a href="insta.php" class="text-light">Add User</a></button>
</div>
<div class="container">
<table class="table">
 <thead>
			<tr>
				<th scope="col">id</th>
				<th scope="col">User name</th>
				<th scope="col">password</th>
				<th scope="col">Action</th>
			</tr>
</thead>
	<tbody>
<?php	
				$sql="select *from `user`";
				$result=mysqli_query($con,$sql);
				if($result)
				{
						while($row=mysqli_fetch_assoc($result))
						{
						$id=$row['id'];
						$uname=$row['uname'];
						$pass=$row['pass'];
						echo '<tr>
						<th scope="row">'.$id.'</th>
						<th scope="row">'.$uname.'</th>
						<th scope="row">'.$pass.'</th>
						<td>
							<button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-white">Upadate</a><button> 
							<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-white">Delete</a></button>
						</td>
						</tr>';
				       }
				}
?>
</tbody>
</table>
</div>	
