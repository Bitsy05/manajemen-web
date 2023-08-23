<?php
include 'config/config.php';

error_reporting(0);

session_start();

if (empty($_SESSION["email"])) {
  header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/style.css">
  <script src="https://kit.fontawesome.com/9c8bc80dca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body id="page-top">
  <main class="d-flex flex-nowrap">

    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 300px;">

      <a href="?pages=home" class="d-flex mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="assets/images/logo.png" alt="logo" class="img-fluid">
      </a>
      <hr>
      <ul class="nav nav-pills flex-column">
        <li>
          <a href="?pages=home" class="nav-link text-white">
            <i class="fa-solid fa-database"></i>
            <span>Master Data</span>
          </a>

        </li>
      </ul>

      <hr>



      <div>
        <a href="logout.php" onclick="return confirm('Apakah anda yakin akan logout?')" ref="#"
          class="d-flex align-items-center text-white text-decoration-none" aria-expanded="false">
          <strong>Logout</strong>
          <i class="ms-2 fa-sharp fa-solid fa-right-from-bracket"></i>
        </a>
      </div>
    </div>

    <div class="b-example-vr"></div>

    <div class="container-fluid">

      <section class="content">


        <?php
        $pages = $_GET["pages"];
        $aksi = $_GET["aksi"];



        if ($pages == "") {
          include "pages/tutorial/index.php";
        }
        if ($pages == "home") {
          if ($aksi == '') {
            include "pages/tutorial/index.php";

          }
          if ($aksi == 'tambah') {
            include "pages/tutorial/tambah.php";
          }
          if ($aksi == 'ubah') {
            include "pages/tutorial/ubah.php";
          }
          if ($aksi == 'hapus') {
            include "pages/tutorial/hapus.php";
          }
        }
        ?>


      </section>
      <script>
        $(document).ready(function () {
          $('table').DataTable();
        });
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

      <script>
        jQuery(document).ready(function ($) {
          $('#cmb_barang').change(function () { // Jika Select Box id provinsi dipilih
            var tamp = $(this).val(); // Ciptakan variabel provinsi
            $.ajax({
              type: 'POST', // Metode pengiriman data menggunakan POST
              url: 'pages/barangkeluar/get_barang.php', // File yang akan memproses data
              data: 'tamp=' + tamp, // Data yang akan dikirim ke file pemroses
              success: function (data) { // Jika berhasil
                $('.tampung').html(data); // Berikan hasil ke id kota
              }


            });
          });
        });
      </script>
</body>

</html>