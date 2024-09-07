<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.min.css" />
  <!-- Gogle Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Lilita+One&family=Oleo+Script:wght@400;700&family=Platypi:ital,wght@0,300..800;1,300..800&family=Poppins:
    ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <title>Hello, world!</title>
</head>

<body>

  <!-- navbar admin -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #D89F3B;">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN | <span>TOKO KU</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <div class="icon">
        <h5>
          <i class="fa-regular fa-bell" data-toggle="tooltip" title="Bell Pesan"></i>
          <i class="fa-regular fa-envelope" data-toggle="tooltip" title="Surat Pesan"></i>
          <i class="fa-solid fa-arrow-right-from-bracket" data-toggle="tooltip" title="Log Keluar" c></i>
        </h5>
      </div>

    </div>
    </div>
  </nav>

  <!-- container isi -->
  <div class="row no-gutters mt-5">
    <!-- navbar samping -->
    <div class="col-md-3 bg-dark mt-2">
      <ul class="nav flex-column mt-3" style="padding: 50px 20px;">
        <hr class="bg-light">
        <li class="nav-item d-flex align-items-center">
          <i class="fa-solid fa-gauge" style="color: #ffffff;"></i>
          <a class="nav-link active text-white" aria-current="page" href="#">Dashboard</a>
        </li>
        <hr class="bg-light">
        <li class="nav-item d-flex align-items-center">
          <i class="fa-solid fa-book-open" style="color: #ffffff;"></i>
          <a class="nav-link text-white" href="./barang/nama.php">Nama Barang</a>
        </li>
        <hr class="bg-light">
        <li class="nav-item d-flex align-items-center">
          <i class="fa-solid fa-plus" style="color: #ffffff;"></i>
          <a class="nav-link text-white" href="./barang/harga.php">Harga Barang</a>
        </li>
        <hr class="bg-light">
        <li class="nav-item d-flex align-items-center">
          <i class="fa-solid fa-code-fork" style="color: #ffffff;"></i>
          <a class="nav-link text-white" href="./barang/code.php">Code Barang</a>
        </li>
        <hr class="bg-light">
        <li class="nav-item d-flex align-items-center">
          <i class="fa-solid fa-paper-plane" style="color: #ffffff;"></i>
          <a class="nav-link text-white" href="#">Jumlah Barang</a>
        </li>
        <hr class="bg-light">
      </ul>

      <div class="media">
        <h2>
          <a href=""><i class="fa-brands fa-square-instagram" style="color: #bababa;"></i></a>
          <a href=""><i class="fa-brands fa-square-facebook" style="color: #bababa;"></i></a>
          <a href=""><i class="fa-brands fa-square-whatsapp" style="color: #bababa;"></i></a>
        </h2>
      </div>
    </div>

    <!-- isi kedua -->
    <div class="col-md-9 ">
      <h3> <i class="fa-solid fa-gauge p-3 pt-5" style="color: #000000;"></i> DASHBOARD</h3>
      <hr>
      <!-- penggunaan card -->
      <div class="row">
        <div class="card" style="width: 17rem; background-color: rgb(206, 8, 8);">
          <div class="card-body">
            <i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Nama Barang" style="color: #ffffff;"></i>
            <h5 class="card-title p-1">NAMA BARANG</h5>
            <a href="./barang/nama.php">
              <p class="card-text">Lihat Selengkapnya --></p>
            </a>
          </div>
        </div>

        <div class="card" style="width: 17rem; background-color: rgb(36, 150, 1);">
          <div class="card-body">
            <i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Nama Barang" style="color: #ffffff;"></i>
            <h5 class="card-title p-1">JENIS BARANG</h5>
            <a href="./barang/jenis.php">
              <p class="card-text">Lihat Selengkapnya --></p>
            </a>
          </div>
        </div>


        <div class="card" style="width: 17rem; background-color: rgb(22, 25, 206);">
          <div class="card-body">
            <i class="fa-solid fa-pen-to-square" data-toggle="tooltip" title="Nama Barang" style="color: #ffffff;"></i>
            <h5 class="card-title p-1">JUMLAH BARANG BARANG</h5>
            <a href="">
              <p class="card-text">Lihat Selengkapnya --></p>
            </a>
          </div>
        </div>

      </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="js/script.js"></script>
</body>

</html>