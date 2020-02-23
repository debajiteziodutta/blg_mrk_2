
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 300px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: hidden;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #333;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}
/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.vertical-nav {
  min-width: 17rem;
  width: 17rem;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  transition: all 0.4s;
}

.page-content {
  width: calc(100% - 17rem);
  margin-left: 17rem;
  transition: all 0.4s;
}

/* for toggle behavior */

#sidebar.active {
  margin-left: -17rem;
}

#content.active {
  width: 100%;
  margin: 0;
}

@media (max-width: 768px) {
  #sidebar {
    margin-left: -17rem;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #content {
    width: 100%;
    margin: 0;
  }
  #content.active {
    margin-left: 17rem;
    width: calc(100% - 17rem);
  }
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  background: #599fd9;
  background: -webkit-linear-gradient(to right, #599fd9, #c2e59c);
  background: linear-gradient(to right, #599fd9, #c2e59c);
  min-height: 100vh;
  overflow-x: hidden;
}
.sweep-to-bottom {
  position: relative;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-transition: color 1000ms;
  transition: color 1000ms;
  color: #fff;
}
.sweep-to-bottom:before {
  content: "";
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: darksalmon;
  border: darksalmon;
  -webkit-transform: scaleY(0);
  transform: scaleY(0);
  -webkit-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transition: 300ms ease-out;
  transition: 300ms ease-out;
}
.btn-succes {
    color: #fff;
    background-color:cadetblue;
    border-color:cadetblue;
}
.btn-succes:hover {
    color: #fff;
    background-color:cadetblue;
    border-color:salmon;
}
.sweep-to-bottom:hover:before {
  -webkit-transform: scaleY(1);
  transform: scaleY(1);
}
.separator {
  margin: 3rem 0;
  border-bottom: 1px dashed #fff;
}

.text-uppercase {
  letter-spacing: 0.1em;
}

.text-gray {
  color: #aaa;
}
.sidebar-toggler-icon{
  width: 25px;
  height: 4px;
  background-color: #fff;
  margin: 3px 0;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="../index.php">XYZ Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" style="padding:10px;">
      <li class="nav-item active"> <a class="nav-link" href="index.php"> Dashboard<span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="../addtional/logout.php">Logout</a> </li>
      <li class="nav-item"> <a class="nav-link" href="change-password.php">Change Password</a> </li>
    </ul>
  </div>
</nav>
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-4 px-3 mb-4 bg-light">
    <div class="media d-flex align-items-center"><img src="../images/admin-hasmat.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
      <div class="media-body">
        <h4 class="m-0">Hasmat  Noorani</h4>
        <p class="font-weight-light text-muted mb-0">Administrator</p>
      </div>
    </div>
  </div>
  <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>
  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item"> <a href="comp-navbar.php" class="nav-link text-dark font-italic"> <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> Navbar </a> </li>
    <li class="nav-item"> <a href="typo.php" class="nav-link text-dark font-italic"> <i class="fa fa-edit mr-3 text-primary fa-fw"></i> Typography </a> </li>
    <li class="nav-item"> <a href="comp-buttons.php" class="nav-link text-dark font-italic"> <i class="fa fa-eercast  mr-3 text-primary fa-fw"></i> Buttons</a> </li>
    <li class="nav-item"> <a href="comp-bg.php" class="nav-link text-dark font-italic"> <i class="fa fa-image mr-3 text-primary fa-fw"></i> Background </a> </li>
  </ul>
</div>
<!-- End vertical navbar -->
<div class="page-content p-2" id="content">
<!-- Toggle button -->
<button id="sidebarCollapse" type="button" class="btn btn-dark" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-cog" style="font-size:20px"></i> </button><br /><br />
<!--Your Content here! -->
<div class="container" align="center">
  


    <table border="1" bordercolor="666" cellpadding="10" width="90%"  style="color:#FFFFFF">
  <thead align="center">
    <tr>
      <th>Name</th>
      <th>Buttons</th>
    </tr>
  </thead>
  <tbody align="center">
  <form action = "save_btn.php?sty=btn btn-primary" method = "POST">
    <tr>
      <td>
   <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>
    </td>
      <td><button type="submit" class="btn btn-primary">Primary</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-secondary" method = "POST">
    <tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>
      </td>
      <td><button type="submit" class="btn btn-secondary">Secondary</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-success" method = "POST">
    <tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>

      </td>
      <td><button type="submit" class="btn btn-success">Success</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-danger" method = "POST">
    <tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>

      </td>
      <td><button type="submit" class="btn btn-danger">Danger</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-warning" method = "POST">
    <tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>

      </td>
      <td><button type="submit" class="btn btn-warning">Warning</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-info" method = "POST">
    <tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>

      </td>
      <td><button type="submit" class="btn btn-info">Info</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-light" method = "POST">
	<tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>

      </td>
      <td><button type="submit" class="btn btn-light">Light</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-dark" method = "POST">
	<tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>
      </td>
      <td><button type="submit" class="btn btn-dark">Dark</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-succes sweep-to-bottom btn-block" method = "POST">
    <tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>
      </td>
      <td><button type="submit" class="btn btn-succes sweep-to-bottom btn-block">Sweep-To-Bottom Block</button></td>
    </tr>
    </form>
    <form action = "save_btn.php?sty=btn btn-succes sweep-to-bottom" method = "POST">
		<tr>
      <td>
      <p style="color:#FFFFFF">*Enter the name of the button to be changed.</p>
  <div class="form-group">
  <input type="text" name="btn-name" id="btn-name" required/>
  </div>
      </td>
      <td><button type="submit" class="btn btn-succes sweep-to-bottom">Sweep-To-Bottom</button></td>
    </tr>
    </form>
  </tbody>
</table>

<br />
 
</div>
</div>
</div>
<script type="text/javascript">

$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});</script>
</body>
</html>
