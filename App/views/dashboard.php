<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SiJawa Dashboard</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/styledashboard.css">
</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-white">SiJawa </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Job</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white"></a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white active">Edukasi</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Prediksi</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">Keluar</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <h1 class="mt-4">Edukasi</h1>
        <form class="mb-4">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Masukkan Judul">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Masukkan Isi">
            </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="Tanggal Publikasi">
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <img class="card-img-top" src="https://via.placeholder.com/150" alt="Manfaat cabai jawa">
              <div class="card-body">
                <h5 class="card-title">Manfaat cabai jawa</h5>
                <p class="card-text">Tanaman cabai jawa ini manfaatnya banyak bisa untuk jamu, penghangat tubuh, yang bisa dipakai oleh orang tua. bisa juga untuk urapan bondas setelah diparut, bisa dicampur dengan jahe merah.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-4">
              <img class="card-img-top" src="https://via.placeholder.com/150" alt="Manfaat cabai jawa">
              <div class="card-body">
                <h5 class="card-title">Manfaat cabai jawa</h5>
                <p class="card-text">Tanaman cabai jawa ini manfaatnya banyak bisa untuk jamu, penghangat tubuh, yang bisa dipakai oleh orang tua. bisa juga untuk urapan bondas setelah diparut, bisa dicampur dengan jahe merah.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-4">
              <img class="card-img-top" src="https://via.placeholder.com/150" alt="Manfaat cabai jawa">
              <div class="card-body">
                <h5 class="card-title">Manfaat cabai jawa</h5>
                <p class="card-text">Tanaman cabai jawa ini manfaatnya banyak bisa untuk jamu, penghangat tubuh, yang bisa dipakai oleh orang tua. bisa juga untuk urapan bondas setelah diparut, bisa dicampur dengan jahe merah.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="scripts.js"></script>
</body>
</html>
