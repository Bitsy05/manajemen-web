<?php
include 'config/config.php';
$id = $_GET['id'];
$sql = $conn->query("select * from tutorial where id = '$id'");

$tampil = $sql->fetch_assoc();

?>

<div class="container-fluid">

  <div class="card shadow w-50 mt-5 mx-auto">
    <div class="card-header py-3">
      <h6 class="py-2 font-weight-bold text-dark">Ubah Tutorial</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">


        <div class="body">

          <form method="POST" enctype="multipart/form-data">



            <label class="pt-3" for="">Judul Tutorial</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" value="<?php echo $tampil['judul']; ?>" name="judul" class="form-control" required />
              </div>
            </div>

            <label class="pt-3" for="">Link Youtube</label>
            <div class="form-group">
              <div class="form-line">
                <input type="text" value="<?php echo $tampil['link_video']; ?>" name="link_video" class="form-control"
                  required />
              </div>
            </div>

        </div>


        <div class="py-3">
          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary ">
          <button onclick="history.back();" type="button" class="btn ">Kembali</button>
        </div>

        </form>


        <?php
        if (isset($_POST['simpan'])) {

          $id = $_GET['id'];
          $judul = $_POST['judul'];
          $link_video = $_POST['link_video'];

          include 'config/config.php';
          $sql = $conn->query("update tutorial set judul = '$judul', link_video = '$link_video' where id = '$id'");


          if ($total == 0) {
            ?>
            <script type="text/javascript">
              alert("Data berhasil diubah");
              window.location.href = "?pages=home";
            </script>
            <?php
          } else {
            ?>
            <script type="text/javascript">
              alert("Data terindikasi duplikat");
              window.location.href = "?pages=databarang&aksi=ubahbarang&id=<?php echo $id ?>";
            </script>
            <?php
          }
        }

        ?>