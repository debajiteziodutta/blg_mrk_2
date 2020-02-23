<style>
	@media(min-width:900px){
		#main{
			display: flex;
		  justify-content:center;
		}
	}
</style>
<?php include("../connection/db.php");
include_once("../includes/header.php")
 ?>


		<!-- Collapsible Navbar -->
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../user/create.php">Create</a></li>
                <li><a href="../user/blogs.php">Blogs</span></a></li>
                <li class="active"><a href="all_blogs.php">All Blogs<span class="sr-only"></span></a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="signup.php">Sign up</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
</nav>

  
  <!-- Content here -->

<?php

$query = "SELECT * FROM task ORDER BY created_at DESC";
$result_tasks = mysqli_query($conn, $query); 
$i = 0;
while($row = mysqli_fetch_assoc($result_tasks)) 
{ 
  $i++; 
  if(strlen($row['description'])>990)
  {
    $strcut = substr($row['description'],0,990);
    $desc = substr($strcut,0,strrpos($strcut,' ')).' .... <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample'.$i.'" role="button" aria-expanded="false" aria-controls="collapseExample'.$i.'">Read More</a>';
    $contd = substr($row['description'], strrpos($strcut,' '), strrpos($row['description'], ' '));
  }
  else
  {
  $desc =$row['description'];
  }

?>

<div class="container">
  <div  id ="main">
    <div style= "display:block;clear:both;flex: 1;">
      <img src="../addtional/images/<?php print $row['images']; ?>" class="card-img-top" width = "450" height = "550">
    </div>
    <div style =" flex:2;margin:5px;height:240px;">
        <div class="form-group ">
          <h5><b><?php print  $row['title']; ?></b></h5>
        </div>
        
        <div class="form-group ">
          <p><h4><?php print  $desc; ?>
            <div class="collapse" id="collapseExample<?php echo $i; ?>">
            <!-- Hey there, how are you?-->
                <?php print $contd; ?>
            </div></h4></p>
          <p><small class="text-muted">Posted on : <?php print $row['created_at']; ?></small></p>
          <p><small class="text-muted">Posted by : <?php print $row['email']; ?></small></p>
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
<?php } 
    include_once("../includes/footer.php");
 ?>