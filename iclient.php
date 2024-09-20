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

        <li class="nav-item">
          <a class="nav-link text-white" href="clientlist.php"><i class="fa-solid fa-users mx-3"></i>CLIENT LIST</a>
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
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fa-solid fa-users mx-3"></i> CLIENT LIST</h3>

      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar" style="width: 100%"></div>
      </div>
  
        <div class="col-md-10 offset-md-0 mt-0 p-1 pt-3">
          <div class="card ">
            <div class="card-header bg-primary text-white fw-bold text-center">
              INPUT CLIENT
            </div>
            <div class="card-body">
              <form action="simpan_client.php" method="POST"> 

                <div class="form-group">
                  <p style="font-weight: bold;">INSTITUTION :</p>
                </div>

                <div class="form-group">
                  <label>CLIENT NO</label>
                  <input type="text" maxlength="10" name="id_number" placeholder="Client number" class="form-control" disabled>
                </div>

                <div class="form-group">
                  <label>INSTITUTION NAME</label>
                  <input type="text" maxlength="200" name="fclient_name" placeholder="Entry your institution name" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>INSTITUTION ADDRESS</label>
                  <textarea class="form-control" maxlength="300" name="faddress" placeholder="Entry your address" rows= "4" required></textarea>
                </div>

                <div class="form-group">
                  <label>CORRESPONDENCE ADDRESS</label>
                  <textarea class="form-control" maxlength="300" name="faddress_corresspondance" placeholder="Entry your address" rows= "4" required></textarea>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>INSTITUTION TELP</label>
                    <input type="text" maxlenght="50" class="form-control" name="ftelp" placeholder="Entry your telp number" aria-label="First name">
                  </div>
                  <div class="col">
                     <label>INSTITUTION FAX</label>
                     <input type="text" maxlenght="50" class="form-control" name="ffax" placeholder="Entry your FAX number" aria-label="Last name">
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>NO REK GCI</label>
                    <input type="text" maxlenght="50" class="form-control" name="fno_rek_gci" placeholder="Entry your No Rek GCI" aria-label="First name">
                  </div>
                  <div class="col">
                     <label>NO REK OGF</label>
                     <input type="text" maxlenght="50" class="form-control" name="fno_rek_ogf" placeholder="Entry your No Rek OGF" aria-label="Last name">
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>NO REK OBF USD</label>
                    <input type="text" maxlenght="50" class="form-control" name="fno_rek_obf_usd" placeholder="Entry your No Rek OBF USD" aria-label="First name">
                  </div>
                  <div class="col">
                     <label>NO REK OBF EURO</label>
                     <br><input type="text" maxlenght="50" class="form-control" name="fno_rek_obf_euro" placeholder="Entry your No Rek OBF EURO" aria-label="Last name"></br>
                   </div>
                </div>

                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                     <div class="progress-bar" style="width: 100%"></div>
                 </div>

                <div class="form-group">
                  <br><p style="font-weight: bold;">PERSON IN CHARGE :</p>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>PIC 1 NAME</label>
                    <input type="text" maxlenght="50" class="form-control" name="fpic1_name" placeholder="Entry your name" aria-label="First name" required>
                  </div>
                  <div class="col">
                     <label>PIC 2 NAME</label>
                     <input type="text" maxlenght="50" class="form-control" name="fpic2_name" placeholder="Entry your name" aria-label="Last name" required>
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>PIC 1 POSITION</label>
                    <input type="text" maxlenght="50" class="form-control" name="fpic1_position" placeholder="Entry your position" aria-label="First name">
                  </div>
                  <div class="col">
                     <label>PIC 2 POSITION</label>
                     <input type="text" maxlenght="50" class="form-control" name="fpic2_position" placeholder="Entry your position" aria-label="Last name">
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>PIC 1 HP</label>
                    <input type="text" maxlenght="50" class="form-control" name="fpic1_hp" placeholder="Entry your HP Number" aria-label="First name" required>
                  </div>
                  <div class="col">
                     <label>PIC 2 HP</label>
                     <input type="text" maxlenght="50" class="form-control" name="fpic2_hp" placeholder="Entry your Hp Number" aria-label="Last name" required>
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>PIC 1 EMAIL</label>
                    <input type="text" maxlenght="50" class="form-control" name="fpic1_email" placeholder="Entry your email" aria-label="First name">
                  </div>   
                  <div class="col">
                     <label>PIC 2 EMAIL</label>
                     <input type="text" maxlenght="50" class="form-control" name="fpic2_email" placeholder="Entry your email" aria-label="Last name">
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label>PIC 1 NATIONALITY</label>
                    <select class="form-select" aria-label="Default select example">
                          <option selected>WNI</option>
                          <option value="1">WNA</option>
                    </select>
                  </div>
                  <div class="col">
                  <label>PIC 2 NATIONALITY</label>
                    <select class="form-select" aria-label="Default select example">
                          <option selected>WNI</option>
                          <option value="1">WNA</option>
                    </select>
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>PIC 1 PASSPORT NO</label>
                    <input type="text" maxlenght="50" class="form-control" name="fpic1_passport" placeholder="Entry your passport no" aria-label="First name">
                  </div>
                  <div class="col">
                     <label>PIC 2 PASSPORT NO</label>
                     <input type="text" maxlenght="50" class="form-control" name="fpic2_passport" placeholder="Entry your passport no" aria-label="Last name">
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>PIC 1 KTP NO</label>
                    <input type="text" maxlenght="50" class="form-control" name="pic1_ktp" placeholder="Entry your KTP no" aria-label="First name">
                  </div>
                  <div class="col">
                     <label>PIC 2 KTP NO</label>
                     <input type="text" maxlenght="50" class="form-control" name="fpic2_ktp" placeholder="Entry your KTP no" aria-label="Last name">
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>PIC 1 RESIDENCE ADDRESS</label>
                    <br><textarea class="form-control" maxlength="300" name="fpic1_address" placeholder="Entry your address" rows= "4" required></textarea></br>
                  </div>
                  <div class="col">
                     <label>PIC 2 RESIDENCE ADDRESS</label>
                     <br><textarea class="form-control" maxlength="300" name="fpic2_address" placeholder="Entry your address" rows= "4" required></textarea></br>
                   </div>
                </div>

                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                     <div class="progress-bar" style="width: 100%"></div>
                 </div>

                <div class="form-group">
                  <p style="font-weight: bold;">BANK ACCOUNT :</p>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>BANK 1 NAME</label>
                    <input type="text" maxlenght="50" class="form-control" name="fbank1_name" placeholder="Entry your BANK" aria-label="First name" required>
                  </div>
                  <div class="col">
                     <label>BANK 2 NAME</label>
                     <input type="text" maxlenght="50" class="form-control" name="fbank2_name" placeholder="Entry your BANK" aria-label="Last name" required>
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>BANK 1 ACCOUNT NO</label>
                    <input type="text" maxlenght="50" class="form-control" name="fbank1_account" placeholder="Entry your BANK account no" aria-label="First name" required>
                  </div>
                  <div class="col">
                     <label>BANK 2 ACCOUNT NO</label>
                     <input type="text" maxlenght="50" class="form-control" name="fbank2_account" placeholder="Entry your BANK account no" aria-label="Last name" required>
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>BANK 1 ACCOUNT NAME</label>
                    <input type="text" maxlenght="50" class="form-control" name="fbank1_account_name" placeholder="Entry your BANK account name" aria-label="First name" required>
                  </div>
                  <div class="col">
                     <label>BANK 2 ACCOUNT NAME</label>
                     <input type="text" maxlenght="50" class="form-control" name="fbank2_account_name" placeholder="Entry your BANK account name" aria-label="Last name" required>
                   </div>
                </div>

                <div class="row">
                  <div class="col">
                    <label>BANK 1 ACCOUNT CURRENCY</label>
                    <select class="form-select" aria-label="Default select example">
                          <option selected>IDR</option>
                          <option value="1">USD</option>
                          <option value="1">EURO</option>
                    </select>
                  </div>
                  <div class="col">
                  <label>BANK 2 ACCOUNT CURRENCY</label>
                    <br><select class="form-select" aria-label="Default select example">
                          <option selected>IDR</option>
                          <option value="1">USD</option>
                          <option value="1">EURO</option>
                    </select> </br>
                   </div>
                </div>

                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                     <div class="progress-bar" style="width: 100%"></div>
                 </div>

                 <div class="form-group">
                  <p style="font-weight: bold;">SETTING :</p>
                </div>

                <div class="row">
                  <div class="col">
                    <label>REPORT VIA EMAIL</label>
                    <br><select class="form-select" aria-label="Default select example">
                          <option selected>YES</option>
                          <option value="1">NO</option>
                    </select></br>
                  </div>
                  <div class="col">
                  <label>PRINT REPORT</label>
                    <select class="form-select" aria-label="Default select example">
                          <option selected>YES</option>
                          <option value="1">NO</option>
                    </select>
                   </div>
                </div>

                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                     <div class="progress-bar" style="width: 100%"></div>
                 </div>

                 <div class="form-group">
                  <p style="font-weight: bold;">PRODUCT :</p>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>GCI</label>
                    <input type="text" maxlenght="50" class="form-control"  placeholder="0,0000" aria-label="First name" required>
                  </div>
                  <div class="col">
                     <label>OPTIMA BALANCED FUND - USD</label>
                     <input type="text" maxlenght="50" class="form-control" placeholder="0,0000" aria-label="Last name" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <Label>OPTIMA BALANCED FUND - EURO</label>
                    <input type="text" maxlenght="50" class="form-control" placeholder="0,0000" aria-label="First name" required>
                  </div>
                  <div class="col">
                     <label>OPTIMA GILT FUND - USD</label>
                     <br><input type="text" maxlenght="50" class="form-control" placeholder="0,0000" aria-label="Last name" required></br>
                  </div>
                </div>


               
                <button type="submit" class="btn btn-primary fw-bold bt-2">SAVE</button>
                <button type="reset" class="btn btn-warning fw-bold">CLEAR</button>
                <a href="clientlist.php" class="btn btn-success fw-bold">VIEW DATA</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>


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