<?php

include 'config.php';

$data = mysqli_query($connection, "select * from tutorial");
$data = mysqli_fetch_all($data, MYSQLI_ASSOC);

echo json_encode($data);