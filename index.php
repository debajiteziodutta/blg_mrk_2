<?php
    include('connection/db.php'); 
    include_once("includes/header.php");
	$query = "SELECT * FROM btn WHERE status = '1'";
	$result_tasks = mysqli_query($conn, $query);    
	$btnrow = mysqli_fetch_array($result_tasks);
?>
		<!-- Collapsible Navbar -->
    <link rel="stylesheet" href="css/style.css" />
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.php">Home<span class="sr-only"></span></a></li>
        
        <li><a href="user/create.php">Create</a></li>
        <li><a href="user/blogs.php">Blogs</a></li>
        <li><a href="addtional/all_blogs.php">All Blogs</a></li>
        <li><a href="addtional/about.php">About us</a></li>
    		<li><a href="addtional/contact.php">Contact us</a></li>
        <li><a href="addtional/signup.php">Sign up</a></li>
        <li><a href="addtional/login.php">Login</a></li>
        <li><a href="addtional/logout.php">Log Out</a></li>

			</ul>
		</div>
	
	</div>
</nav>
<br>
<br>
<div class="content">
    <h1>Start with Your Blog!</h1>
    <form action = "addtional/login.php">
    <button type="submit" class="<?php echo $btnrow['getstarted'] ?>" style="color:white" name="Get Started">Get Started</button>
    </form>
    <!--<a href="addtional/login.php"><button class="btn btn-success sweep-to-bottom">Get Started</button></a>-->
	</div>
</div>
  
<?php
    include_once("includes/footer.php");
 ?>