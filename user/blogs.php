<style>
	@media(min-width:900px){
		#main{
			display: flex;
		  justify-content:center;
		}
	}
</style>
<?php 
include("../connection/db.php");
if(!isset($_SESSION['username'])&& !isset($_SESSION['password']))
{
  header('Location:../addtional/login.php');
}
    include_once("../includes/header.php");
 ?>
<!-- Collapsible Navbar -->
<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php">Home</a></li>
     		<li><a href="create.php">Create</a></li>
        <li class="active"><a href="blogs.php">Blogs<span class="sr-only"></span></a></li>
        <li><a href="../addtional/all_blogs.php">All Blogs</a></li>
        <li><a href="../addtional/about.php">About us</a></li>
    		<li><a href="../addtional/contact.php">Contact us</a></li>
        <li><a href="../addtional/signup.php">Sign up</a></li>
      	<li><a href="../addtional/login.php">Login</a></li>
      	<li><a href="../addtional/logout.php">Log Out</a></li>
			</ul>
		</div>
</nav>

  
  <!-- Content here -->
<?php
if(isset($_SESSION['title'])||isset($_SESSION['description'])||isset($_SESSION['image']))
{
  if(strlen($_SESSION['description'])>1500){
    $strcut = substr($_SESSION['description'],0,1500);
    $desc = substr($strcut,0,strrpos($strcut,' ')).' ....<a href = "">Read More</a>';
    }
    else{
      $desc =$_SESSION['description'];
    }
  ?>
<div class="container">
  <div  id ="main">
	<div style= "display:block;clear:both;flex: 1;">
  <img src="..\addtional\images\<?php print$_SESSION['image']; ?>" class="card-img-top" alt="..." width = "500" height = "350">
  </div>
  <div style =" flex:2;margin:5px;height:240px;">
          <div class="form-group">
          <h5 class="card-title"><b><?php print  $_SESSION['title']; ?></b></h5>
          </div>
          <div class="form-group">
          <p class="card-text"><?php echo $desc; ?></p>
		  </div>
		 </div>
	</div>
</div>
<?php

} 
else{
$email = $_SESSION['username'];

$query = "SELECT * FROM task WHERE email = '$email' ORDER BY created_at DESC";
$result_tasks = mysqli_query($conn, $query);    
while($row = mysqli_fetch_assoc($result_tasks)) { 
  if(strlen($row['description'])>1500){
    $strcut = substr($row['description'],0,990);
    $desc = substr($strcut,0,strrpos($strcut,' ')).' ....<a href = "">Read More</a>';
    }
    else{
      $desc =$row['description'];
    }?>
<div class="container">
  <div  id ="main">
    <div style= "display:block;clear:both;flex: 1;">
    <img src="../addtional/images/<?php print $row['images']; ?>" class="card-img-top" width = "500" height = "350">
    </div>
    <div style =" flex:2;margin:5px;height:240px;">
        <div class="form-group">
          <h5><b><?php print  $row['title']; ?></b></h5>
        </div>
        <div class="form-group">
        <p><h4><?php print  $desc; ?></h4></p>
        <p><small class="text-muted">Post at : <?php print $row['created_at']; ?></small></p>
        <br>
        <a href="edit.php?id=<?php print $row['id']?>" class="btn btn-success">Edit</a>
        <a href="delete_task.php?id=<?php print $row['id']?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
	</div>
  <br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<br>
<br>
<?php } 
}?>
<?php
    include_once("../includes/footer.php")
 ?>