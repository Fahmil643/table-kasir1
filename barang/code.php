<?php
include "function.php";
// pemanggilan data di function
$data = query("SELECT * FROM barang")
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Goggle Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- link css -->
  <link rel="stylesheet" href="/css/nama.css">
  <title>Hello, world!</title>
</head>

<body>
  <div class="contain">
    <h2 class="text-center">CODE BARANG</h2>
  </div>

  <!-- section nav -->
  <section class="nav1">
    <nav class="navbar navbar-expand-lg navbar-light bg-section">
      <div class="container-fluid">
        <form class="d-flex ms-auto">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
      </div>
    </nav>
  </section>

  <!-- nama barang -->
  <div class="container">
    <table class="table table-striped text-center">
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>ID Barang</th>
        <th>Code Barang</th>
      </tr>
      <!-- pemanggilan data  -->

      <?php
      $b = 0;
      foreach ($data as $key) :
        $b++;
      ?>
        <tr>
          <td><?= $b; ?></td>
          <td><?= $key['nama']; ?></td>
          <td><?= $key['id_barang']; ?></td>
          <td><?= $key['code']; ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>