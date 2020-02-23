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
  width: 197px;
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
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="../index.php">XYZ Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" style="padding:10px;">
    <li class="nav-item active"> <a class="nav-link" href="index.php"> Dashboard<span class="sr-only">(current)</span></a> </li>
      <li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>
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
    <li class="nav-item"> <a href="comp-buttons.php" class="nav-link text-dark font-italic"> <i class="fa fa-eercast mr-3 text-primary fa-fw"></i> Buttons</a> </li>
    <li class="nav-item"> <a href="comp-bg.php" class="nav-link text-dark font-italic"> <i class="fa fa-image mr-3 text-primary fa-fw"></i> Background </a> </li>
  </ul>
</div>

<!-- End vertical navbar -->
<div class="page-content p-3" id="content">
<!-- Toggle button -->
<button id="sidebarCollapse" type="button" class="btn btn-dark" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-cog" style="font-size:20px"></i> </button><br /><br />
<!---Your content here-->
      <table border="1" bordercolor="666" cellpadding="12" width="100%"  style="color:#FFFFFF">
  <thead align="center">
    <tr>
      <th>Heading</th>
      <th>Example</th>
    </tr>
  </thead>
  <tbody align="center">
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h1&gt;&lt;/h1&gt;</code></p>

      </td>
      <td><span class="h1">Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h2&gt;&lt;/h2&gt;</code></p>

      </td>
      <td><span class="h2">Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h3&gt;&lt;/h3&gt;</code></p>

      </td>
      <td><span class="h3">Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h4&gt;&lt;/h4&gt;</code></p>

      </td>
      <td><span class="h4">Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h5&gt;&lt;/h5&gt;</code></p>

      </td>
      <td><span class="h5">Bootstrap heading</span></td>
    </tr>
    <tr>
      <td>
        <p><code class="highlighter-rouge">&lt;h6&gt;&lt;/h6&gt;</code></p>

      </td>
      <td><span class="h6">Bootstrap heading</span></td>
    </tr>
  </tbody>
</table>
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