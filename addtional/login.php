<?php

include('../connection/db.php');
$query = "SELECT * FROM btn WHERE status = '1'";
$result_tasks = mysqli_query($conn, $query);    
$btnrow = mysqli_fetch_array($result_tasks);
if(!isset($_SESSION['username']) && !isset($_SESSION['password']))
{
	if(isset($_POST["LogIn"]))
	{
		$username=$_POST['email'];
		$password=$_POST['password'];

		$query="SELECT * FROM signup where email='$username' AND password='$password'";
		$res=mysqli_query($conn,$query);
		$rows = mysqli_num_rows($res);
        while($row = mysqli_fetch_assoc($res)) { 
			$status = $row['status'];
		}
		if($rows==1)
		{
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			$_SESSION['status']=$status;
			if($_SESSION['status'] == 0){
				header('location:../user/create.php');
			}else{
				header('location:../admin/index.php');
			}
		}
		else
		{
			print "<script>alert('INVALID USERNAME AND PASSWORD');</script>";
		}	
			
	}
}
else
{
	if($_SESSION['status'] ==0){
		header('location:../user/create.php');
		}else{
			header('location:../admin/index.php');
		}
}


?>

<?php
    include_once("../includes/header.php");
 ?>
		
		<!-- Collapsible Navbar -->
	<div class="collapse navbar-collapse" id="example-1">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="../index.php">Home</a></li>
            <li><a href="../user/create.php">Create</a></li>
            <li><a href="../user/blogs.php">Blogs</a></li>
			<li><a href="all_blogs.php">All Blogs</a></li>
            <li><a href="about.php">About Us</span></a></li>
    		<li><a href="contact.php">Contact us</a></li>
            <li><a href="signup.php">Sign up</a></li>
            <li class="active"><a href="login.php">Login<span class="sr-only"></a></li>
            <li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
	</div>
</nav>
</div>
  <div class="container">
		<form action="" method="POST">
			<div class="col-md-12">
				<h1>Log In</h1>
					<p>Please login to continue</p>

					<br>
					<br>

					<div class="col-md-12">
						<label  class="col-md-4" for="uname" style="margin-top:20px;padding-left:100px;"><b>Email</b></label>
						<div class="col-md-8">
							<input type="text" placeholder="Enter Email" name="email" required>
						</div>
					</div>
					<div class="col-md-12">
						<label class="col-md-4" for="psw" style="margin-top:20px;padding-left:100px;"><b>Password</b></label>
					
						<div class="col-md-8">
							<input type="password" placeholder="Enter Password" name="password" required>
						</div>
					</div>

					<label style="color:black">
						<br>
						<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					</label>

					<p style="color:white"><a href="#" style="color:teal">Forgot Password?</a></p>

					<div class="clearfix">
						<br>
						<br>
						<button type="submit" class="<?php echo $btnrow['LogIn'] ?>"  style="color:white" name="LogIn">LogIn</button>
					<!--<button type="submit" class="btn btn-success sweep-to-bottom">Log Out</button>-->
						<button type="reset" class="<?php echo $btnrow['Reset'] ?>" name = 'Reset'> Reset </button>
						<br>
						<br>

						<p style="color:black">Not having an account? <a href="signup.php" style="color:teal">Create One</a></p>
					</div>
			</div>
		</form>



<?php
    include_once("../includes/footer.php");
 ?>


