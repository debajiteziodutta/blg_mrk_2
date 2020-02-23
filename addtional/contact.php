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
    		<li class="active"><a href="contact.php">Contact us<span class="sr-only"></a></li>
        <li><a href="signup.php">Sign up</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="logout.php">Log Out</a></li>
			</ul>
		</div>
	
	</div>
</nav>
</div>
<br>

<h2>We'd love to hear from you!</h2>
<div class="container contact">
  
  <form action="#" method="POST">
    <div class="col-md-12">
    <label class="col-md-4" for="fname">First Name</label>
    <div class="col-md-8">
    <input class="transparent-input" type="text" id="fname" name="firstname" placeholder="Your First name.." required />
    </div>
    </div>
    <div class="col-md-12">
    <label class="col-md-4" for="lname">Last Name</label>
    <div class="col-md-8">
    <input class="transparent-input" type="text" id="lname" name="lastname" placeholder="Your last name.." required />
    </div>
</div>
<div class="col-md-12 {margin-top:20px;}">
    <label class="col-md-4" for="subject">Subject</label>
    <div class="col-md-8">
    <textarea id="subject" type="text" class="transparent-input" name="subject" placeholder="Write something.." style="height:200px"  required></textarea>
</div>
</div>
    <button class="btn btn-success sweep-to-bottom" type="submit" >Submit</button>
    <button class="btn btn-default"type="reset">Reset</button>
  </form>
</div>


<?php
    include_once("../includes/footer.php");
 ?>