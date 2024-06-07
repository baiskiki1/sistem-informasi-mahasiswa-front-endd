<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Mahasiswa - Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- Offcanvas Sidebar -->
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Heading</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <button class="btn btn-secondary" type="button">A Button</button>
  </div>
</div>
<div class="container mt-3">
  <h2 class="navbar navbar-expand-sm justify-content-center rounded-5 text-white bg-success">Login Page</h2>
  <div class="row">
    <div class="col-8">
    <div class="card bg-danger text-white" style="width:100%">
  <img class="card-img-top" src="https://umb.ac.id/wp-content/uploads/2024/03/coverumb-1.png" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Sistem Informasi Manajemen Mahasiswa Per Program Studi</h4>
    <p class="card-text">Silahkan login dengan akun yang telah diberikan, bila ada kesulitan silahkan kontak kami.</p>
    <a href="#" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#demo">Kontak kami</a>
  </div>
</div>
    </div>
    <div class="col-4 bg-warning rounded-4">
  <form action="/action_page.php">
  <?php
  if (isset($_POST['submit'])) {
	  $KodeLogin=filter_var($_POST['KodeLogin'],FILTER_SANITIZE_STRING);
	  $Password=filter_var($_POST['Password'],FILTER_SANITIZE_STRING);
	  include_once('koneksi.db.php');
	  $sql="SELECT * FROM `login` WHERE KodeLogin='".$KodeLogin."' and Password='".$Password."'";
	  $q=mysqli_query($koneksi,$sql);
	  $r=mysqli_fetch_array($q);
	  if (!empty($r)) {
		  echo "<script>window.location.href='menu.php';</script>";
	  } else {
		  echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Gagal!</strong> Informasi login anda salah !
</div>';
	  }
  }
  ?>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>

    <a href="menu.php" class="btn btn-primary">submit</a>
  </form>
  </div>
 </div>
</div>

</body>
</html>
