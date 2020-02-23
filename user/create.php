<style>
	@media(min-width:900px){
		#main{
			display: flex;
		  justify-content:center;
		}
	}
</style>
<?php
include_once('../connection/db.php');
unset($_SESSION['title']);
unset($_SESSION['description']);
unset($_SESSION['image']);
if (isset($_POST['Test'])) 
{
  $_SESSION['title'] = $_POST['title'];
  $_SESSION['description'] = $_POST['description'];
  $_SESSION['image'] = $_FILES['image']['name'];
  header('Location: ../user/blogs.php');
}

$msg = "";
if (isset($_POST['Create'])) 
{
  $email = $_SESSION['username'];
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $description = mysqli_real_escape_string($conn,$_POST['description']);
  
  $target = "../addtional/images/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  $query = "INSERT INTO task (email,title,description,images) VALUES ('$email','$title','$description','$image')";
  $result = mysqli_query($conn, $query);
  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
    $msg = "Image Uploaded Successfully";
  }else{
    $msg = "There Was a Problem Uploadeing image";
  }
  if(!$result)
  {
    die("Query Failed.");
  }
/*
  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';*/

}



?>

<?php
$query = "SELECT * FROM btn WHERE status = '1'";
$result_tasks = mysqli_query($conn, $query);    
$btnrow = mysqli_fetch_array($result_tasks);
if(!isset($_SESSION['username'])&& !isset($_SESSION['password']))
{
  header('Location:../addtional/login.php');
}
include_once("../includes/header.php")
 ?>
		
		<!-- Collapsible Navbar -->
		<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
			<li><a href="../index.php">Home</a></li>
     		<li class="active"><a href="create.php">Create<span class="sr-only"></span></a></li>
        	<li><a href="blogs.php">Blogs</a></li>
			<li><a href="../addtional/all_blogs.php">All Blogs</a></li>
        	<li><a href="../addtional/about.php">About us</a></li>
    		<li><a href="../addtional/contact.php">Contact us</a></li>
        	<li><a href="../addtional/signup.php">Sign up</a></li>
        	<li><a href="../addtional/login.php">Login</a></li>
        	<li><a href="../addtional/logout.php">Log Out</a></li>
			</ul>
		</div>
	
	</div>
</nav>
</div>
<div class="container">
<h1>Create Post</h1>
 <form action="" method="POST" enctype = "multipart/form-data">
		<div  id ="main">
		<div style= "display:block;clear:both;flex: 1;">
		  <div class="form-group">
		   <input type="file" name="image" onchange = "showImage.call(this)">
		  </div>
		  <div>
			  <img src ="" id = "image" style = "display:none" width = "400" height = "440">
			  <script>
					function showImage(){
						if(this.files && this.files[0]){
							var obj = new FileReader();
							obj.onload = function(data){
								var image=document.getElementById("image");
								image.src = data.target.result;
								image.style.display = "block"
							}
							obj.readAsDataURL(this.files[0]);
						}
						
					}
			  </script>
		</div>
		</div>
		<div style =" flex:2;margin:5px;height:240px;">
          <div class="form-group">
		   <input type="text" name="title" class="form-control" placeholder="Add Title here" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="20" class="form-control" placeholder="Add a brief Description"></textarea>
		  </div>
		  <!--<input type="submit" name="Create" class="btn btn-success btn-block" value="Create">-->
		  <button type="submit" class="<?php echo $btnrow['creat'] ?>"  style="color:white" name="Create">Create</button>
		  <!--<input type="submit" name="Test" class="btn btn-success btn-block" value="Test">-->
		  <button type="submit" class="<?php echo $btnrow['Test'] ?>"  style="color:white" name="Test">Preview</button>
		  <br>
		 <br>
		 <br>

		  </div>
		</div>
		
</div>

<?php
    include_once("../includes/footer.php")
 ?>

