 <?php
include('../connection/db.php');
$query = "SELECT * FROM btn WHERE status = '1'";
$result_tasks = mysqli_query($conn, $query);    
$btnrow = mysqli_fetch_array($result_tasks);
if(isset($_POST['SignUp'])){
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $repass = $_POST['psw-repeat'];
  if($password != $repass){
    print "<script>alert('Password not match');</script>";
  }
  else{
  $q="SELECT email FROM signup WHERE email='$email' ";
  $re = mysqli_query($conn, $q);
  $rows = mysqli_num_rows($re);
  
  if($rows == 0)
  {
    $query = "INSERT INTO signup (email, password,status) VALUES ('$email', '$password','0')";
    $result = mysqli_query($conn, $query);
    $_SESSION['username']=$email;
		$_SESSION['password']=$password;
    header("Location: ../user/create.php");

    if(!$result)
    {
      die("Query Failed.");
    }

  }
  else
  {
    print "<script>alert('You Alredy have an account with this email');</script>";
  }
  
}
}
?>
<?php
    include_once("../includes/header.php");

    if(isset($_SESSION['username'])&& isset($_SESSION['password']))
    {
     
      header('Location:../addtional/signup_msg.php');
    }
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
        <li class="active"><a href="signup.php">Sign up<span class="sr-only"></a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
	
	</div>
</nav>
</div>
    <div class="container">
      <form action="" method="POST">
        <div class="col-md-12">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <br>
            <br>
            <br>
            
            <br>
            <br>
            <div class="col-md-12">
              <label  class="col-md-4" for="email" style="margin-top:20px;padding-left:100px;"><b>Email</b></label>
              <div class="col-md-8">
                <input type="text" placeholder="Enter Email" name="email" required>
              </div>
            </div>
            <div class="col-md-12">
              <label  class="col-md-4" for="psw" style="margin-top:20px;padding-left:100px; "><b>Password</b></label>
              <div class="col-md-8">
                <input type="password" placeholder="Enter Password" name="psw" required>
              </div>
            </div>
            <div class="col-md-12">
              <label class="col-md-4" for="psw-repeat" style="margin-top:20px;padding-left:100px;"><b>Repeat Password</b></label>
              <div class="col-md-8">
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <br>
                <br>
                <br>
              </div>
            </div>
              
              
                
                

              <p style="color:black">By creating an account you agree to our <a href="#" style="color:teal">Terms & Privacy</a>.</p>

              <div class="clearfix">
                <button type="submit" name="SignUp" class="<?php echo $btnrow['SignUp'] ?>">SignUp</button>
                
                <button type="reset" class="<?php echo $btnrow['Reset'] ?>" name = "Reset">Reset</button>
                <br>
                <br>
                <br>

                <p style="color:black">Alredy have an account? <a href="login.php" style="color:teal">Iog In </a> here</p>
              </div>
        </div>
      </form>  
    </div>
      
<?php
    include_once("../includes/footer.php")
 ?>