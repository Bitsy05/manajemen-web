<?php
include 'config.php';

$no = $_POST['no'];
$email = $_POST['email'];
$password = $_POST['password'];
$nama_dpn = $_POST['nama_dpn'];
$nama_blkg = $_POST['nama_blkg'];


$result = mysqli_query($connection, "insert into user set email = '$email', password = '$password',nama_dpn = '$nama_dpn', nama_blkg = '$nama_blkg', no='$no'");
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