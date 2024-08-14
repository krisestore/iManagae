<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title>KIP | iManager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="admin.js">
  <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Selamat Datang Admin <b>| KIP-iManagement</b></a>
      <form class="form-inline my-2 my-lg-0 ml-auto"></form>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="icon ml-4">
        <h5>
          <a class="link" href="profil.html"><i class="fa-solid fa-user ml-auto mx-3" data-bs-toggle="tooltip" title="Profil"></i></a>
          <a class="link" href="#"><i class="fa-solid fa-right-from-bracket ml-auto mx-3" data-bs-toggle="tooltip" href="#" title="Sign Out"></i></a>
        </h5>
      </div>

    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-5">
      <ul class="nav flex-column ml-3 mb-4">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/kip-boot"><i
              class="fa-solid fa-house mx-3"></i> DASHBOARD</a>
          <hr class="bg-white" style="height: 3px;">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="control_panel.html"><i class="fa-solid fa-sliders mx-3"></i> CONTROL
            PANEL</a>
          <hr class="bg-white" style="height: 3px;">
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle bg-dark text-white" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-solid fa-users mx-3"></i> CLIENT LIST</a>
          <hr class="bg-white" style="height: 3px;">
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item bg-dark text-white" href="#">ADD CLIENT</a></li>
            <hr class="bg-white" style="height: 3px;">
            <li><a class="dropdown-item bg-dark text-white" href="#">UPDATE CLIENT</a></li>

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-list mx-3"></i> PRODUCT LIST</a>
          <hr class="bg-white" style="height: 3px;">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping mx-3"></i> TRANSACTION</a>
          <hr class="bg-white" style="height: 3px;">
        </li>


        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-user-check mx-3"></i> APPROVAL</a>
          <hr class="bg-white" style="height: 3px;">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fa-solid fa-print mx-3 mb-3"></i> REPORT</a>
        </li>

      </ul>
      <body>
        <!-- Konten halaman lainnya -->

        <footer class="bg-dark text-warning text-center py-0 mt-5 pt-5">
          <p>&copy; <em>2024 wonk boots system</em></p>
        </footer>
      </body>

    </div>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fa-solid fa-id-card mx-3"></i> PROFILE</h3>

      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: 100%"></div>
      </div>
    
      <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header fw-bold text-center bg-primary text-white">
              DATA PROFILE
            </div>
            <div class="card-body">
              <a href="profil.html" class="btn btn-md btn-success fw-bold" style="margin-bottom: 10px">ADD DATA</a>
              <table class="table table-bordered table-striped" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">ID NUMBER</th>
                    <th scope="col">FULL NAME</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tbl_profile");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_number'] ?></td>
                      <td><?php echo $row['nama_lengkap'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td class="text-center">
                        <a href="edit-siswa.php?id=<?php echo $row['id_number'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-siswa.php?id=<?php echo $row['id_number'] ?>" class="btn btn-sm btn-danger">DELETE</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>




      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contoh Footer</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
      </head>

      </html>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>