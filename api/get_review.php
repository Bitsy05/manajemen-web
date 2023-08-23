<?php

include 'config.php';
$email = $_GET['email'];
$id_tutorial = $_GET['id_tutorial'];
$data = mysqli_query($connection, "select * from review where email = '$email' and id_tutorial='$id_tutorial'");
$data = mysqli_fetch_all($data, MYSQLI_ASSOC);

echo json_encode($data);