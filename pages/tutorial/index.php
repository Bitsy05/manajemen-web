<div class="container-fluid">
    <div class="card shadow mt-5">
        <div class="card-header py-3">
            <div class="float-start d-inline py-1">
                <h5 class="font-weight-bold text-dark">Master Data Tutorial Workout</h5>
            </div>
            <div class="float-end d-inline px-3">
                <a href="?pages=home&aksi=tambah" class="btn btn-primary">Tambah Tutorial</a>
            </div>
            <div class="float-end d-inline">
                <a href="?pages=home&aksi=tambah" class="btn btn-primary">Refresh Rata-rata Rating</a>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Tutorial</th>
                            <th>Link Youtube</th>
                            <th>Rata-rata rating</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config/config.php';
                        $no = 1;
                        $sql = $conn->query("select * from tutorial");
                        while ($data = $sql->fetch_assoc()) {
                            $id_video = $data['id'];
                            $sql2 = $conn->query("select avg(bintang) from review where id_tutorial = $id_video ");
                            $data2 = $sql2->fetch_assoc();
                            

                            ?>

                            <tr>
                                <td>
                                    <?php echo $no++; ?>
                                </td>
                                <td>
                                    <?php echo $data['judul'] ?>
                                </td>
                                <td>
                                    <?php echo $data['link_video'] ?>
                                </td>
                                <td>
                                    <?php echo number_format((float)$data2['avg(bintang)'], 1, '.', '') ?>
                                </td>
                                <td>
                                    <a href="?pages=home&aksi=ubah&id=<?php echo $data['id'] ?>"
                                        class="btn btn-primary">Detail</a>
                                    <a href="?pages=home&aksi=ubah&id=<?php echo $data['id'] ?>"
                                        class="btn btn-success">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"
                                        href="?pages=home&aksi=hapus&id=<?php echo $data['id'] ?>"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                </tbody>


                </table>
            </div>
        </div>
    </div>

</div>

<?php

include 'config/config.php';
$sql = $conn->query("select * from review");
while ($data = $sql->fetch_assoc()) {

    ?>
    <form method="POST" action="pages/karyawan/nonaktif.php?id=<?php echo $data['id'] ?>"
        onsubmit="return confirm('Apakah kamu sudah yakin?');">
        <div class="modal fade" id="exampleModal<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rata-rata rating</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>Username:</b>
                            <?php echo $data['username'] ?>
                        </p>
                        <p><b>Nama:</b>
                            <?php echo $data['nama'] ?>
                        </p>

                        <p><b>Bagian:</b>
                            <?php echo $data['bagian'] ?>
                        </p>
                        <p><b>Hari Off:</b>
                            <?php echo $data['hari_off'] ?>
                        </p>
                        <p><b>Jam Kerja (Senin-Sabtu):</b>
                            <?php echo substr($data['jam_masuk'], 0, -3) . '-' . substr($data['jam_pulang'], 0, -3); ?>
                        </p>
                        <p><b>Jam Kerja (Minggu):</b>
                            <?php echo substr($data['jam_masuk'], 0, -3) . '-' . substr($data['jam_pulang_minggu'], 0, -3); ?>

                        </p>
                    </div>
                    <div class="modal-footer">
                        <?php
                        if ($data['status'] == 'aktif') {
                            ?>
                            <input type="submit" name="nonaktif" value="Nonaktifkan Akun" class="btn btn-danger ">
                            <?php
                        } else if ($data['status'] == 'tidak_aktif') {
                            ?>
                                <input type="submit" name="aktif" value="Aktifkan Akun" class="btn btn-success ">
                                <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php } ?>