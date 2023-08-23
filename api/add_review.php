<?php
include 'config.php';

$email = $_POST['email'];
$nama = $_POST['nama_dpn'];
$id_tutorial = $_POST['id_tutorial'];
$bintang = $_POST['bintang'];
$komen_review = $_POST['komen_review'];


$result = mysqli_query($connection, "insert into review set nama = '$nama', email = '$email', id_tutorial = '$id_tutorial',bintang = '$bintang', komen_review = '$komen_review'");
if ($result) {
    echo json_encode([
        'message' => 'Data input successfully'
    ]);
} else {
    echo json_encode([
        'message' => 'Data Failed to input'
    ]);
}
?>