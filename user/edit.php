<?php
 include('../includes/header.php'); ?>

<div class="collapse navbar-collapse" id="example-1">
			<ul class="nav navbar-nav navbar-right">
     		<li class="active"><a href="edit.php">Edit<span class="sr-only"></span></a></li>
        <li><a href="blogs.php">Blogs</a></li>
			</ul>
		</div>
	
</nav>
</div>
<?php

include("../connection/db.php");

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $description = $row['description'];
    $image = $row['images'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $title= $_POST['title'];
  $description = $_POST['description'];
  $target = "images/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  $query = "UPDATE task set title = '$title', description = '$description',images = '$image' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: blogs.php');
}

?>


<div class="container">
  <div class="row">
    <div class="container mx-auto">
      <div class="card card-body">
      <form action="" method="POST" enctype = "multipart/form-data" value="<?php echo $image;?>">
        <div class="form-group">
		     <input type="file" name="image">
        </div>
        <div class="form-group">
          <input name="title" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
            <textarea name="description" rows="20" class="form-control" placeholder="Add a brief Description"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Update
        </button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>
