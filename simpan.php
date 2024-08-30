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
</body>
<?php
    //include koneksi database
    include('koneksi.php');

    //get data dari form
    $id_number = $_POST['id_number'];
    $full_name = $_POST['nama_lengkap'];
    $address   = $_POST['alamat'];

    // Cek apakah id_number sudah ada di database
     $cek_id = "SELECT * FROM tbl_profile WHERE id_number = '$id_number'";
     $result = $connection->query($cek_id);

    if ($result->num_rows > 0) {
        // Jika id_number sudah ada, tampilkan pesan error
       echo "ID Number Has Been Registered !";
       echo "<div style='margin-top: 20px;'>
                <button onclick='history.back()'>BACK</button>
            </div>";
       //echo "<button onclick='history.back()'br-3>Kembali</button>";

    } else {
        // Jika id_number belum ada, lanjutkan insert data
         $query = "INSERT INTO tbl_profile (id_number, nama_lengkap, alamat) VALUES ('$id_number', '$full_name', '$address')";

           if($connection->query($query)) {

            //redirect ke halaman index.php 
               // header("location: profil.php"); 
               echo "<script> window.location.href='profil.php';</script>";
                 
            } else {

                //pesan error gagal insert data
               echo "Data Gagal Disimpan!";               
            }             
    }   
?>

    
<!DOCTYPE html>
<html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Contoh Footer</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      </head>

      
    

      </html>

    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
