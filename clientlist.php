<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    div.dt-container {
        width: 1200px;
        margin: 0 auto;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.css">

  <title>KIP | iManager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="admin.js">
  <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/2.1.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/2.1.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/scroller/2.4.3/css/scroller.bootstrap5.min.css">
  
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

        <li class="nav-item">
          <a class="nav-link text-white" href="clientlist.php"><i class="fa-solid fa-users mx-3"></i>CLIENT LIST </a>
          <hr class="bg-white" style="height: 3px;">
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
    <div class="col-md-10 p-5 pt-2 mt-5">
      <h3><i class="fa-solid fa-users mx-3"></i> CLIENT LIST</h3>  

      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: 100%"></div>
      </div>
    
      <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header fw-bold text-center bg-primary text-white">
              CLIENT LIST
            </div>
            <div class="card-body">
              <a href="iclient.php" class="btn btn-md btn-success fw-bold" style="margin-bottom: 10px">ADD DATA</a>
              <!--<table class="table table-bordered table-striped" id="myTable"> --> 
              <table id="example" class="display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">ACTION</th>
                    <th scope="col">NO.INSTITUTION</th>
                    <th scope="col">INSTITUTION NAME</th>
                    <th scope="col">INSTITUTION ADDRESS</th>
                    <th scope="col">CORESPONDENCE ADDRESS</th>
                    <th scope="col">TELP</th>
                    <th scope="col">FAX</th>
                    <th scope="col">PIC 1 NAME</th>
                    <th scope="col">PIC 1 POSITION</th>
                    <th scope="col">PIC 1 HP</th>
                    <th scope="col">PIC 1 EMAIL</th>
                    <th scope="col">PIC 1 NATIONALITY</th>
                    <th scope="col">PIC 1 PASSPORT</th>
                    <th scope="col">PIC 1 KTP</th>
                    <th scope="col">PIC 1 RESIDENCE</th>
                    <th scope="col">PIC 2 NAME</th>
                    <th scope="col">PIC 2 POSITION</th>
                    <th scope="col">PIC 2 HP</th>
                    <th scope="col">PIC 2 EMAIL</th>
                    <th scope="col">PIC 2 NATIONALITY</th>
                    <th scope="col">PIC 2 PASSPORT</th>
                    <th scope="col">PIC 2 KTP</th>
                    <th scope="col">PIC 2 RESIDENCE</th>
                    <th scope="col">REPORT EMAIL</th>
                    <th scope="col">REPORT PRINT</th>
                    <th scope="col">BANK 1 NAME</th>
                    <th scope="col">BANK 1 ACCOUNT NO</th>
                    <th scope="col">BANK 1 ACCOUNT NAME</th>
                    <th scope="col">BANK 1 ACCOUNT CCY</th>
                    <th scope="col">BANK 2 NAME</th>
                    <th scope="col">BANK 2 ACCOUNT NO</th>
                    <th scope="col">BANK 2 ACCOUNT NAME</th>
                    <th scope="col">BANK 2 ACCOUNT CCY</th>
                    <th scope="col">NO REKENING GCI</th>
                    <th scope="col">NO REKENING OBF USD</th>
                    <th scope="col">NO REKENING OBF EURO</th>
                    <th scope="col">NO REKENING OGF</th>
                    <th scope="col">REGISTRATION</th>
                    <th scope="col">LAST EDIT</th>
                    <th scope="col">LAST EDITOR</th>
                  </tr>
                </thead>
                <tbody>
      
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tbl_client_list");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td class="text-center">
                        <a href="eprofil.php?id=<?php echo $row['fid_client_list'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="dprofil.php?id=<?php echo $row['fid_client_list'] ?>" class="btn btn-sm btn-danger">DELETE</a>
                      </td>
                      <td><?php echo $row['fclient_no'] ?></td>
                      <td><?php echo $row['fclient_name'] ?></td>
                      <td><?php echo $row['faddress'] ?></td>
                      <td><?php echo $row['faddress_correspondence'] ?></td>
                      <td><?php echo $row['ftelp'] ?></td>
                      <td><?php echo $row['ffax'] ?></td>
                      <td><?php echo $row['fpic1_name'] ?></td>
                      <td><?php echo $row['fpic1_position'] ?></td>
                      <td><?php echo $row['fpic1_hp'] ?></td>
                      <td><?php echo $row['fpic1_email'] ?></td>
                      <td><?php echo $row['fpic1_nationality'] ?></td>
                      <td><?php echo $row['fpic1_passport'] ?></td>
                      <td><?php echo $row['fpic1_ktp'] ?></td>
                      <td><?php echo $row['fpic1_address'] ?></td>
                      <td><?php echo $row['fpic2_name'] ?></td>
                      <td><?php echo $row['fpic2_position'] ?></td>
                      <td><?php echo $row['fpic2_hp'] ?></td>
                      <td><?php echo $row['fpic2_email'] ?></td>
                      <td><?php echo $row['fpic2_nationality'] ?></td>
                      <td><?php echo $row['fpic2_passport'] ?></td>
                      <td><?php echo $row['fpic2_ktp'] ?></td>
                      <td><?php echo $row['fpic2_address'] ?></td>
                      <td><?php echo $row['femail_report'] ?></td>
                      <td><?php echo $row['fprint_report'] ?></td>
                      <td><?php echo $row['fbank1_name'] ?></td>
                      <td><?php echo $row['fbank1_account'] ?></td>
                      <td><?php echo $row['fbank1_account_name'] ?></td>
                      <td><?php echo $row['fbank1_account_ccy'] ?></td>
                      <td><?php echo $row['fbank1_name'] ?></td>
                      <td><?php echo $row['fbank2_account'] ?></td>
                      <td><?php echo $row['fbank2_account_name'] ?></td>
                      <td><?php echo $row['fbank2_account_ccy'] ?></td>
                      <td><?php echo $row['fno_rek_gci'] ?></td>
                      <td><?php echo $row['fno_rek_obf_usd'] ?></td>
                      <td><?php echo $row['fno_rek_obf_euro'] ?></td>
                      <td><?php echo $row['fno_rek_ogf'] ?></td>
                      <td><?php echo $row['fregistration_time'] ?></td>
                      <td><?php echo $row['flast_edit'] ?></td>
                      <td><?php echo $row['flast_editor'] ?></td>
                    </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
            <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
            <script src="https://cdn.datatables.net/2.1.5/js/dataTables.js"></script>
            <script>
                new DataTable('#example', {
                   scrollX: true,
                  scrollY: 200
              });    
            </script>

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
    <script src="//cdn.datatables.net/2.1.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
    <script src="//cdn.datatables.net/2.1.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.datatables.net/scroller/2.4.3/js/dataTables.scroller.min.js"></script>
    <script src="//cdn.datatables.net/scroller/2.4.3/js/scroller.bootstrap5.min.js"></script>

    <script>
      $(document).ready( function () {
          $('#myTable').DataTable( {
          "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
          "pageLength": 5
       } );
      } );
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>