<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Mahasiswa V.2024 - Menu Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="menu.php">
	<img src="https://umb.ac.id/wp-content/uploads/2024/03/logo-branding-umb-3-150x150.png" width="30px" height="30px">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
       
        <li class="nav-item">
          <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="prodi.php">Prodi</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="pengaturan.php">Pengaturan</a>
        </li>
		<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="dafmhs.php">Daftar Mahasiswa</a></li>
    <li><a class="dropdown-item" href="dafprodi.php">Daftar Prodi</a></li>
    <li><a class="dropdown-item" href="infomhs.php">Info Mahasiswa</a></li>
  </ul>
</li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar bg-white p-1">
      <div class="container-fluid">
        <a class="navbar-brand text-light-dark" href="#myCard">Prodi Universitas Muhammadiyah Bengkulu</a>
      </div>
    </nav>


<!-- carousel section -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://umb.ac.id/wp-content/uploads/2024/03/coverumb-1.png" class="d-block w-100" alt="..." height="350" />
        </div>
        <div class="carousel-item">
          <img src="https://umb.ac.id/wp-content/uploads/2024/04/model-umb26.png" class="d-block w-100" alt="..." height="350" />
        </div>
        <div class="carousel-item">
          <img src="https://umb.ac.id/wp-content/uploads/2024/04/model-umb18.png" class="d-block w-100" alt="..." height="350" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <nav class="navbar bg-dark p-1">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#myCard">Cari Prodi</a>
      </div>
    </nav>
   



<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">kode prodi</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">nama prodi</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</body>
</ht>


