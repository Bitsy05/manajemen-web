<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow w-50 mt-5 mx-auto">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tambah Tutorial</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">


                <div class="body">

                    <form method="POST" enctype="multipart/form-data">



                        <label class="pt-3" for="">Judul Tutorial</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="judul" class="form-control" required />
                            </div>
                        </div>

                        <label class="pt-3" for="">Link Youtube</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="link_video" class="form-control" required />
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

                    $judul = $_POST['judul'];
                    $link_video = $_POST['link_video'];

                    include 'config/config.php';
                    $sql = $conn->query("insert into tutorial (judul, link_video) values('$judul', '$link_video')");

                    if ($sql) {
                        ?>
                        <script type="text/javascript">
                            alert("Data berhasil disimpan");
                            window.location.href = "?pages=home";
                        </script>
                        <?php
                    } else {
                        ?>
                        <script type="text/javascript">
                            alert("Data terindikasi duplikat");
                        </script>
                        <?php
                    }

                }

                ?>