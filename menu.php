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

    <!-- As a link -->
    <nav class="navbar bg-white p-1">
      <div class="container-fluid">
        <a class="navbar-brand text-light-dark" href="#myCard">HOME</a>
      </div>
    </nav>

    <!-- carousel section -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://umb.ac.id/wp-content/uploads/2024/04/gedungumbkampus4.png" class="d-block w-100" alt="..." height="350" />
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
    <!--card section  -->
    <div class="d-flex p-2 mt-2 justify-content-center align-items-center">
      <div class="d-sm-flex">
        <div class="card m-2 shadow-lg" style="width: 18rem">
          <img src="https://umb.ac.id/wp-content/uploads/2024/04/model-umb26.png" class="card-img-top" alt="..." width="350" height="350" />
          <div class="card-body">
            <h5 class="card-title">IKATAN MAHASISWA MUHAMMADIYAH</h5>
            <p class="card-text">IMM merupakan organisasi mahasiswa yang bersifat intra dan ekstra kampus yang ada di UMB. IMM sekelaigus membedakan UMB dengan Perguruan Tinggi lain yang ada di Provinsi Bengkulu. Organisasi di maksud adalah Ikatan Mahasiswa Muhammadiyah yang disingkat dengan IMM. Di UMB, struktur Kepemimpinan IMM dimulai dari Koordinator Komisariat (KORKOM) untuk tingkat universitas dan Pimpinan Komisariat (PK) untuk tingkat fakultas. Secara struktural Korkom IMM selain bertanggung jawab kepada Wakil Rektor Bidang Kemahasiswaan, juga bertanggungjawab kepada Pimpinan Cabang (PC) Ikatan Mahasiswa Muhammadiyah Kota Bengkulu. Dalam pembinaan dan berkegiatan IMM berpedoman pada aturan yang telah ditetapkan oleh Pimpinan Pusat IMM dan atau aturan yang berlaku di UMB.

Mahasiswa yang bergabung di IMM, diharapkan dapat menjadi kader penerus gerak perjuangan Persyarikatan Muhammadiyah dalam menegakan dakwah amar ma’ruf nahi munkar.</p>
           
          </div>
        </div>
        
        <div class="card m-2 shadow-lg" style="width: 18rem" id="myCard">
          <img src="https://umb.ac.id/wp-content/uploads/2024/04/model-umb36.png" class="card-img-top" alt="..." width="300" height="300" />
          <div class="card-body">
            <h5 class="card-title">KEMAHASISWAAN</h5>
            <p class="card-text">UMB memfasilitasi setiap mahasiswanya yang ingin mengembangkan potensi terbaiknya di bidang akademik maupun non akademik, minat dan bakat. Melalui berbagai fasilitas organisasi kemahasiswaan, mahasiswa UMB dapat melakukan berbagai kegiatan. UMB juga memberikan apresiasi bagi mahasiswa yang mampu meraih prestasi baik di tingkat lokal, nasional maupun internasional.</p>
            
          </div>
        </div>
        <div class="card m-2 shadow-lg" style="width: 18rem" id="myCard">
          <img src="https://umb.ac.id/wp-content/uploads/2024/04/model-umb18.png" class="card-img-top" alt="..." width="300" height="300" />
          <div class="card-body">
            <h5 class="card-title">BADAN EKSEKUTIF MAHASISWA</h5>
            <p class="card-text">BEM merupakan organisasi mahasiswa intra kampus. Di UMB, BEM merupakan lembaga eksekutif mahasiswa yang ada di tingkat universitas dan tingkat Fakultas. BEM memiliki fungsi sebagai berikut:

Melaksanakan kegiatan kokurikuler dan ekstrakurikuler mahasiswa, terutama dalam bidang minat, bakat, dan kesejahteraan mahasiswa
Mengembangkan pengetahuan, sikap, dan keterampilan manajemen kegiatan mahasiswa.
Melakukan advokasi kepada mahasiswa yang menemui masalah akademis dan kemahasiswaan.</p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center bg-dark w-100 text-light mt-2">
      <div class="p-2">
        <h3>made with Muhammad Bais Al hakiki</h3>
      </div>
    </div>

    <!-- javasricpt bundle with popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

</body>
</html>


