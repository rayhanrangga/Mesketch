<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MeSketch Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style1.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/logow.png" />
  <!-- <style>
    .custom-file {
      border: 1px solid #000;
      border-radius: 50px;
      padding: 2px;
      font-size: 20px;
    }

    .custom-file::-webkit-file-upload-button {
      background: #000;
      color: #fff;
      padding: 8px 16px;
      border: none;
      border-radius: 50px;
      cursor: pointer;
    }
  </style> -->
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php
    session_start();
    include('crudDash.php');
    include('navbar.php');
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php
      include('sidebar.php');
      ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form action="proses.php" method="POST" enctype="multipart/form-data">
                    <h4 class="card-title">Input Artikel Baru!</h4>
                    <!-- <p class="card-description">
                    Input Artikel Baru!
                  </p> -->
                    <div class="form-group">
                      <label>Gambar Thumbnail</label>
                      <p></p>
                      <!-- <input type="text" class="form-control file-upload-info" placeholder="Upload Image"> -->
                      <input type="file" name="img" class="custom-file">
                      <!-- <input type="file" name="file"> -->

                    </div>
                    <div class="form-group">

                      <label for="exampleInputCity1">Judul Artikel</label>
                      <input type="text" class="form-control" id="exampleInputCity1" name="judul" placeholder="Judul">
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputCity1"></label> -->
                    <input type="hidden" class="form-control" id="exampleInputCity1" name="author" placeholder="Author" value="<?php echo $_SESSION['namauser']; ?>">
                    <!-- </div> -->
                    <div class="form-group">
                      <label for="exampleTextarea1">Content</label>
                      <textarea rows="15" id="ckeditor" class="ckeditor form-control" name="isi"></textarea placeholder="isi artikel">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal</label>
                      <input type="date" class="form-control" id="exampleInputCity1" name="tanggal" placeholder="tanggal uploaad">
                    </div>
                    <button type="submit" value="TambahArti!" name="TambahArti" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer>  -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>
  <script src="ckeditor/ckeditor.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>